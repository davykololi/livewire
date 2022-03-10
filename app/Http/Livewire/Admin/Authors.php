<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Authors extends Component
{
	public $authors,$name,$email,$slug,$password,$author_id;
	public $updateAuthor = false;

	protected $listeners = [
		'deleteAuthor'=>'destroy'
	];
	//Validation Rules
	protected $rules = [
		'name'=>'required|string',
		'email'=>'required|string',
	];

    public function render()
    {
    	$this->authors = User::whereRole('author')->latest()->get();
        return view('livewire.admin.authors')->extends('layouts.admin')->section('content');
    }

    public function resetFields()
    {
    	$this->name = '';
    	$this->email = '';
    	$this->role = '';
    }

    public function store()
    {
    	//Validate Form Request
    	$this->validate();

    	try{
    		//Create Author
    		User::create([
    			'name'=> $this->name,
    			'email'=> $this->email,
    			'slug' => Str::slug($this->name),
    			'password' => Hash::make($this->password),
    			'role' => 'author',
    		]);

    		//Set Flash Message
    		session()->flash('success','Author Created Successfully!!');

    		//Reset Form Fields After Creating Category
    		$this->resetFields();
    	}catch(\Exception $e){
    		//Set Flash Message
    		session()->flash('error','Something Goes Wrong While Creating Author!!');

    		//Reset Form Fields After Creating Category
    		$this->resetFields();
    	}
    }

    public function edit($id)
    {
    	$author = User::findOrFail($id);
    	$this->name = $author->name;
    	$this->role = $author->role;
    	$this->email = $author->email;
    	$this->slug = $author->slug;
    	$this->author_id = $author->id;
    	$this->updateAuthor = true;

    }

    public function cancel()
    {
    	$this->updateAuthor=false;
    	$this->resetFields();
    }

    public function update()
    {
    	//Validate Form Request
    	$this->validate();

    	try{
    		//Create Author
    		User::find($this->author_id)->fill([
    			'name'=> $this->name,
    			'email'=> $this->email,
    			'slug' => Str::slug($this->name),
    			'password' => Hash::make($this->password),
    			'role' => 'author',
    		])->save();

    		//Set Flash Message
    		session()->flash('success','Author Updated Successfully!!');

    		//Cancel Form
    		$this->cancel();
    	}catch(\Exception $e){
    		//Set Flash Message
    		session()->flash('error','Something Goes Wrong While Updating Author!!');

    		//Cancel Form
    		$this->cancel();
    	}
    }

    public function destroy($id)
    {
    	try{
    		User::findOrFail($id)->delete();
    		//Set Flash Message
    		session()->flash('success','Author Deleted Successfully!!');
    	}catch(\Exception $e){
    		//Set Flash Message
    		session()->flash('error','Something Goes Wrong While Deleting Author!!');
    	}
    }
}
