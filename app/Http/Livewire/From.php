<?php

namespace App\Http\Livewire;

use Livewire\Component;

class From extends Component
{
    public $name;
    public $message;
    public $m_status;
    public $color=[];
    public $age;
    public function render()
    {
        return view('livewire.from');
    }
}
