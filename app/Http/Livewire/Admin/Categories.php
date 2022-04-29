<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
	public $categories,$name,$description,$keywords,$category_id;
    public $updateCategory = false;

    protected $listeners = [
        'deleteCategory'=>'destroy'
    ];

    // Validation Rules
    protected $rules = [
        'name'=>'required',
        'description'=>'required',
        'keywords' => 'required',
    ];

    public function render()
    {
    	$this->categories = Category::select('id','name','description','keywords')->get();
        
        return view('livewire.admin.categories')->layout('layouts.admin');
    }

    public function resetFields(){
        $this->name = '';
        $this->description = '';
        $this->keywords = '';
    }

    public function store(){

        // Validate Form Request
        $validated = $this->validate();

        try{
            // Create Category
            Category::create($validated);
    
            // Set Flash Message
            session()->flash('success','Category Created Successfully!!');

            // Reset Form Fields After Creating Category
            $this->resetFields();
            
        }catch(\Exception $e){
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating category!!');

            // Reset Form Fields After Creating Category
            $this->resetFields();
        }
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        $this->category_id = $id;
        $this->name = $category->name;
        $this->description = $category->description;
        $this->keywords = $category->keywords;
        $this->updateCategory = true;
    }

    public function cancel()
    {
        $this->updateCategory = false;
        $this->resetFields();
    }

    public function update(){

        // Validate Form Request
        $validated = $this->validate();

        try{
            // Update category
            $category = Category::find($this->category_id);
            $category->update([
                'name'=>$this->name,
                'description'=>$this->description,
                'keywords'=>$this->keywords,
            ]);

            $this->cancel();
            session()->flash('success','Category Updated Successfully!!');
      
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating category!!');
            $this->cancel();
        }
    }

    public function destroy($id){
        try{
            Categories::find($id)->delete();
            session()->flash('success',"Category Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting category!!");
        }
    }
}
