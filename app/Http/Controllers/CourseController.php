<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.course.addcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'course_code'=>'required',
            'slug'=>'required|unique:courses',
            'course_credit'=>'required|digits_between:0,1'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);   
        }
        else{
            $course=Course::create([
                'name' => $request->get('name'),
                'course_code'  => $request->get('course_code'),
                'slug' => $request->get('slug'),
                'course_credit'=>$request->get('course_credit'),
            ]);
            if($course){
                if($request->has('department')) {
                    $course->depts()->sync($request->get('department'));
                }
                if($request->has('course_prerequisite')) {
                    $course->prerequisite()->sync($request->get('course_prerequisite'));
                }
                return response()->json([
                    'message' => 'You have successfully added varsity',
                ],200);
            }
            else{
                return response()->json([
                    'message' => 'There is something wrong',
                ],400);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        // dd($course->labs->count());
        return view('courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function lab(Course $course)
    {

        return view('labs.index',compact('course'));
    }

    /**
     * Get a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request)
    {
        $courses=Course::all('id','course_code');
        if($request->query('term')){
            $queryString=$request->query('term');
            $courses=Course::select('id','course_code')->where('course_code', 'LIKE', "%$queryString%")->get();
        }
        
        return $courses;
    }


}
