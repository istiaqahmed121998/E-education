<?php

namespace App\Http\Controllers;

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
        //
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
