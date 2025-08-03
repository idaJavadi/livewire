<?php

namespace App\Livewire;

use App\Models\Course as CourseModel;
use Livewire\Component;
use Livewire\Attributes\Js;


class Courses extends Component
{

    public $search = "";
    public $sort = true;


    public function delete(CourseModel $course)
    {
        $course->delete();
        return 'Delete Course Was Successful';
    }


    public function render()
    {
        $courses = CourseModel::where('name', 'LIKE', "%{$this->search}%")->orderBy('id', $this->sort ? 'asc' : 'desc')->get();
        return view('livewire.courses', compact('courses'));
    }
}
