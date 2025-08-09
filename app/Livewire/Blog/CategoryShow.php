<?php

namespace App\Livewire\Blog;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class CategoryShow extends Component
{
    public $category;
    public $posts = [];

    public function mount($id){
        $this->category = Category::find($id);
        $this->posts = Post::where('category_id', $id)->with('category')->latest()->get();
    }

    public function render()
    {
        return view('livewire.blog.category-show')->layout('components.layouts.app');
    }
}
