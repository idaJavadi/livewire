<?php

namespace App\Livewire;

use Livewire\Component;

class CreateCourse extends Component
{
    public $name="";
    public $price="";

    public function save(){
        $inputs =['name'=> $this->name,'price'=> $this->price];
        Course::create($inputs);
        return to_route('courses')->with('success','Course Created Successfully');
    }
    public function render()
    {
        return view('livewire.create-course');
    }
}
