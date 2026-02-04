<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GalleryLike;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'image',
        'views',
        'likes',
        'status'
    ];

    public function likes()
    {
        return $this->hasMany(GalleryLike::class);
    }

}
