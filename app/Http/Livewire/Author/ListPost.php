<?php

namespace App\Http\Livewire\Author;

use App\Models\Post;
use Livewire\WithPagination;
use Livewire\Component;

class ListPost extends Component
{
	use WithPagination;

    public function render()
    {	
    	$posts = auth()->user()->posts()->latest()->published()->paginate(10);
        return view('livewire.author.list-post',['posts'=>$posts])->extends('layouts.author')->section('content');
    }
}
