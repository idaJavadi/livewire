<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ShowProduct;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowProductTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ShowProduct::class)
            ->assertStatus(200);
    }
}
