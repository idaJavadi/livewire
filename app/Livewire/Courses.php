<?php

namespace App\Livewire;

use App\Livewire\Forms\CourseForm;
use App\Models\Course as CourseModel;

use Livewire\Component;


class Courses extends Component
{
    public $singleCourse = null;
    public $search = "";
    public $sort = true;

    public CourseForm $form;

//    #[validate]
//    public $name = "";
//    public $price = "";

//    public function rules(){
//        return [
//            'name'=>'required|min:1|max:4',
//            'price'=>'required|numeric',
//        ];
//    }



//    public function resetAll()
//    {
//        $this->reset();
//    }

    public function delete(CourseModel $course)
    {
        $course->delete();
        return 'Delete Course Was Successful';
    }

    public function changeStatus($value, $id)
    {
        $course = CourseModel::findOrFail($id);
        $course->update(['status' => $value]);
        $this->dispatch('showToast');
    }

    public function edit($id)
    {
//        $this->singleCourse = CourseModel::findOrFail($id);
//        $this->name = $this->singleCourse->name;
//        $this->price = $this->singleCourse->price;
//        $this->dispatch('showEditModal');
    }

    public function update($id)
    {
        $validated = $this->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $course = CourseModel::findOrFail($id);
        $course->update($validated);
        $this->dispatch('closeModal');
    }

    public function save()
    {
//        $this->validate();
//        CourseModel::create($this->form->all());
        $this->form->store();
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
