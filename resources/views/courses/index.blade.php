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
            <div class="card text-dark bg-light shadow-lg bg-body rounded-3 mb-3">
                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                    Newsletter
                </div>
                <div class="card-body">
                    <p>Get the latest information from us via email</p>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="bg-light shadow bg-body rounded-3 mb-3">
                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                    Top Articles
                </div>
                <ul class="list-group list-group-flush mb-2">
                    <li class="list-group-item">
                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                        <div>
                            <small class="text-muted">27 April 2021,</small>
                            <small class="text-muted">5500 views </small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                        <div>
                            <small class="text-muted">27 April 2021,</small>
                            <small class="text-muted">5500 views </small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                        <div>
                            <small class="text-muted">27 April 2021,</small>
                            <small class="text-muted">5500 views </small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                        <div>
                            <small class="text-muted">27 April 2021,</small>
                            <small class="text-muted">5500 views </small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                        <div>
                            <small class="text-muted">27 April 2021,</small>
                            <small class="text-muted">5500 views </small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                        <div>
                            <small class="text-muted">27 April 2021,</small>
                            <small class="text-muted">5500 views </small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                        <div>
                            <small class="text-muted">27 April 2021,</small>
                            <small class="text-muted">5500 views </small>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="d-flex flex-column mb-3 bg-light shadow bg-body rounded">
                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                    Categories
                </div>
                <div class="overflow-auto" style="max-height: 42vh">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Hot News
                            <span class="badge bg-primary rounded-pill">3432</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Technology
                            <span class="badge bg-primary rounded-pill">1423</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Lifestyle
                            <span class="badge bg-primary rounded-pill">982</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Health
                            <span class="badge bg-primary rounded-pill">743</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ramadhan
                            <span class="badge bg-primary rounded-pill">232</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Automotive
                            <span class="badge bg-primary rounded-pill">232</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Finance
                            <span class="badge bg-primary rounded-pill">231</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Travel
                            <span class="badge bg-primary rounded-pill">172</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Sport
                            <span class="badge bg-primary rounded-pill">123</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
