<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Faq;
use App\Http\Livewire\FaqComponent;


class AdminEditFaqComponent extends Component
{
    public $faq_id;

    public function mount($faq_id)
    {
        $faq = Faq::find($faq_id);
        $this->faq_id = $faq->id;
        $this->question = $faq->question;
        $this->answer = $faq->answer;

    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'question'=>'required',
            'answer'=>'required'
        ]);
    }

    public function updateFaq()
    {
        $this->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);

        $faq=Faq::find($this->faq_id);
        $faq->question=$this->question;
        $faq->answer =$this->answer;
        $faq->save();
        session()->flash('message','FAQ has been updated succesfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-faq-component');
    }
}
