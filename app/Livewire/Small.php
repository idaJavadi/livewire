<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Small extends Component
{
//    #[Reactive]
//    public $count;
//    public function sendMessage(){
//        $this->dispatch('messageSent','message from small livewire');
//    }

    public $childId;

    public function mount($childId){
        $this->childId = $childId;
    }
    public function render()
    {
        return view('livewire.small');
    }
}
