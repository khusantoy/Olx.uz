<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAd extends Component
{
    use WithFileUploads;
    
    public $title;
    public $description;
    public $image;
    public $type_id;
    public $price;
    public $category_id;

    public function render()
    {
        $categories = Category::with('supcategories')->get();
        return view('livewire.create-ad', compact('categories'));
    }


    public function createAd()
    {
        dd($this->title,
         $this->description,
        $this->image,
        $this->type_id,
        $this->price,
        $this->category_id,);

        $this->validate([
            'image' => 'image|max:50024', // 1MB Max
        ]);
 
        $this->photo->store('image');

        // Announcement::create();

    }
}
