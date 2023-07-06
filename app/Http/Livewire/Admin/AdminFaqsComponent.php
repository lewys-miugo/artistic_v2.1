<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Faq;
use Livewire\WithPagination;


class AdminFaqsComponent extends Component
{
    use WithPagination;

    public $faq_id;

    public function deleteFaq()
    {
        $faq= Faq::find($this->faq_id);
        $faq->delete();
        session()->flash('message','Faq has been deleted succesfully');
    }

    public function render()
    {

        $faqs=Faq::orderBy('question','ASC')->paginate(10);
        return view('livewire.admin.admin-faqs-component',['faqs'=>$faqs]);
    }
}
