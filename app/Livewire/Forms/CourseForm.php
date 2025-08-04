<?php

namespace App\Livewire\Forms;

use App\Models\Course;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CourseForm extends Form
{
    #[validate('required|min:3')]
    public $name = "";

    #[validate('required|numeric')]
    public $price = "";

    public $singleCourse = null;

    public function setSingleCourse($id){
        $course = Course::findOrFail($id);
        $this->singleCourse = $course;
        $this->name = $course->name;
        $this->price = $course->price;
    }

    public function store(){
        $this->validate();
        Course::create($this->all());
    }

    public function update(){
        $this->validate();
        $this->singleCourse->update($this->all());
    }
}
