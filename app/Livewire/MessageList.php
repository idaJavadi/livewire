<?php

namespace App\Livewire;

use Livewire\Component;

class MessageList extends Component
{
    public $messages = [['id'=>1 , 'content' => 'salam id']];
    public $newMessage = "";

    public function addMessage(){
        if($this->newMessage != ""){
            $this->messages[] = ['id'=>count($this->messages)+1 , 'content' => $this->newMessage];
            $this->newMessage = "";
        }
    }


    public function render()
    {
        return view('livewire.message-list');
    }
}
