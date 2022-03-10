<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NewPost extends Component
{
    public $post;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    protected $rules = [
        'post.title' => 'required|string',
        'post.desc' => 'required|string|min:100',
        'post.content' => 'required|string|min:500',
        'post.excerpt' => 'required|min:100:max:250',
        'post.is_published' => 'boolean',
        'post.category_id' => 'required',
    ];

    protected $messages = [
        'required' => 'This field is required',
        'min' => 'Value must be more than :min chars',
        'max' => 'Maximum value is 250 chars'
    ];

    public function render()
    {
        return view('livewire.dashboard.new-post');
    }

    public function save()
    {
        $this->validate();

        $post = Post::create([
            'title' => $this->post['title'],
            'excerpt' => $this->post['excerpt'],
            'category_id' => $this->post['category'],
            'desc' => $this->post['desc'],
            'content' => $this->post['content'],
            'published_date' => now(),
            'user_id' => Auth()->user()->id,
            'is_published' => $this->post['is_published']
        ]);

        $id = $post->save();

        return redirect()->to(route('upload-featured-image', ['id' => $id]));
    }
}
