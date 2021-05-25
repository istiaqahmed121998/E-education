<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varsity extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $guarded = ['name'];

    public function depts()
    {
    
        return $this->belongsToMany(Department::class,'varsity_dept','varsity_id','dept_id');
    }
}
