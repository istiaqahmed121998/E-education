@extends('layouts.master')
@section('header')
    @parent
    <title>Assignments {!! !empty($course) ? " -".$course->course_code : '' !!}</title>
    <meta name="description" content="Put your description here.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
@endsection
@section('content')
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div id="section-title" class="section-title p-1 pt-3">
            <h2 class="text-center fw-bold">Assignments {!! !empty($course) ? " -".$course->course_code : '' !!}</h2>
        </div>
        @if (isset($course))
            @foreach ($course->assignments as $assignment)
                <div class="card bg-light shadow bg-body rounded-3 mb-2">
                    <div class="card-body tab">
                        <h2 class="card-title center">
                            <a style="color: #ececec" href="{{ route('assignment.show', ['assignment' => $assignment->slug]) }}">{{ $assignment->name }}</a>
                        </h2>
                    </div>
                </div>
            @endforeach
        @else
            @foreach ($assignments as $assignment)
                <div class="card bg-light shadow bg-body rounded-3 mb-2">
                    <div class="card-body tab">
                        <h2 class="card-title center">
                            <a style="color: #ececec" href="{{ route('assignment.show', ['assignment' => $assignment->slug]) }}">{{ $assignment->course->course_code }}{!! '<br>' !!}{{ $assignment->name }}</a>
                        </h2>
                    </div>
                </div>
            @endforeach
                
        @endif
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
            <div class="card text-dark bg-light shadow-lg bg-body rounded-3 mb-3">
                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                    Missing Post
                </div>
                <div class="card-body">
                    <p></p>
                    <form>
                        <div class="mb-3">
                            <textarea type="text" class="form-control" id="text" placeholder="Email"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection
