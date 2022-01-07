<?php

namespace App\Http\Livewire;
use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    public $title;
    public $filename;
    use WithFileUploads;
    public function FileUpload(){
        $validationData = $this->validate([
            'title' => 'required',
            'filename' => 'required'
        ]);
        $filename = $this->filename->store('files','public');
        $validationData['filename'] = $filename; 
        Upload::create($validationData);
        session()->flash('message','File uploaded successfully');
        $this->emit('fileupload');
    }
    public function render()
    {
        return view('livewire.uploads');
    }
}
