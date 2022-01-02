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
    public $id;
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
    public function edit($id){
        $student = Student::where('id',$id)->first();
        $this->id = $student['id'];
        $this->firstname = $student['firstname'];
        $this->lastname = $student['lastname'];
        $this->email = $student['email'];
        $this->phone = $student['phone'];
    }
    public function update(){
        $validation = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' =>'required'
        ]);
        if($this->id){
            $student = Student::find($this->id);
            $student->update([
                "firstname" => $this->firstname,
                "last" => $this->lastname,
                "email" => $this->email,
                "phone" => $this->phone,
            ]);
            $this->resetinput();
            session()->flash('message','update successfull');
            $this->emit('updatestudent');
        }
    }
    public function render()
    {
        $student = Student::orderBy('id','DESC')->paginate(10);
        return view('livewire.students',['students'=>$student]);
    }
}
