<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class AdToWishlist extends Component
{
    
    public $elon;

    public function mount($elon)
    {
        $this->elon = $elon;
    }
    
    public function adToWishList()
    {   
        dd($this->elon->id);
    }
    public function render()
    {
        return view('livewire.ad-to-wishlist');
    }
}
