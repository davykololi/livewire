<?php

namespace App\Http\Livewire\Frondend;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;
use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\URL;
use App\Models\Post;
use App\View\Components\GuestLayout;
use Livewire\Component;

class FrontendArticles extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::published()->latest()->eagerLoaded()->limit(10)->get();
    }

    public function render()
    {
        return view('livewire.frondend.frontend-articles');
    }
}
