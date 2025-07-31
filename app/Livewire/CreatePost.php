<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $desc;

    public function handleSubmit(){
//        dd($this->title , $this->desc);
    }

    public function doSomething(){
        dd('n');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
