<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $posts =[];
    public function mount(){
        $this->posts = Post::with('category')->latest()->get();
    }
    public function render()
    {
        return view('livewire.blog.index')->layout('components.layouts.app');
    }
}
