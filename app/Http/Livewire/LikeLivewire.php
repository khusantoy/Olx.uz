<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikeLivewire extends Component
{
    public $hasLike=false;
    public $elon;

    public function mount($elon){

        $this->$elon=$elon;


    }

    public function test(){
//        $user= auth()->user();
//        $this->hasLike=  $user->hasLiked($this->elon);
//        dd($this->hasLike);
    }
    public function render()
    {
        return view('livewire.like-livewire');
    }
}
