<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{

       public function __construct(){
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit', 'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');
    }
    
    public function index()
    {
        return view('admin.posts.index');
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();

     	return view('admin.posts.create', compact('categories', 'tags'));   

    }


    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
    
        // Manejar la primera imagen
        if ($request->hasFile('file1')) {
            $url = Storage::put('posts', $request->file('file1'));
            $post->images()->create(['url' => $url]);
        }
    
        // Manejar la segunda imagen
        if ($request->hasFile('file2')) {
            $url = Storage::put('posts', $request->file('file2'));
            $post->images()->create(['url' => $url]);
        }
    
        Cache::flush();
    
        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
    
        return redirect()->route('admin.posts.edit', $post);
    }
    

    public function edit(Post $post)
    {
        $this->authorize('author', $post);

        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }


    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('author', $post);
    
        // Actualizar los campos del post
        $post->update($request->all());
    
        // Manejar la primera imagen (file1)
        if ($request->hasFile('file1')) {
            $firstImage = $post->images()->first(); // Obtener la primera imagen asociada al post
    
            if ($firstImage) {
                // Eliminar la imagen actual
                Storage::delete($firstImage->url);
                
                // Actualizar la imagen existente
                $url1 = Storage::put('posts', $request->file('file1'));
                $firstImage->update(['url' => $url1]);
            } else {
                // Crear una nueva imagen si no existe
                $url1 = Storage::put('posts', $request->file('file1'));
                $post->images()->create(['url' => $url1]);
            }
        }
    
    
        // Manejar la segunda imagen (file2)
        if ($request->hasFile('file2')) {
            $secondImage = $post->images()->skip(1)->first(); // Obtener la segunda imagen asociada al post si existe
    
            if ($secondImage) {
                // Eliminar la imagen actual
                Storage::delete($secondImage->url);
    
                // Actualizar la segunda imagen existente
                $url2 = Storage::put('posts', $request->file('file2'));
                $secondImage->update(['url' => $url2]);
            } else {
                // Crear una nueva segunda imagen si no existe
                $url2 = Storage::put('posts', $request->file('file2'));
                $post->images()->create(['url' => $url2]);
            }
        }

        
    
        // Sincronizar etiquetas
        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }
    
        // Limpiar cache si es necesario
        Cache::flush();
    
        // Redirigir con mensaje de éxito
        return redirect()->route('admin.posts.edit', $post)->with('info', 'El post se actualizó con éxito');
    }


    public function destroy(Post $post)
    {
            
            
        $post->delete();

        Cache::flush();

        return redirect()->route('admin.posts.index', $post)->with('info', 'El post se elimino con exito');
    }
}
