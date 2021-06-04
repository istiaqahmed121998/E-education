<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Post;
use App\Models\User;
use App\Models\Varsity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->limit(80)->get()->paginate(8);
        $varsities=Varsity::inRandomOrder()->take(5)->get()->sortByDesc('created_at');
        return view('post.index',compact('posts','varsities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $varsities= Varsity::all();
        return view('adminpanel.post.addpost',compact('varsities'));
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
            'title'=> 'required',
            'slug'=>'required|unique:posts',
            'body'=>'required',
            'type'=>'required',
            'type_id'=>'required',
            'metadescription'=>'required',
            'metatag'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);   
        }
        else{
            if($request->get('type')=='lab'){
                $lab=Lab::findOrFail($request->get('type_id'));
                $post=$lab->posts()->create([
                    'title'=> $request->get('title'),
                    'slug'=>$request->get('slug'),
                    'body'=>$request->get('body'),
                    'metadescription'=>$request->get('metadescription'),
                    'metatag'=>$request->get('metatag')
                ]);
                if(Auth::check()){
                    $user=User::findOrFail(Auth::id());
                    $post->user()->associate($user);
                    $post->save();
                }
                if($lab){
                    return response()->json([
                        'message' => 'You have successfully added varsity',
                    ],200);
                }
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('adminpanel.post.editpost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title'  => $request->get('edit_title'),
            'body'  => $request->get('body'),
            'slug' => $request->get('edit_slug'),
        ]);
        if($post){
            return redirect()->route('admin.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
