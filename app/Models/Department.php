<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name','short_name','dean'];
    protected $guarded = ['dean'];

    public function varsities(){
        return $this->belongsToMany(Varsity::class,'varsity_dept','dept_id','varsity_id');
    }
}
