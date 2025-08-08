<?php

namespace App\Livewire;

use Livewire\Component;

class ToDoList extends Component
{
    public $todos =[];
    public $todo ="";

    public function add(){
        $this->todos[]= $this->todo;
        $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.to-do-list');
    }
}
