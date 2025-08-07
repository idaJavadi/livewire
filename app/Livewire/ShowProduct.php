<?php

namespace App\Livewire;

use Livewire\Component;

class ShowProduct extends Component
{
    public $productId = 1;
    public $productName = 2;
//    protected $product;


//    public function boot(){
//        $this->product = \App\Models\Product::find($this->productId);
//    }
    public function render()
    {
        return view('livewire.show-product');
    }
}
