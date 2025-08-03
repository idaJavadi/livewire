<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course as CourseModel;

class Course extends Component
{
    public $search = "";
    public $sort = true ;
    public $name;

    public function delete(CourseModel $course){
//        $course = CourseModel::find($id);
        $course->delete();
        return 'delete';
    }
    public function render()
    {
//        dump($this->search);
        $courses = CourseModel::where('name', 'like', '%' . $this->search . '%')->orderBy('id' , $this->sort ? 'asc':'desc')->get();
        return view('livewire.course', [
            'courses' => $courses
        ]);
    }
}
