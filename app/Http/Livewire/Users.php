<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    // public $users;
    use WithPagination;
    public function render()
    {
        // $this->users = User::all();
        $users = User::paginate(10);
        return view('livewire.users',['users'=>$users]);
    }
}
