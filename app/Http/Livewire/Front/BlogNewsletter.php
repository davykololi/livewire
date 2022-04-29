<?php

namespace App\Http\Livewire\Front;

use Newsletter;
use Livewire\Component;

class BlogNewsletter extends Component
{
	public $email;

	public function mount()
	{
		$email = $this->email;
	}
	
	public function store()
    {
        if(!Newsletter::isSubscribed($this->email)){
            Newsletter::subscribePending($this->email);
            //Set Flash Message
            toastr()->success('Thanks For Subscribing');

            return back();
        }
        //Set Flash Message
        toastr()->errors('Sorry! You have already subscribed');

        return('newsletter');
    }
    public function render()
    {
        return view('livewire.front.blog-newsletter');
    }
}
