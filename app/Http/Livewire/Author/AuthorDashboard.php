<?php

namespace App\Http\Livewire\Author;

use Livewire\Component;

class AuthorDashboard extends Component
{
    public function render()
    {
        return view('livewire.author.author-dashboard')->extends('layouts.author')->section('content');
    }
}
