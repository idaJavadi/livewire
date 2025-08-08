<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class ToDoInput extends Component
{
    #[Modelable]
    public $value;

    public function render()
    {
        return view('livewire.to-do-input');
    }
}
