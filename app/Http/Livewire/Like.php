<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Like extends Component
{
    public $elon;
    public $hasLiked=false;

    public function mount($elon)
    {
        $this->elon=$elon;
        if(auth()->check()){
            $user = auth()->user();

            $this->hasLiked= $user->isFollowing($this->elon);
        }
    }

    public function test()
    {
        $user = auth()->user();
        $user->toggleFollow($this->elon);
        $this->hasLiked= $user->isFollowing($this->elon);


    }
    public function render()
    {
        return view('livewire.like');
    }
}
