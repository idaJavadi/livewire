<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course as CourseModel;

class Course extends Component
{
    public function delete(CourseModel $course){
//        $course = CourseModel::find($id);
        $course->delete();
        return 'delete';
    }
    public function render()
    {
        $courses = CourseModel::all();
        return view('livewire.course' , compact('courses'));
    }
}
