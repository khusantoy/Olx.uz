<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginLivewireReal extends Component
{
    public $email,$password,$user_yoq=false;

    protected $rules=[

        'email'=>'required',
        'password'=>'required|min:8',


    ];

    protected $messages=[
        'password.required'=>"Parol kiritilmadi.",
        'password.min'=>"Parol uzunligi 8 dan kam",
        'email.required'=>"Email kiritilmadi.",
    ];

    public function login()
    {
        $this->validate();
        $user = User::where('email',$this->email)->first();

        if($user){
            if(Hash::check($this->password,$user->password)){

                $this->user_yoq=false;
                Auth::login($user);

                if($user->is_admin){
                    return redirect()->route('admin');
                }
                return redirect()->route('front');
            }else{
               $this->user_yoq=true;
            }
        }else{
            $this->user_yoq=true;
        }

    }
    public function render()
    {
        return view('livewire.auth.login-livewire-real');
    }
}
