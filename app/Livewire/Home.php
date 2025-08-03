<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $name ='ida';

//    protected $listeners = ['change-name' => 'changeName'];
//
//    public function changeName(array $data)
//    {
//        $this->name = $data['name'];
//    }

    public function changeName($name){
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
