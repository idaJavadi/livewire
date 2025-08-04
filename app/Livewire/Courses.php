<?php

namespace App\Livewire;

use App\Livewire\Forms\CourseForm;
use App\Models\Course as CourseModel;

use Livewire\Component;


class Courses extends Component
{
    public $search = "";
    public $sort = true;

    public CourseForm $form;

    public function delete($id)
    {
        $this->form->setSingleCourse($id);
        $this->form->delete();
        return 'Delete Course Was Successful';
    }

    public function changeStatus($value, $id)
    {
        $this->form->setSingleCourse($id);
        $this->form->updateStatus($value);
        $this->dispatch('showToast');
    }

    public function edit($id)
    {
        $this->form->setSingleCourse($id);
        $this->dispatch('showEditModal');
    }

    public function update()
    {
        $this->form->update();
        $this->dispatch('closeModal');
    }

    public function save()
    {
        $this->form->store();
        $this->dispatch('closeModal');
    }

    public function show($id)
    {
        $this->form->setSingleCourse($id);
        $this->dispatch('showModal');
    }


    public function render()
    {
        $courses = CourseModel::where('name', 'LIKE', "%{$this->search}%")->orderBy('id', $this->sort ? 'asc' : 'desc')->get();
        return view('livewire.courses', compact('courses'));
    }
}
