<?php

namespace App\Livewire;

use App\Livewire\Forms\CourseForm;
use App\Models\Course as CourseModel;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;


class Courses extends Component
{
    use WithPagination  ;

//    #[Url]
    public $search = "";

    public $sort = true;

    public CourseForm $form;

    protected function queryString(){
        return [
            'search' =>[
                'as' => 'q'
            ],
            'history' => true
        ];
    }


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

    public function updated($name , $value){
//        $name = explode(".", $name)[1];
//        $this->form->singleCourse->update([
//           $name => $value
//        ]);
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
//        $this->redirect('test');
        $this->redirectIntended('home');
    }

    public function show($id)
    {
        $this->form->setSingleCourse($id);
        $this->dispatch('showModal');
    }

    public function placeholder()
    {
        return <<<'HTML'
    <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
            <span class="visually-hidden">در حال بارگذاری...</span>
        </div>
        <strong class="ms-3">لطفاً صبر کنید، در حال بارگذاری اطلاعات...</strong>
    </div>
HTML;
    }



    public function render()
    {
        $courses = CourseModel::where('name', 'LIKE', "%{$this->search}%")->orderBy('id', $this->sort ? 'asc' : 'desc')->paginate(3);
        return view('livewire.courses', compact('courses'));
    }
}
