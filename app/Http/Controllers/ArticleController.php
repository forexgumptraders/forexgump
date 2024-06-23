<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use App\Models\Article;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Log;




class ArticleController extends Controller
{
   // Método index
public function index()
{
    $perPage = 6; // Número de artículos por página
    $page = request()->page ?: 1;

    $key = 'articles' . $page . '_perPage' . $perPage;
    $articles = Cache::remember($key, now()->addMinutes(10), function () use ($perPage) {
        return Article::where('status', 2)
            ->latest('id')
            ->withCount('likes')
            ->paginate($perPage);
    });
    

    foreach ($articles as $article) {
        $likesCount = Like::where('article_id', $article->id)
            ->where('type', 'like')
            ->count();

        $dislikesCount = Like::where('article_id', $article->id)
            ->where('type', 'dislike')
            ->count();

        $article->likesCount = $likesCount;
        $article->dislikesCount = $dislikesCount;
    }

    return view('articles.index', compact('articles'));
}

// Método loadMoreArticles
public function loadMoreArticles(Request $request)
{
    try {
        $perPage = $request->input('perPage', 6);
        $page = $request->input('page', 1);

        $articles = Article::where('status', 2)
            ->latest('id')
            ->withCount('likes')
            ->paginate($perPage, ['*'], 'page', $page);

        foreach ($articles as $article) {
            $likesCount = Like::where('article_id', $article->id)
                ->where('type', 'like')
                ->count();

            $dislikesCount = Like::where('article_id', $article->id)
                ->where('type', 'dislike')
                ->count();

            $article->likesCount = $likesCount;
            $article->dislikesCount = $dislikesCount;
        }

        $view = view('articles.partials.tab-all')->with('articles', $articles)->render();

        return response()->json(['html' => $view]);
    } catch (\Exception $e) {
        Log::error('Error loading articles: ' . $e->getMessage());
        return response()->json(['error' => 'Internal Server Error. Please check the logs for details.'], 500);
    }
}







    // public function index()
    // {
    //     $articles = Cache::remember('articles', now()->addMinutes(10), function () {
    //         return Article::where('status', 2)->latest('id')->withCount('likes')->paginate(8);
    //     });
    
    //     $freeAlerts = $articles->where('modo', 'free')->each(function ($freeAlert) {
    //         $this->loadLikesDislikesCounts($freeAlert);
    //     });
    
    //     $plusAlerts = $articles->where('modo', 'plus')->each(function ($plusAlert) {
    //         $this->loadLikesDislikesCounts($plusAlert);
    //     });
    
    //     return view('articles.index', compact('articles','freeAlerts', 'plusAlerts'));
    // }
    
    // protected function loadLikesDislikesCounts($alert)
    // {
    //     $alert->likesCount = Like::where('article_id', $alert->id)->where('type', 'like')->count();
    //     $alert->dislikesCount = Like::where('article_id', $alert->id)->where('type', 'dislike')->count();
    // }


    public function apiIndex()
    {
        $articles = Article::where('status', 2)->latest('id')->paginate(8);
        return response()->json($articles);
    }



    public function show(Article $article)
    {
        $this->authorize('published', $article);
    
        // Contar likes y dislikes del artículo actual
        $likesCount = Like::where('article_id', $article->id)
            ->where('type', 'like')
            ->count();
    
        $dislikesCount = Like::where('article_id', $article->id)
            ->where('type', 'dislike')
            ->count();
    
        $article->likesCount = $likesCount;
        $article->dislikesCount = $dislikesCount;
    
        return view('articles.show', compact('article'));
    }
    

        public function hasLiked(Article $article, $type)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }
        

        $hasLiked = Like::where('article_id', $article->id)
            ->where('user_id', $user->id)
            ->where('type', $type)
            ->exists();

        return response()->json(['hasLiked' => $hasLiked]);
    }



    public function like(Article $article)
    {
        $user = Auth::user();
        $type = 'like';

        // Verificar si ya existe un registro para este artículo y usuario
        $existingLike = Like::where('article_id', $article->id)
            ->where('user_id', $user->id)
            ->first();

        if ($existingLike) {
            // Actualizar el tipo de voto
            $existingLike->type = $type;
            $existingLike->save();
        } else {
            // Si no existe, crear un nuevo registro
            $like = new Like([
                'article_id' => $article->id,
                'user_id' => $user->id,
                'type' => $type
            ]);
            $like->save();
        }

        return response()->json(['success' => true]);
    }


    public function dislike(Article $article)
    {
        $user = Auth::user();
        $type = 'dislike';

        // Verificar si ya existe un registro para este artículo y usuario
        $existingLike = Like::where('article_id', $article->id)
            ->where('user_id', $user->id)
            ->first();

        if ($existingLike) {
            // Actualizar el tipo de voto
            $existingLike->type = $type;
            $existingLike->save();
        } else {
            // Si no existe, crear un nuevo registro
            $like = new Like([
                'article_id' => $article->id,
                'user_id' => $user->id,
                'type' => $type
            ]);
            $like->save();
        }

        return response()->json(['success' => true]);
    }

    public function cancelLikeOrDislike(Article $article)
    {
        $user = Auth::user();
    
        // Verificar si el usuario ha registrado un "Me gusta" o "No me gusta" previamente
        $existingLike = Like::where('article_id', $article->id)
            ->where('user_id', $user->id)
            ->first();
    
        if ($existingLike) {
            // Elimina el registro existente
            $existingLike->delete();
        }
    
        return response()->json(['success' => true]);
    }
    

    public function checkLike()
    {
        $authenticated = auth()->check(); // Verifica si el usuario está autenticado
        

        return response()->json(['authenticated' => $authenticated]);
    }

    public function getLikeDislikeCounts($articleId)
{
    $article = Article::withCount(['likes as likesCount', 'dislikes as dislikesCount'])
        ->find($articleId);

    if (!$article) {
        return response()->json([
            'success' => false,
            'message' => 'Artículo no encontrado',
        ], 404);
    }

    return response()->json([
        'success' => true,
        'likesCount' => $article->likesCount,
        'dislikesCount' => $article->dislikesCount,
    ]);
}


}

