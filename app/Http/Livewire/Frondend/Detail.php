<?php

namespace App\Http\Livewire\Frondend;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;
use Share;
use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\URL;
use App\Models\Post;
use Livewire\Component;

class Detail extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::whereSlug($slug)->first();

        $title = $this->post->title;
        $desc = $this->post->description;
        $keywords = $this->post->keywords;
        $createdAt = $this->post->created_at;
        $categoryName = $this->post->category->name;
        $url = URL::current();
        $postImage = $this->post->image;
        $publishedDate = $this->post->published_at;
        $modifiedDate = $this->post->updated_at;
        $imageUrl = 'https://maxtec.com/storage/'.$postImage;
        $width = '1200';
        $height = '628';
        $author = $this->post->user->name;
        $appName = config('app.name');
        $appMail = 'maxtec@gmail.com';
        $appSubDomain = "http://www.maxtec.com";
        $appLogo = "https://maxtec.com/static/logo.png";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($desc);
        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:published_time', $createdAt->toW3CString(),'property');
        SEOMeta::addMeta('article:section', strtolower($categoryName),'property');
        SEOMeta::setCanonical($url);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type','Article');
        OpenGraph::addProperty('locale','en-US');
        OpenGraph::addImage('https://maxtec.com/storage/storage/'.$postImage,
            ['secure_url' => 'https://maxtec.com/storage/storage/'.$postImage,
            'height'=>'628','width' =>'1200'
        ]);

        Twitter::setTitle($title);
        Twitter::setSite('@maxtec');
        Twitter::setDescription($desc);
        Twitter::setUrl($url);
        Twitter::setImage('https://maxtec.com/storage/storage/'.$postImage);
        Twitter::setType('summary_large_image');

        JsonLd::setTitle($title);
        JsonLd::setDescription($desc);
        JsonLd::setType('Article');
        JsonLd::addImage('https://maxtec.com/storage/storage/'.$postImage);

        $postDetails = Schema::Article()
                ->headline($title)
                ->description($desc)
                ->datePublished($publishedDate)
                ->dateModified($modifiedDate)
                ->image(Schema::ImageObject()->url($imageUrl)->width($width)->height($height))
                ->author(Schema::Person()->name($author))
                ->publisher(Schema::Organization()->name($appName))
                ->email($appMail)
                ->url($url)
                ->sameAS($appSubDomain)
                ->affiliate(Schema::Organization()->name($appName))
                ->logo(Schema::ImageObject()->url($appLogo));
        echo $postDetails->toScript();
    }

    public function render()
    {
        $shareComponent = Share::currentPage()
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view('livewire.frondend.detail',['shareComponent'=>$shareComponent])->layout("layouts/guest");
    }
}
