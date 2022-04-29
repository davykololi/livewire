<?php

namespace App\Http\Livewire\Author;

use App\Models\Post;
use Livewire\Component;

class AuthorShowPost extends Component
{
	public $post;

	public function mount(Post $post)
	{
		$this->post = $post;
	}

    public function render()
    {
        return view('livewire.author.author-show-post')->layout('layouts.author');
    }
}
