<?php

namespace App\Livewire;

use Livewire\Component;

class UserList extends Component
{
    public $users ;

    public function mount(){
        $this->users = [
            ['id'=> 1 , 'name'=>'John Doe'],
            ['id'=> 2 , 'name'=>'John2 Doe'],
            ['id'=> 3 , 'name'=>'John3 Doe'],
        ];
    }

    public function deleteUser($id){
         $this->users = array_filter($this->users, function($user) use ($id){
             return $user['id'] !== $id;
         });
    }
    public function render()
    {
        return view('livewire.user-list');
    }
}
