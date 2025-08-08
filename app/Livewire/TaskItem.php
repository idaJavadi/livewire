<?php

namespace App\Livewire;

use Livewire\Component;

class TaskItem extends Component
{
    public $task;
    public function render()
    {
        return view('livewire.task-item');
    }
}
