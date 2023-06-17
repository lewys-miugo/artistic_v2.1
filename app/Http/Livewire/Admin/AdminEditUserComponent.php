<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminEditUserComponent extends Component
{
    public $user_id;
    public $utype;
    public $name;
    public $email;

    public function mount($user_id)
    {
        $user = User::find($user_id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->utype = $user->utype;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'utype'=>'required'
        ]);
    }

    public function updateUser()
    {
        $this->validate([
            'utype'=>'required'
        ]);

        $user=User::find($this->user_id);
        $user->utype =$this->utype;
        $user->save();
        session()->flash('message','user has been updated succesfully');
    }





    public function render()
    {     

        return view('livewire.admin.admin-edit-user-component');
    }
}
