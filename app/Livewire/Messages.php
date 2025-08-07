<?php

namespace App\Livewire;

use Livewire\Component;

class Messages extends Component
{
    public $messages = [];
    public function render()
    {
        return view('livewire.messages');
    }

    public function loadMessages(){
        $this->messages = \App\Models\Message::latest()->get();
    }
}
