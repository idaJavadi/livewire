<?php

namespace App\Livewire;

use Livewire\Component;

class EditProfile extends Component
{
    public $name;
    public $email;

    public function mount(){
         $this->name = 'ida';
         $this->email = 'ida@gmail.com';
    }

    public function save(){
        session()->flash('message', 'save shod');
    }
    public function render()
    {
        return view('livewire.edit-profile');
    }
}
