<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    use HasFactory;

    protected $fillable = ['name','course_code','slug','course_credit'];

    public function depts(){
        return $this->belongsToMany(Department::class,'dept_course','course_id','dept_id');
    }

    public function prerequisite()
    {
        return $this->belongsToMany(Course::class,'course_prerequisite','course_id','course_prerequisite_id');
    }

    public function labs(){
        return $this->hasMany(Lab::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function assignments(){
        return $this->hasMany(Assignment::class);
    }

    public function notes(){
        return $this->hasMany(Note::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
