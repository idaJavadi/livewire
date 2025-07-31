<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class ShowCourses extends Component
{
    public $course;

    public function mount($id){
        $this->course = Course::find($id);
    }
    public function render()
    {
        return view('livewire.show-courses');
    }
}
