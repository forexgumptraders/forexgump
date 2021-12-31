<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
        public function __construct(){
        $this->middleware('can:admin.articles.index')->only('index');
        $this->middleware('can:admin.articles.create')->only('create', 'store');
        $this->middleware('can:admin.articles.edit')->only('edit', 'update');
        $this->middleware('can:admin.articles.destroy')->only('destroy');
    }
    

    public function index()
    {
        return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
          $article = Article::create($request->all());

        if ($request->file('file')) {

            $url = Storage::put('articles', $request->file('file'));

            $article->image()->create([
                'url' => $url
            ]);
        }

        Cache::flush();


        return redirect()->route('admin.articles.edit', $article);
    }


    public function edit(Article $article)
    {

        $this->authorize('author', $article);

        return view('admin.articles.edit', compact('article'));
    }



    public function update(ArticleRequest $request, Article $article)
    {
        $this->authorize('author', $article);

        $article->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('articles', $request->file('file'));

            if ($article->image) {

                Storage::delete('$article->image->url');

                $article->image->update([
                    'url' => $url
                ]);
            
            }else{
                $article->image()->create([
                    'url' => $url
                ]);
            }
        }

        Cache::flush();

        return redirect()->route('admin.articles.edit', $article)->with('info', 'La señal se actualizo con exito');
    }

 
    public function destroy(Article $article)
    {

        $this->authorize('author', $article);

        $article->delete();

        Cache::flush();

        return redirect()->route('admin.articles.index', $article)->with('info', 'La señal se elimino con exito');
    }
}
