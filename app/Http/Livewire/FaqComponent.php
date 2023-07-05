<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Faq;

class FaqComponent extends Component
{
    public function render()
    {

        // $faq_id=$faqs->id;
        // $faq_question=$faqs->question;
        // $faq_answer=$faqs->answer;
        $faqs = Faq::orderBy('question','ASC')->get();
        return view('livewire.faq-component',['faqs'=>$faqs]);
    }
}
