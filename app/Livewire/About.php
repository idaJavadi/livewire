<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.about')
            ->with(
                [
                    'layout' => 'layouts.app',
                    'title' => 'درباره ما',
                ]
            );
    }
}
