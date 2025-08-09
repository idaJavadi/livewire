<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryManager extends Component
{
    public $name = "";
    public $categories = [];
    public $editId = null;

    public function mount(){
        $this->categories = Category::all();
    }

    protected $rules = [
        'name' => 'required|string|min:2',
    ];

    public function save(){
        $this->validate();
        if($this->editId){
            $category = Category::find($this->editId);
            $category->update([
                'name' => $this->name,
            ]);
            session()->flash('message', 'دسته بندی با موفقیت ویرایش شد');
        }else{
            Category::create(['name' => $this->name]);
            session()->flash('message', 'دسته بندی با موفقیت افزوده شد');
        }

        $this->resetForm();
        $this->categories = Category::all();
    }

    public function edit($id){
        $category = Category::find($id);
        $this->name = $category->name;
        $this->editId = $id;
    }

    public function resetForm(){
        $this->name = "";
        $this->editId = null;
    }

    public function delete($id){
        Category::destroy($id);
        session()->flash('message','دسته بندی با موفقیت حذف شد');
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.admin.category-manager')->layout('components.layouts.admin');
    }
}
