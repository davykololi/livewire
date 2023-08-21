<?php

namespace App\Http\Livewire\Frondend;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;
use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\URL;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class AuthorPosts extends Component
{
	public $posts;

    public function mount($slug)
    {
    	$user = User::where(['role'=>'author','slug'=>$slug])->firstOrFail();
    	$this->posts = $user->posts()->where('is_published',true)->latest()->get();
    	
        $name = $user->name;
        $orgName = config('app.name');
        $title = 'Articles By'." ".$name;
        $desc = $orgName." ".$title;
        $email = $user->email;
        $image = 'https://maxtec.com/storage/posts/'.$user->image;
        $publishedDate = $user->created_at;
        $modifiedDate = $user->updated_at;
        $phone = $user->phone_no;
        $area = $user->area;
        $url = URL::current();
        $appMail = 'maxtec@gmail.com';
    	$appSubDomain = "http://www.maxtec.com";
    	$appLogo = "https://maxtec.com/static/logo.png";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($desc);
        SEOMeta::setKeywords($user->keywords);
        SEOMeta::setCanonical($url);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type','Person');

        Twitter::setTitle($title);
        Twitter::setSite('@maxtec');
        Twitter::setDescription($desc);
        Twitter::setUrl($url);
        Twitter::setType('summary_large_image');

        JsonLd::setTitle($title);
        JsonLd::setDescription($desc);
        JsonLd::setType('Person');

        foreach($this->posts as $post){
        OpenGraph::addImage('https://maxtec.com/storage/posts/'.$post->image,['height'=>'628','width' =>'1200']);
        JsonLd::addImage('https://maxtec.com/storage/posts/'.$post->image);
        Twitter::setImage('https://maxtec.com/storage/posts/'.$post->image);
        }

        $userPosts = Schema::Person()
                ->name($name)
                ->image($image)
                ->logo(Schema::ImageObject()->url($appLogo))
                ->url($url)
                ->sameAS($appSubDomain)
                ->datePublished($publishedDate)
                ->dateModified($modifiedDate)
                ->contactPoint([Schema::ContactPoint()->email($email)->phone($phone)->areaServed($area)])
              	->affiliate(Schema::Organization()->name($orgName)->email($appMail));
        echo $userPosts->toScript();
    }

    public function render()
    {
        return view('livewire.frondend.show-posts')->layout("layouts/guest");
    }
}
