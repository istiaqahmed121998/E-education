@extends('layouts.master')
@section('header')
    @parent
    <title>Courses</title>
    <meta name="description" content="Put your description here.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
@endsection

@section('content')
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div id="section-title" class="section-title p-1 pt-3">
            <h2 class="text-center fw-bold">Courses</h2>
        </div>
        @isset($department)
        @foreach ($department->courses as $course)
        <div class="card bg-light shadow bg-body rounded-3 mb-2">
            <div class="card-body tab">
                <h2 class="card-title center">
                    <a style="color: #ececec" href="{{ route('course.show', ['course'=>$course->slug]) }}">{{ $course->name }}{!! '<br>' !!}{{ "(".$course->course_code.")" }}</a>
                </h2>
            </div>
        </div>
        @endforeach
        @endisset
        @isset($courses)
        @foreach ($courses as $course)
        <div class="card bg-light shadow bg-body rounded-3 mb-2">
            <div class="card-body tab">
                <h2 class="card-title center">
                    <a style="color: #ececec" href="{{ route('course.show', ['course'=>$course->slug]) }}">{{ $course->name }}</a>
                </h2>
            </div>
        </div>
    @endforeach
        @endisset

    </div>
@endsection



@section('rightsidebar')
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="sticky-top">
            <div class="card rounded-3 shadow-lg mb-3">
                <div class="card-body">
                    <img src="{{ asset('assets/img/ads1.png') }}" height="117" width="279" class="card-img-top" alt="...">
                </div>
            </div>
            @isset($department)
                <div class="bg-light shadow bg-body rounded-3 mb-3">
                    <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                        {{ Str::upper($department->short_name) }} Top Post
                    </div>

                    <ul class="list-group list-group-flush mb-2">
                        @foreach ($department->posts()->take(5)->get() as $post)
                            <li class="list-group-item">
                                <a href="{{ route('post.show',['post'=>$post]) }}">{{ $post->title }}</a>
                                <small>(
                                    <a href="{{ route('lab.show', ['lab' => $post->postable->slug]) }}">{{ Str::upper($post->postable->course->course_code) }}</a>
                                    @if (Str::lower(str_replace('App\\Models\\', '', $post->postable_type)) == 'lab')
                                        <a href="{{ route('lab.show', ['lab' => $post->postable->slug]) }}">{{ Str::upper($post->postable->name) }}</a>
                                    @elseif (Str::lower(str_replace("App\\Models\\","",$post->postable_type))=='assignment' )
                                    <a href="{{ route('assignment.show', ['assignment' => $post->postable->slug]) }}">{{ Str::upper($post->postable->name) }}</a>
                                    @elseif (Str::lower(str_replace("App\\Models\\","",$post->postable_type))=='assessment' )
                                    <a href="{{ route('assessment.show', ['assessment' => $post->postable->slug]) }}">{{ Str::upper($post->postable->name) }}</a>
                                    @elseif (Str::lower(str_replace("App\\Models\\","",$post->postable_type))=='note' )
                                    <a href="{{ route('note.show', ['note' => $post->postable->slug]) }}">{{ Str::upper($post->postable->name) }}</a>
                                    @endif)
                                </small>
                                <div>
                                    <small class="text-muted">{{ date('d-m-Y', strtotime($post->created_at)) }} ,</small>
                                    <small class="text-muted">{{ $post->views }} Views</small>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endisset
        </div>
    </div>
@endsection
