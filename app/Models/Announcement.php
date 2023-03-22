<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Announcement extends Model
{
    use HasFactory,Rateable;
    

    protected $fillable = [
        'title',
        'description',
        'type',
        'view',
        'price',
        'user_id',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'commentable');
    }
    const  TYPES = [
        '0'=>'new',
        '1'=>'sotuvda',
        '2'=>'sotildi'
    ];
}
