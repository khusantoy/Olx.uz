<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditUserSettings extends Component
{

    public $user;
    protected $listeners=[
        'user_editing'
    ];

    public $rules=[
        
        'user.name'=>'required',
        'user.email'=>'required'
    ];

    public function user_editing($user_id){
      $this->user = User::find($user_id);
    }

    public function editUser(){
        $this->user->update();
        
        return redirect()->route('front.account');
    }
    public function render()
    {
        return view('livewire.edit-user-settings');
    }
}
