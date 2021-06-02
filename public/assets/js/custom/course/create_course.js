var courseClass = function () {
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
                'course_credit': $('#course_credit').val(),
                'department': $('#departmentselect').val(),
                'course_prerequisite': $('#courseprerequisites').val()
            }
            $('#departmentselect').val([]).trigger('change')
            $('#courseprerequisites').val([]).trigger('change')
            $.ajax({
                type: 'POST',
                url: window.location.origin + '/panel/course/add',
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
    var varsitySelect = () => {
        $('#varsity').select2({
            minimumInputLength: 1,
            maximumSelectionLength: 2,
            ajax: {
                url: window.location.origin + '/panel/varsity/getall',
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
    var departmentSelect = () => {
        $('#varsity').change(() => {
            $('#departmentselect').val([]).trigger('change');
            $('#departmentselect').select2({
                minimumInputLength: 1,
                maximumSelectionLength: 4,
                ajax: {
                    url: window.location.origin + `/panel/varsity/${$('#varsity').val()}/departments`,
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
                            results: $.map(data.department, function (item) {
                                return {
                                    text: item.short_name,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            });
        });
    }

    var courseSelect = () => {
        $('#varsity').change(() => {
            $('#courseprerequisites').val([]).trigger('change');
            $('#courseprerequisites').select2({
                minimumInputLength: 1,
                maximumSelectionLength: 2,
                ajax: {
                    url: window.location.origin + `/panel/varsity/${$('#varsity').val()}/departments`,
                    dataType: "JSON",
                    type: "GET",
                    data: function (params) {
                        var queryParameters = {
                            term: params.term
                        }
                        return queryParameters;
                    },
                    processResults: function (data) {
                        var data1 = [];
                        (data.courses).forEach(function (item, index) {
                            data1.push(...item);
                        });
                        return {
                            results: $.map(data1, function (item) {
                                return {
                                    text: item.course_code,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            });
        })

    }

    var slugSet = () => {
        $('#course_code').keyup(() => {
            var varsity=(!!$('#varsity').select2('data')[0].text ? convertToSlug(($('#varsity').select2('data')[0].text).toLowerCase())+'-' : '').trim();
            $('#course_slug').val((varsity)+convertToSlug($('#course_code').val()));
        });
        $('#varsity').change(() => {
            var varsity1=(!!$('#varsity').select2('data')[0].text ? convertToSlug(($('#varsity').select2('data')[0].text).toLowerCase())+'-' : '').trim();
            var course=(!!$("#course_code").val() ? convertToSlug($("#course_code").val()) : '').trim();
            $('#course_slug').val(varsity1+convertToSlug(course));
        });
    }

    return {
        // public functions
        init: function () {

            submitCourseForm();
            slugSet();
            varsitySelect();
            departmentSelect();
            courseSelect();
        }
    };

}();

jQuery(document).ready(function () {

    courseClass.init();
});