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
    public $price = "";
    public $singleCourse = null;


    public function delete(CourseModel $course)
    {
        $course->delete();
        return 'Delete Course Was Successful';
    }

    public function changeStatus($value, $id)
    {
        $course = CourseModel::findOrFail($id);
        $course->update(['status' => $value]);
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        CourseModel::create($validated);
        $this->dispatch('closeModal');
    }

    public function show($id)
    {
        $this->singleCourse = CourseModel::findOrFail($id);
        $this->dispatch('showModal');
    }


    public function render()
    {
        $courses = CourseModel::where('name', 'LIKE', "%{$this->search}%")->orderBy('id', $this->sort ? 'asc' : 'desc')->get();
        return view('livewire.courses', compact('courses'));
    }
}
