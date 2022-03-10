<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostItem extends Component
{
	public $post;

	public function mount()
	{
		$this->post = Post::where('is_published',true)->firstOrFail();
	}
	
    public function render()
    {
        return view('livewire.post-item');
    }
}
