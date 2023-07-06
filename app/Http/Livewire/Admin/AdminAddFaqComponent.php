<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Faq;


class AdminAddFaqComponent extends Component
{
    public $question;
    public $answer;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'question'=>'required',
            'answer'=>'required'
        ]);
    }

    public function storeFaq()
    {
        $this->validate=([
            'question'=>'required',
            'answer'=>'required'
        ]);

        $faq=new Faq();
        $faq->question=$this->question;
        $faq->answer=$this->answer;
        $faq->save();
        session()->flash('message','New FAQ has been added successfully!');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-faq-component');
    }
}
