<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Big extends Component
{
//    public $count = 0;
//
//    public function increment(){
//        $this->count++;
//    }

//    public $message = "";
//
//    #[On('messageSent')]
//    public function receiveMessage($message){
//        $this->message = $message;
//    }
    public $children =[];
    public function addChild(){
        $this->children[] = uniqid();

    }

    public function removeChildren($id){
        $this->children = array_values(array_filter($this->children, fn($childId)=> $childId != $id ));
    }

    public function render()
    {
        return view('livewire.big');
    }
}
