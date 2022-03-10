<?php

namespace App\Http\Livewire\Author;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreatePost extends Component
{
	use WithFileUploads;
	public $title,$description,$content,$caption,$keywords,$image,$category_id,$post_id,$tags;
	public $success = false;
	public $featured = false;
	public $is_published = false;

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

	public function togglePublished()
	{
		$this->is_published = !$this->is_published;
	}

	public function successfull()
	{
		$this->success = true;
	}

	public function save()
	{
		$this->validate();
		Post::create([
			'title'=>$this->title,
			'slug'=> Str::slug($this->title),
			'caption'=>$this->caption,
			'content'=>$this->content,
			'description'=>$this->description,
			'keywords'=>$this->keywords,
			'is_published'=> $this->is_published,
			'user_id'=>auth()->id,
			'category_id'=>$this->category_id,
			'published_date' => now(),
			'published_by' => $this->published_by,
			'tags'=>$this->tags,
		]);
		//Set Flash Message
    		session()->flash('success','Post Created Successfully!!');
			$this->successfull();
			$this->reset();

			redirect()->to('author/posts');
	}

    public function render()
    {
    	$categories = Category::all();
    	$allTags = Tag::all()->pluck('name','id');

        return view('livewire.author.create-post',['categories'=>$categories,'allTags'=>$allTags])->extends('layouts.author')->section('content');
    }
}
