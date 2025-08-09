<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class PostManager extends Component
{
    public $title ="";
    public $content="";
//    public $category
    public function render()
    {
        return view('livewire.admin.post-manager');
    }
}
