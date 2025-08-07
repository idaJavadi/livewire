<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateProfile extends Component
{
    public $name;
    public $email;

    public function mount(){
       $this->name = Auth::user()->name;
       $this->email = Auth::user()->email;
    }
    public function render()
    {
        return view('livewire.update-profile');
    }
}
