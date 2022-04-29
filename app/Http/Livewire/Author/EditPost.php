<?php

namespace App\Http\Livewire\Author;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Livewire\WithFileUploads;
use Livewire\Component;

class EditPost extends Component
{
	use WithFileUploads;
	public $post_id,$title,$description,$content,$caption,$keywords,$image,$category_id,$tags,$is_published,$published_date,$user_id,$published_by;

	protected $rules = [
        	'title' => 'required|string|max:255',
            'description' => 'required',
            'content' => 'required|string|min:500',
            'caption' => 'required',
            'keywords' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg,bmp|max:2048',
            'category_id'   => 'required|exists:categories,id',
            'tags'   => 'required|exists:tags,id',
    ];

    protected $messages = [
        'title.required' => 'The title is required',
        'description.required' => 'The description is required',
        'caption.required' => 'The caption is required',
        'content.required' => 'The content is required',
        'image.required' => 'The featured image is required',
        'keywords.required' => 'The keywords are required',
        'tags.required'   => 'The tags are required',
        'category_id.required'   => 'The category the post belongs to is required',
        'min' => 'Value must be more than :min chars',
        'max' => 'Maximum value is 255 chars'
    ];

	public function edit($id)
	{
		$post = Post::findOrFail($id);
		if($post){
			$this->post_id = $id;
			$this->title = $post->title;
			$this->description = $post->description;
			$this->content = $post->content;
			$this->caption = $post->caption;
			$this->keywords = $post->keywords;
			$this->image = $post->image;
			$this->category_id = $post->category->id;
			$this->is_published = true;
			$this->published_date = $post->published_date;
			$this->published_by = $post->published_by;
			$this->user_id = $post->user->id;
		}
	}

	public function update()
	{
		$this->validate();
		if($this->post_id){
			$post = Post::findOrFail($this->post_id);
			$post->update([
				'title'=>$this->title,
				'description'=>$this->description,
				'image'=>$this->image,
				
			]);
		}
	}

    public function render()
    {
    	$categories = Category::with('posts')->get();
    	$this->tags = Tag::all()->pluck('name','id');

        return view('livewire.author.edit-post',['categories'=>$categories])->layout('layouts.author');
    }
}
