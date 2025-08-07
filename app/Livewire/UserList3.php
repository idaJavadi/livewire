<?php

namespace App\Livewire;

use Livewire\Component;

class UserList3 extends Component
{
    public $users = [];

    public function deleteUser($id){
        $this->users = array_filter($this->users, function($user) use ($id){
            return $user['id'] !== $id;
        });
    }

    public function mount(){
        $this->users = [
            ['id'=> 1 , 'name'=>'John1 Doe'],
            ['id'=> 2 , 'name'=>'John2 Doe'],
            ['id'=> 3 , 'name'=>'John3 Doe'],
        ];
    }
    public function render()
    {
        return view('livewire.user-list3');
    }
}
