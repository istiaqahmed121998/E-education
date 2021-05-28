<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Varsity;
use Illuminate\Http\Request;

class VarsityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varsities = Varsity::all();

        return view('varsities.index',compact('varsities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'short_name'=>'required',
            'slug'=>'required|unique:varsities'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);   
        }
        else{
            $varsity=Varsity::create([
                'name' => $request->get('name'),
                'short_name'  => $request->get('short_name'),
                'slug' => $request->get('slug')
            ]);
            if($varsity){
                if($request->has('department')) {
                    $varsity->depts()->sync($request->get('department'));
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
     * @param  \App\Models\Varsity  $varsity
     * @return \Illuminate\Http\Response
     */
    public function show(Varsity $varsity)
    {
        return view('department.index',compact('varsity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Varsity  $varsity
     * @return \Illuminate\Http\Response
     */
    public function edit(Varsity $varsity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Varsity  $varsity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Varsity $varsity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Varsity  $varsity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Varsity $varsity)
    {
        
    }
}
