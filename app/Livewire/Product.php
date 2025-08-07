<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product as ProductModel;


class Product extends Component
{
    public $name;
    public $price;
    public $height;
    public $type;
    public $color;
    public $product;


    public function mount(ProductModel $product){
//        $this->product = $product;
////        $this->price = 1000;
////        $this->height = 500;
////        $this->color = "red";
//
////        $this->fill(['price'=>100 ,'height'=>100 ,'color'=>'red']);
//        $this->fill($product->only('name','price','height','type','color'));
    }
    public function render()
    {
        return view('livewire.product');
    }
}
