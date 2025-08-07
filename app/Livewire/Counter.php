<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count;

    public function mount($initialCount){
        $this->count = $initialCount;
    }

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    public function resetCount(){
        $this->count = 0;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
