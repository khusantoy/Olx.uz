<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditUserSettings extends Component
{

    public $name = "ghhjh";

    public function render()
    {
        return view('livewire.edit-user-settings');
    }
}
