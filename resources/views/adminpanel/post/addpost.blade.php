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
<!--begin::Page Vendors(used by this page)-->
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--end::Page Vendors-->
<script src="{{ asset('assets/js/custom/create_post.js') }}"></script>

<script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js') }}"></script>
@endsection