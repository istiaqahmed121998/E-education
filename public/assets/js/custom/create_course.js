var dashBoardClass = function () {
    var convertToSlug = (Text) => {
        return Text.toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-');
    }

    var convertToObject = (data) => {
        return JSON.parse(data);
    }
    var submitCourseForm = () => {
        $('#submit').click(function (e) {
            e.preventDefault();
            var course = {
                'name': $('#course_name').val(),
                'course_code': $('#course_code').val(),
                'slug': $('#course_slug').val(),
                'course_credit':$('#course_credit').val(),
                'department': $('#departmentselect').val(),
                'course_prerequisite':$('#courseprerequisites').val()
            }
            $('#departmentselect').val([]).trigger('change')
            $('#courseprerequisites').val([]).trigger('change')
            $.ajax({
                type: 'POST',
                url: '/panel/course/add',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: course,

                success: function (data) {
                    Swal.fire({
                        title: "Good job!",
                        text: data.message,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Confirm me!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                    $('#course_add').find('input[type="text"]').val('');


                },
                error: function (xhr, status, error) {
                    var reject = convertToObject(xhr.responseText);
                    if (xhr.status === 422) {
                        Swal.fire({
                            title: "Fix this issue first!",
                            text: reject[Object.keys(reject)[0]].toString(),
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Try Again",
                            customClass: {
                                confirmButton: "btn btn-danger"
                            }
                        });
                    }
                }
            });
        });
    }
    var departmentSelect = () => {
        $('#departmentselect').select2({
            minimumInputLength: 1,
            maximumSelectionLength: 2,
            ajax: {
                url: '/panel/department/getall',
                dataType: "JSON",
                type: "GET",
                data: function (params) {
                    var queryParameters = {
                        term: params.term
                    }
                    return queryParameters;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.short_name,
                                id: item.id
                            }
                        })
                    };
                }
            }
        });
    }

    var courseSelect = () => {
        $('#courseprerequisites').select2({
            minimumInputLength: 1,
            maximumSelectionLength: 2,
            ajax: {
                url: '/panel/course/getall',
                dataType: "JSON",
                type: "GET",
                data: function (params) {
                    var queryParameters = {
                        term: params.term
                    }
                    return queryParameters;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.course_code,
                                id: item.id
                            }
                        })
                    };
                }
            }
        });
    }
    
    var slugSet = () => {
        $('#course_code').keyup(() => {
            $('#course_slug').val(convertToSlug($('#course_code').val()));
        });
    }

    return {
        // public functions
        init: function () {

            submitCourseForm();
            slugSet();
            departmentSelect();
            courseSelect();
        }
    };

}();

jQuery(document).ready(function () {

    dashBoardClass.init();
});