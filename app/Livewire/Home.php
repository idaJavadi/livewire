<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public  $name = 'hassan';

    public function changeName($name)
    {
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.home');
    }
}
