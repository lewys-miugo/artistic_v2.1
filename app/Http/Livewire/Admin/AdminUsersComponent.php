<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class AdminUsersComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $users = User::orderBy('created_at','ASC')->paginate(10);
        return view('livewire.admin.admin-users-component',['users'=>$users]);
    }
}
