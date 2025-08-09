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

        }else{
            Category::create(['name' => $this->name]);
            session()->flash('message', 'Category added successfully.');
        }

        $this->resetForm();
        $this->categories = Category::all();
    }

    public function resetForm(){
        $this->name = "";
        $this->editId = null;
    }

    public function render()
    {
        return view('livewire.admin.category-manager')->layout('components.layouts.admin');
    }
}
