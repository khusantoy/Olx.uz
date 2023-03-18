<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginLivewire extends Component
{
    public $name,$email,$password,$password_confirmation, $check;

    protected $rules=[
      'name'=>'required',
      'email'=>'required',
      'password'=>'required|min:8|confirmed',
      'password_confirmation'=>'required|min:8',
      'check'=>'required',

    ];

    protected $messages=[
      'check.required'=>"checked bomadi.",
      'name.required'=>"Ism kiritilmadi.",
      'password.required'=>"Parol kiritilmadi.",
      'password.confirmed'=>"Parol bir xil emas.",
      'password.min'=>"Parol uzunligi 8 dan kam",
      'password_confirmation.required'=>"Parolni qayta tring.",
      'email.required'=>"Email kiritilmadi.",
    ];

    public function register()
    {


        $this->validate();

        $user= User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt( $this->password),

        ]);
        if ($user){

            return redirect()->route('login');
        }

    }

    public function render()
    {
        return view('livewire.auth.login-livewire');
    }
}
