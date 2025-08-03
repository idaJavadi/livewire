<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $description;

    public function handleSubmit()
    {
        usleep(500000);
        // dd($this->title, $this->description);
    }

    public function doSomething($a)
    {
        // dd('hio hi ih');
        // dd($a);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
