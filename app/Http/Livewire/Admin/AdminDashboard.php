<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
	public $title;
	public function mount()
	{
		$this->title = 'Admin Dashboard';
	}
    public function render()
    {
        return view('livewire.admin.admin-dashboard')->layout('layouts.admin');
    }
}
