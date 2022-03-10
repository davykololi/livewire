<?php 
// tall-blog/app/Http/Livewire/CategoryPosts.php
namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Category;
use Livewire\Component;

class CategoryPosts extends Component {

    public $posts;

    public function mount($slug) {

    	$category = Category::where('slug',$slug)->firstOrFail();

    	$this->posts = $category->posts()->where('is_published',true)->get();
    }

    public function render()
    {
        return view('livewire.show-posts')->layout("layouts/guest");
    }
}
