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
	public $title,$description,$content,$caption,$keywords,$image,$category_id,$categories,$tags;
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
        'tags.required'   => 'The tags the article belongs to are required',
        'category_id.required'   => 'The category the post belongs to is required',
        'min' => 'Value must be more than :min chars',
        'max' => 'Maximum value is 255 chars'
    ];

	public function successfull()
	{
		$this->success = true;
	}

	public function save()
	{
		$data = $this->validate();
		$data['is_published'] = $this->is_published;
		$data['user_id'] = Auth::user()->id;
		$data['category_id'] = $this->category_id;
		$data['published_date'] = now();
		$file_name = $this->image->store('files','public');
		$data['image'] = $file_name;
		$post = Post::create($data);

		if($post){
			$post->tags()->sync($this->tags);
			//Set Flash Message
    		toastr()->success('Post Created Successfully!!');
			$this->successfull();
			$this->reset();

			return redirect()->to('/author/posts');
		}
        
	}

    public function render()
    {
    	$this->categories = Category::all();
    	$this->tags = Tag::all()->pluck('name','id');

        return view('livewire.author.create-post')->layout('layouts.author');
    }
}
