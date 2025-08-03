<?php

namespace App\Livewire;

use App\Models\Course as CourseModel;
use Livewire\Component;
use Livewire\Attributes\Js;


class Courses extends Component
{

    public $search = "";
    public $sort = true;
    public $name = "";
    public $price= "";

    public function delete(CourseModel $course)
    {
        $course->delete();
        return 'Delete Course Was Successful';
    }

    public function save()
    {

        $inputs = ['name' => $this->name, 'price' => $this->price];
        $validated = $this->validate([
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);
        CourseModel::create($validated);
        $this->dispatch('closeModal');
    }



    public function render()
    {
        $courses = CourseModel::where('name', 'LIKE', "%{$this->search}%")->orderBy('id', $this->sort ? 'asc' : 'desc')->get();
        return view('livewire.courses', compact('courses'));
    }
}
