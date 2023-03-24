<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\SupCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAd extends Component
{
    use WithFileUploads;
    
    public $title;
    public $description;
    public $image='';
    public $type_id;
    public $price;
    public $category_id;

    public function render()
    {
        $categories = SupCategory::pluck('title','id');
        return view('livewire.create-ad', compact('categories'));
    }


    public function createAd()
    {
       
        //  $this->description,
        // $this->image,
        // $this->type_id,
        // $this->price,
        // $this->category_id,);

        // $this->validate([
        //     'image' => 'image|max:50024', // 1MB Max
        // ]);

       
 

      $elon=  Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'type'=>$this->type_id,
            'user_id'=>auth()->user()->id,
            'category_id'=>$this->category_id,
            'price'=>$this->price,
            'view'=>0
        ]);


        if($this->image!=''){
            $massiv=$this->image;
            foreach ($massiv as $i) {
                
                
               $i->store('public');
              
               $elon->images()->create([
                'name'=>$i->hashName()]
               );
              
               unlink($i->getRealPath());
            }
        }

        $this->emit('qaytadanrender');
        $this->dispatchBrowserEvent('qaytadanrender');

    }
}
