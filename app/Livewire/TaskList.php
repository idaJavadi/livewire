<?php

namespace App\Livewire;

use Livewire\Component;

class TaskList extends Component
{
    public $tasks = [
        ['id' => 1, 'name' => 'Task 1'],
        ['id' => 2, 'name' => 'Task 2'],
        ['id' => 3, 'name' => 'Task 3'],
    ];
    public function render()
    {
        return view('livewire.task-list');
    }
}
