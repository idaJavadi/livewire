<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCourse extends Component
{

    // #[Validate('required|min:3', onUpdate: false)]
    // #[Validate('required|min:3', as: 'fName')]
    // #[Validate('required', message: "پر کن دیگه بابا")]
    // #[Validate('min:3', message: "چرا انقدر کم اخه")]
    // #[Validate('min:3', translate: false)]
    public $name = "";

    #[Validate('required|min:2')]
    public $price = "";

    public function save()
    {
        $this->validate();
        $inputs = ['name' => $this->name, 'price' => $this->price];
        // $validated = $this->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        // ]);
        // Course::create($validated);
        Course::create($inputs);
        return to_route('courses')->with('success', 'دوره با موفقیت ساخته شد');
    }

    public function render()
    {
        return view('livewire.create-course');
    }
}
