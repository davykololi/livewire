<?php

namespace App\Http\Livewire\Front;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;
use Mail;
use Spatie\SchemaOrg\Schema;
use App\Models\Contact;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class ContactUs extends Component
{
	public $name,$email,$subject,$message;

	protected $rules = [
		'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
	];

	protected $messages = [
        'name.required' => 'Your name is required',
        'email.required' => 'Your email address is required',
        'subject.required' => 'The subject title is required',
        'message.required' => 'The message is required',
    ];

    public function mount()
    {
    	$title = 'Contact Us';
        $desc = 'Maximun Technology Contact Us Page';
        $keywords = 'maxtec contact us page, maximum technology contact us page,contact us';
        $url = URL::current();

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($desc);
        SEOMeta::setKeywords($keywords);
        SEOMeta::setCanonical($url);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($desc);
        OpenGraph::setUrl($url);
        OpenGraph::addProperty('type','ContactPage');

        Twitter::setTitle($title);
        Twitter::setSite('@maxtec');
        Twitter::setDescription($desc);
        Twitter::setUrl($url);

        JsonLd::setTitle($title);
        JsonLd::setDescription($desc);
        JsonLd::setType('ContactPage');

        $contact = Schema::ContactPage()
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

    public function clearFields()
    {
    	$this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }

    public function store()
    {
    	$this->validate();
		$contact = Contact::create([
			'name'=>$this->name,
			'email'=>$this->email,
			'subject'=>$this->subject,
			'message'=>$this->message,
		]);
        Mail::send('email',[
            'name' => clean($this->name),
            'email' => clean($this->email),
            'subject' => clean($this->subject),
            'message' => clean($this->message),
            ]);
        //Set Flash Message
        toastr()->success('Thank you for reaching out to us!!');
        $this->clearFields();
    }

    public function render()
    {
        return view('livewire.front.contact-us')->layout("layouts/guest");
    }
}
