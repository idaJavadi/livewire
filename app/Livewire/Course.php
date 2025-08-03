<?php

namespace App\Livewire;

use App\Models\Course as CourseModel;
use Livewire\Component;
use Livewire\Attributes\Js;


class Course extends Component
{
    public CourseModel $course;

    public function mount(CourseModel $course)
    {
        $this->course = $course;
    }

    // #[Renderless]
    public function incrementView()
    {
        $this->course->modelIncrementView();
        // $this->skipRender();
    }



    public function render()
    {
        // dump($this->search);
        $course = $this->course;
        return view('livewire.course', compact('course'));
    }
}
