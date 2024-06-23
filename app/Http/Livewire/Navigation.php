<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Icono;
use App\Models\Post;


class Navigation extends Component
{
    public $navColor;
    public $textColor;
    public $search = '';
    public $searchResults = [];


    protected $listeners = ['colorUpdated' => 'updateColor'];

    public function mount()
    {
        $icono = Icono::first();
        $this->navColor = $icono->nav_color ?? '#1f2937';
        $this->textColor = $icono->text_color ?? '#ffffff';
    }

    public function render()
    {
        $user = auth()->user();
        $icono = Icono::first();
        $categories = Category::all();
        $isEmailVerified = $user && $user->email_verified_at !== null;
    
        return view('livewire.navigation', compact('categories', 'icono', 'isEmailVerified'));
    }
    

    public function updateColor($navColor, $textColor)
    {
        $this->navColor = $navColor;
        $this->textColor = $textColor;

        $this->emit('colorUpdated', $navColor, $textColor);
    }
    public function updatedSearch()
    {
        if (empty($this->search)) {
            $this->searchResults = [];
        } else {
            $searchTerm = '%' . $this->search . '%';
            $this->searchResults = Post::where('name', 'like', $searchTerm)
                ->where('status', 2) // Filtra por estado igual a 2 (publicados)
                ->get();
        }
    }
    
}
