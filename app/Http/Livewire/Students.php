<?php

namespace App\Http\Livewire;
use App\Models\Student;
use Livewire\Component;
class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public function resetinput(){
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }
    public function store(){
        $validation = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' =>'required'
        ]);
        Student::create($validation);
        session()->flash('message','student created successfully');
        $this->resetinput();
        $this->emit('studentAdded');
    }
    public function render()
    {
        $student = Student::orderBy('id','DESC')->paginate(10);
        return view('livewire.students',['students'=>$student]);
    }
}
