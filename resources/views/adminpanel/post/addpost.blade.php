{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('container')
   <!--begin::Container-->
   <div class="container">
    <!--begin::Card-->
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">Add Course</h3>
        </div>
        <!--begin::Form-->
        <form class="form" id="course_add">
            <div class="card-body">
                <div class="tinymce">
                    <textarea id="kt-tinymce-4" name="kt-tinymce-4" class="tox-target">
                        <h1>Quick and Simple TinyMCE 5 Integration</h1>
                        <p>Here goes the&nbsp;<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&nbsp;<em>printing and typesetting</em>&nbsp;industry.</p>
                        <blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
                        <h3 style="text-align: right;">Flexible &amp; Powerful</h3>
                        <p style="text-align: right;"><strong>Lorem Ipsum has been the industry's</strong>&nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                        <ul>
                            <li>List item 1</li>
                            <li>List item 2</li>
                            <li>List item 3</li>
                            <li>List item 4</li>
                        </ul>
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <button type="reset" id="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->
</div>
<!--end::Container-->

@endsection

@section('extrajs')
@parent
<script src="{{ asset('assets/js/custom/create_post.js') }}"></script>
<script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js') }}"></script>
@endsection