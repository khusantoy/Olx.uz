<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikeFrontLivewire extends Component
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

    public function like()
    {
        $user = auth()->user();
        $user->toggleFollow($this->elon);
        $this->hasLiked= $user->isFollowing($this->elon);


    }
    public function render()
    {
        $hasliked=$this->hasLiked;
        return view('livewire.like-front-livewire' ,compact('hasliked'));
    }
}
