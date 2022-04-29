<?php

namespace App\Http\Livewire\Author;

use App\Models\Post;
use Livewire\WithPagination;
use Livewire\Component;

class ListPost extends Component
{
    public $is_published = false;
	use WithPagination;

    protected $listeners = [
        'deletePost'=>'destroy'
    ];

    public function render()
    {	
    	$posts = Post::with('category','user')->latest()->published()->paginate(10);
    	
        return view('livewire.author.list-post',['posts'=>$posts])->layout('layouts.author');
    }

    public function destroy($id)
    {
    	$post = Post::findOrFail($id);
        if($post){
            $post->delete();
            //Set Flash Message
            toastr()->success('Post Deleted Successfully!!');

            return redirect()->to('author/posts');
        }
    }
}
