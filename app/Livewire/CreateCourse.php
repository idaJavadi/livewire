<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCourse extends Component
{
//    #[validate('required|min:2',onUpdate: false)]
//    #[validate('required|string',as: 'esam')]
    #[validate('required',message:'پر کردن نام اجباری است ')]
    #[validate('string', message:'نام باید به صورت رشته متنی باشد')]
    public $name = "";
    #[validate('required|numeric',translate: false)]
    public $price = "";

    public function save()
    {
        $this->validate();
        $inputs = ['name' => $this->name, 'price' => $this->price];
//        $validated = $this->validate([
//            'name' => 'required|string',
//            'price' => 'required|numeric'
//        ]);
        Course::create($inputs);
        return to_route('courses')->with('success', 'دوره با موفقیت ساخته شد');
    }

    public function render()
    {
        return view('livewire.create-course');
    }
}
