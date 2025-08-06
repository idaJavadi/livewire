<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Js;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use App\Livewire\Forms\CourseForm;
use Livewire\WithoutUrlPagination;
use App\Models\Course as CourseModel;
use Livewire\WithFileUploads;

class Courses extends Component
{

    use WithFileUploads;
    public CourseForm $form;


    public ?string $search = null;
    public $sort = true;
    public $courses;


    public $photo;

    public function download(){
         return response()->download(storage_path('img.png','ida.png'));
    }


    public function mount()
    {
        if ($this->search) {
            $this->courses = CourseModel::where('name', 'LIKE', "%{$this->search}%")->orderBy('id', $this->sort ? 'asc' : 'desc')->limit(20)->get();
        } else {
            $this->courses = CourseModel::orderBy('id', $this->sort ? 'asc' : 'desc')->limit(20)->get();
        }
    }

    public function delete($id)
    {
        $this->form->setSingleCourse($id);
        $this->form->delete();
        return 'Delete Course Was Successful';
    }

    protected function queryString()
    {
        return [
            'search' => [
                'as' => 'q'
            ]
        ];
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


        $this->photo->store('images', 'public');

        $this->dispatch('closeModal');
        session()->flash('courses_created', 'دوره با موفقیت ساخته شد');
    }


    public function show($id)
    {

        $this->form->setSingleCourse($id);
        $this->dispatch('showModal');
    }

    public function placeholder()
    {
        return <<<'HTML'
    <div class="spinner-border"></div>

    HTML;
    }






    public function render()
    {
        return view('livewire.courses');
    }
}
