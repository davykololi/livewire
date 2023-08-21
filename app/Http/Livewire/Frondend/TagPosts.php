<?php

namespace App\Http\Livewire\Frondend;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;
use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\URL;
use App\Models\Tag;
use Livewire\Component;

class TagPosts extends Component
{
	public $posts;

    public function mount($slug)
    {
    	$tag = Tag::where('slug',$slug)->firstOrFail();
    	$this->posts = $tag->posts()->where('is_published',true)->get();
    	$title = $tag->name;
    	$desc = $tag->desc;
    	$keywords = $tag->keywords;
    	$url = URL::current();
    	$publishedDate = $tag->created_at;
    	$modifiedDate = $tag->updated_at;
    	$appMail = 'maxtec@gmail.com';
    	$appSubDomain = "http://www.maxtec.com";
    	$appLogo = "https://maxtec.com/static/logo.png";

    	SEOMeta::setTitle($title);
        SEOMeta::setDescription($desc);
        SEOMeta::setKeywords($keywords);
        SEOMeta::setCanonical($url);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type','articles');

        Twitter::setTitle($title);
        Twitter::setSite('@maxtec');
        Twitter::setDescription($desc);
        Twitter::setUrl($url);
        Twitter::setType('summary_large_image');

        JsonLd::setTitle($title);
        JsonLd::setDescription($desc);
        JsonLd::setType('articleSection');
        
        foreach($this->posts as $post){
        OpenGraph::addImage('https://maxtec.com/storage/storage/'.$post->image,
            ['secure_url' => 'https://maxtec.com/storage/storage/'.$post->image,
            'height'=>'628','width' =>'1200'
        ]);
        JsonLd::addImage('https://maxtec.com/storage/storage/'.$post->image);
        Twitter::setImage('https://maxtec.com/storage/storage/'.$post->image);
        }

        $postDetails = Schema::Article()
                ->articleSection($title)
                ->description($desc)
                ->datePublished($publishedDate)
                ->dateModified($modifiedDate)
                ->email($appMail)
                ->url($url)
                ->sameAS($appSubDomain)
                ->logo(Schema::ImageObject()->url($appLogo));
        echo $postDetails->toScript();
    }


    public function render()
    {
        return view('livewire.frondend.show-posts')->layout("layouts/guest");
    }
}
