<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;
    public function mount($id){
        $this->post = Post::with('category')->find($id);
    }
    public function render()
    {
        return view('livewire.blog.post-show')->layout('components.layouts.app');
    }
}
