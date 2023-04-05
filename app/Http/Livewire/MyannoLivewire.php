<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class MyannoLivewire extends Component
{
    public $elon;
    public $hasLiked=false;
    public function mount($elon)
    {
        $this->elon = $elon;
    }
    public function like($id)
    {
        $elon=Announcement::find($id);
        $user = auth()->user();
        $user->toggleFollow($elon);
        $this->hasLiked= $user->isFollowing($elon);
    }
    public function render()
    {
        return view('livewire.myanno-livewire');
    }
}
