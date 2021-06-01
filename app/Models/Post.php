<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','slug','body','metadescription','metatag','user_id'];

    public function postable()
    {
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
