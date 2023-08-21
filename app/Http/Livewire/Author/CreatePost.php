<?php

namespace App\Http\Livewire\Author;

use Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreatePost extends Component
{
	use WithFileUploads;
	public $title,$description,$content,$caption,$keywords,$image,$category_id,$categories,$tags=[];
	public $success = false;
	public $is_published = false;

    protected $rules = [
        	'title' => 'required|string|max:255',
            'description' => 'required',
            'content' => 'required|string|min:500',
            'caption' => 'required',
            'keywords' => 'required',
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg,bmp|max:2048',
            'category_id'   => 'required|exists:categories,id',   
    ];

    protected $messages = [
        'title.required' => 'The title is required',
        'description.required' => 'The description is required',
        'caption.required' => 'The caption is required',
        'content.required' => 'The content is required',
        'image.required' => 'The featured image is required',
        'keywords.required' => 'The keywords are required',
        
        'category_id.required'   => 'The category the post belongs to is required',
        'min' => 'Value must be more than :min chars',
        'max' => 'Maximum value is 255 chars'
    ];

	public function save()
	{
		$data = $this->validate();
		$data['is_published'] = $this->is_published;
		$data['user_id'] = Auth::user()->id;
		$data['category_id'] = $this->category_id;
		$data['published_date'] = now();
        $image = $this->image->store('images','public');
		$data['image'] = $image;

		$post = Post::create($data);
		$post->tags()->sync(request($this->tags));
		//Set Flash Message
    	toastr()->success('Post Created Successfully!!');

		return redirect()->to('/author/posts');
	}

    public function render()
    {
    	$this->categories = Category::all();
    	$this->tags = Tag::pluck('name','id')->toArray();

        return view('livewire.author.create-post')->layout('layouts.author');
    }
}
