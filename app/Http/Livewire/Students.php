<?php
namespace App\Http\Livewire;
use App\Models\Student;
use Livewire\Component;
class Students extends Component
{
    public $ids;
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
    public function edit($id){
        $students = Student::where('id',$id)->first();
        $this->ids = $students->id;
        $this->firstname = $students->firstname;
        $this->lastname = $students->lastname;
        $this->email = $students->email;
        $this->phone = $students->phone;
    }
    public function update(){
        $validation = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' =>'required'
        ]);
        if($this->ids){
            $student = Student::find($this->ids);
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
    public function delete($id){
        if($id){
        Student::where('id',$id)->delete();
        session()->flash('message','Delete successfull');
        }
    }
    public function render()
    {
        $student = Student::orderBy('id','DESC')->paginate(10);
        return view('livewire.students',['students'=>$student]);
    }
}
