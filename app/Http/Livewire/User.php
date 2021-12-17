<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <h1>Hello from inline conreoller</h1>
            </div>
        blade;
    }
}
