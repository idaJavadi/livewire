<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class Tasks extends Component
{
    public $tasks;
    public $newTask;

    protected $rules = [
        'newTask' => 'required|min:2|max:50',
    ];

    public function mount(){
        $this->tasks = Task::latest()->get();
    }

    public function addTask(){
        $this->validate();
        Task::create(['name' => $this->newTask]);
        $this->newTask = "";
        $this->tasks = Task::all();
    }

    public function deleteTask($id){
        Task::find($id)->delete();
        $this->tasks = Task::latest()->get();
    }

    public function render()
    {
        return view('livewire.tasks')->with(
            [
                'layout' => 'layouts.app',
                'title' => 'وظایف'
            ]
        );
    }
}
