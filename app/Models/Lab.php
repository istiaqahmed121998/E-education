<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $fillable=['course_id'];
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
