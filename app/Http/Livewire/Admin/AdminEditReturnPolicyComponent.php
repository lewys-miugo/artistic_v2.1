<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ReturnPolicy;

class AdminEditReturnPolicyComponent extends Component
{
    public $return_policy;
    public $returnPolicy;

    public function mount()
    {
        $returnPolicy = ReturnPolicy::first();
        $this->return_policy=$returnPolicy->return_policy;
    }

    public function updateReturnPolicy()
    {
        $returnPolicy=ReturnPolicy::first();
        
        $returnPolicy->return_policy=$this->return_policy;
        $returnPolicy ->save();
        session()->flash('message','Return Policy has been update');

        return redirect()->route('return.policy');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-return-policy-component');
    }
}
