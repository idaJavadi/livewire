<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList2 extends Component
{
    public $users = [];
    public function loadUsers(){
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.user-list2');
    }
}
