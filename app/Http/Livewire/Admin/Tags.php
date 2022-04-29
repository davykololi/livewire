<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;

class Tags extends Component
{
	public $tags,$name,$desc,$keywords,$tag_id;
    public $updateTag = false;

    protected $listeners = [
        'deleteTag'=>'destroy'
    ];

    // Validation Rules
    protected $rules = [
        'name'=>'required',
        'desc'=>'required',
        'keywords' => 'required',
    ];

    public function render()
    {
    	$this->tags = Tag::select('id','name','desc','keywords')->get();

        return view('livewire.admin.tags')->layout('layouts.admin');
    }

        public function resetFields(){
        $this->name = '';
        $this->desc = '';
        $this->keywords = '';
    }

    public function store(){

        // Validate Form Request
        $validated = $this->validate();

        try{
            // Create Category
            Tag::create($validated);
    
            // Set Flash Message
            session()->flash('success','Tag Created Successfully!!');

            // Reset Form Fields After Creating Category
            $this->resetFields();
            
        }catch(\Exception $e){
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating the tag!!');

            // Reset Form Fields After Creating Category
            $this->resetFields();
        }
    }

    public function edit($id){
        $tag = Tag::findOrFail($id);
        $this->tag_id = $id;
        $this->name = $tag->name;
        $this->desc = $tag->desc;
        $this->keywords = $tag->keywords;
        $this->updateTag = true;
    }

    public function cancel()
    {
        $this->updateTag = false;
        $this->resetFields();
    }

    public function update(){

        // Validate Form Request
        $validated = $this->validate();

        try{
            // Update category
            $tag = Tag::find($this->tag_id);
            $tag->update([
                'name'=>$this->name,
                'desc'=>$this->desc,
                'keywords'=>$this->keywords,
            ]);

            $this->cancel();
            session()->flash('success','Tag Updated Successfully!!');
      
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating the tag!!');
            $this->cancel();
        }
    }

    public function destroy($id){
        try{
            Tag::find($id)->delete();
            session()->flash('success',"Tag Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting the tag!!");
        }
    }
}
