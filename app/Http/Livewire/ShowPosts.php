<?php

namespace App\Http\Livewire;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;
use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\URL;
use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::where('is_published', true)->get();
        $app_name = config('app.name');
        $title = 'Home';
        $desc = 'The platform for laravel, vue js, react js, tailwind css and bootstrap tutorials and other latest programming online tutorials';
        $keywords = 'react js tutorials, vue js tutorials, laravel tutorials,tailwind css tutorials';
        $url = URL::current();
        $tel = '+254 0724351952';
        $logo = 'https://maxtec.com/static/logo.jpg';
        
    	SEOMeta::setTitle($title);
        SEOMeta::setDescription($desc);
        SEOMeta::setCanonical($url);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type','Website');
        OpenGraph::addProperty('locale','en-US');

        Twitter::setTitle($title);
        Twitter::setSite('@maxtec');
        Twitter::setDescription($desc);
        Twitter::setUrl($url);

        JsonLd::setTitle($title);
        JsonLd::setDescription($desc);
        JsonLd::setType('Website');
        JsonLd::addImage($logo);

        $webSite = Schema::Website()
                ->name($app_name)
                ->headline($title)
                ->description($desc)
                ->keywords($keywords)
                ->email('maxtec.com')
                ->url($url)
                ->contactPoint(Schema::ContactPoint()->telephone($tel)->areaServed('Worldwide'))
                ->address(Schema::PostalAddress()->addressCountry('Kenya')->postalCode('254')->streetAddress('688 Bungoma'))
                ->sameAS("http://www.maxtec.com")
                ->logo(Schema::ImageObject()->url($logo));
                
        echo $webSite->toScript();
    }
    
    public function render()
    {
        return view('livewire.show-posts')->layout("layouts/guest");
    }
}
