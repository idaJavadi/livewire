<?php

namespace App\Livewire;

use Livewire\Component;

class ShowCourses extends Component
{
    public $course;
    public function render()
    {
        return view('livewire.show-courses');
    }
}
