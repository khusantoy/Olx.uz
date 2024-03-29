<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupCategory extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'category_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function announcements()
    {
        return $this->belongsTo(Announcement::class);
    }

}
