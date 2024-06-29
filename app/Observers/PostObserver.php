<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{

    public function creating(Post $post)
    {
        if (! \App::runningInConsole()) {
            $post->user_id = auth()->user()->id;
        }
    }

    public function deleting(Post $post)
    {
        // Eliminar todas las imágenes asociadas al post
        foreach ($post->images as $image) {
            Storage::delete($image->url);
            $image->delete();
        }
    }

}
