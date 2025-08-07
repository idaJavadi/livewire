<?php

namespace App\Livewire;

use Livewire\Component;

class CountryCity extends Component
{
    public $countries =['Iran','Germany','Australia','Canada','Japan'];
    public $cities =[];
    public $selectedCountry = null;

    public function updatedSelectedCountry($value)
    {
        switch ($value) {
            case 'Iran':
                $this->cities = ['Tehran', 'Shiraz', 'Isfahan'];
                break;
            case 'Germany':
                $this->cities = ['Berlin', 'Hamburg', 'Munich'];
                break;
            case 'Australia':
                $this->cities = ['Sydney', 'Melbourne', 'Brisbane'];
                break;
            case 'Canada':
                $this->cities = ['Toronto', 'Vancouver', 'Montreal'];
                break;
            case 'Japan':
                $this->cities = ['Tokyo', 'Osaka', 'Kyoto'];
                break;
            default:
                $this->cities = [];
        }
    }

    public function render()
    {
        return view('livewire.country-city');
    }
}
