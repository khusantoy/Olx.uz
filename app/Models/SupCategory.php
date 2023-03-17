<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupCategory extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'title',
        'image',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

}
