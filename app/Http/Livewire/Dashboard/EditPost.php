<?php //tall-blog/app/Http/Livewire/Dashboard/EditPost.php

namespace App\Http\Livewire\Dashboard;

use App\Models\Post;
use Livewire\Component;

class EditPost extends Component
{
    public $post;
    public $isEdit = true;

    protected $rules = [
        'post.title' => 'required|string',
        'post.category_id' => 'required',
        'post.desc' => 'required|string|min:100',
        'post.content' => 'required|string|min:500',
        'post.excerpt' => 'required|min:100:max:250',
        'post.is_published' => 'boolean',
    ];

    public function mount($id)
    {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.dashboard.new-post');
    }

    public function save()
    {
        $this->validate();
        $this->post->save();
        session()->flash("message", "Post update successful");
    }
}
