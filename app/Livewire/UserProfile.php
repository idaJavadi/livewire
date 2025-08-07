<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class  UserProfile extends Component
{
    public $user;

    public $logMessage;

    public function mount(){
        $this->user = Auth::user();
    }

    public function rendering(){
        $this->user = auth()->user();
        $this->logMessage = 'hooked';
    }
    public function render()
    {
        return view('livewire.user-profile');
    }
}
