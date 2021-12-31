<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use Livewire\WithPagination;

use App\Models\Article;

class ArticleIndex extends Component
{


	use WithPagination;

	protected $paginationTheme = "bootstrap";

	public $search;

	public function updatingSearch(){
		$this->resetPage();
	}

    public function render()
    {
    	$articles = Article::where('user_id', auth()->user()->id)->where('title', 'LIKE' ,'%' . $this->search . '%')->latest('id')->paginate();

        return view('livewire.admin.article-index', compact('articles'));
    }
}
