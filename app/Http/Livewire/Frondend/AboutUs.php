<?php

namespace App\Http\Livewire\Frondend;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;
use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class AboutUs extends Component
{
	public function mount()
	{
		$title = 'About Us';
        $desc = 'Maximum Technology About Us Page';
        $keywords = 'maxtec about us page, maximum technology about us page,about us';
        $url = URL::current();

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($desc);
        SEOMeta::setKeywords($keywords);
        SEOMeta::setCanonical($url);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type','Organization');

        Twitter::setTitle($title);
        Twitter::setSite('@maxtec');
        Twitter::setDescription($desc);
        Twitter::setUrl($url);

        JsonLd::setTitle($title);
        JsonLd::setDescription($desc);
        JsonLd::setType('Organization');

        $contact = Schema::Organization()
                ->name($title)
                ->description($desc)
                ->url($url)
                ->logo("https://maxtec.com/static/logo.png")
                ->sameAS("https://www.maxtec.com")
                ->contactPoint([Schema::ContactPoint()
                ->telephone('254 0724351952')
                ->email('maxtec@gmail.com')]);
        echo $contact->toScript();
	}
    public function render()
    {
        return view('livewire.frondend.about-us')->layout("layouts/guest");
    }
}
