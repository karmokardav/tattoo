<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class GalleryLike extends Model
{
    protected $fillable = [
        'gallery_id',
        'user_id',
        'session_id',
    ];

    public $timestamps = true;

    // 🔗 relation to gallery
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    // 🔗 relation to user (nullable)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
