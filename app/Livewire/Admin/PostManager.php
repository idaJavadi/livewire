<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PostManager extends Component
{
    public $title = "";
    public $content = "";
    public $category_id = null;
    public $categories = [];
    public $posts = [];
    public $editId = null;

    protected $rules = [
        'title' => 'required|string|min:3',
        'content' => 'required|string|min:3',
        'category_id' => 'required|exists:categories,id',
    ];

    public function mount()
    {
        $this->loadData();
    }

    /**
     * مرکزیت بارگذاری داده‌ها (دسته‌ها و پست‌ها)
     */
    protected function loadData()
    {
        $this->categories = Category::all();
        $this->posts = Post::with('category')->get();
    }

    public function save()
    {
        $this->validate();

        if ($this->editId) {
            $post = Post::find($this->editId);
            if (! $post) {
                session()->flash('message', 'پست مورد نظر پیدا نشد.');
                $this->resetForm();
                $this->loadData();
                return;
            }

            $post->update([
                'title' => $this->title,
                'content' => $this->content,
                'category_id' => $this->category_id,
            ]);

            session()->flash('message', 'مطلب با موفقیت ویرایش شد');
        } else {
            Post::create([
                'title' => $this->title,
                'content' => $this->content,
                'category_id' => $this->category_id,
            ]);

            session()->flash('message', 'مطلب با موفقیت افزوده شد');
        }

        $this->resetForm();
        $this->loadData();
    }

    /**
     * بارگذاری اطلاعات پست برای ویرایش
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if (! $post) {
            session()->flash('message', 'پست پیدا نشد');
            return;
        }

        $this->title = $post->title;
        $this->content = $post->content;
        $this->category_id = $post->category_id;
        $this->editId = $post->id;
    }

    /**
     * ریست فرم و خطاها
     */
    public function resetForm()
    {
        $this->title = "";
        $this->content = "";
        $this->category_id = null;
        $this->editId = null;

        // ریست خطاهای ولیدیشن (Livewire helpers)
        $this->resetErrorBag();
        $this->resetValidation();
    }

    /**
     * حذف پست
     */
    public function delete($id)
    {
        $post = Post::find($id);

        if (! $post) {
            session()->flash('message', 'پست مورد نظر پیدا نشد');
            return;
        }

        $post->delete();

        session()->flash('message', 'مطلب با موفقیت حذف شد');
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.admin.post-manager')->layout('components.layouts.admin');
    }
}
