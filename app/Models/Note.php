<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public function courses(){
        return $this->belongsTo(Course::class);
    }
    public function posts()
    {
        return $this->morphMany(Post::class, 'postable');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
