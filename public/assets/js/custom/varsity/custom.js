var varsityClass = function () {
    var convertToSlug = (Text) => {
        return Text.toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-');
    }
    var convertToObject = (data) => {
        return JSON.parse(data);
    }
    var submitVarsityForm = () => {
        $('#varsity_submit').click(function (e) {
            e.preventDefault();
            $('#varsity_add').find('input[type="text"]').val('');
            var Varsity = {
                'name': $('#varsity_name').val(),
                'short_name': $('#varsity_short_name').val(),
                'slug': $('#varsity_slug').val(),
            }
            $.ajax({
                type: 'POST',
                url: window.location.origin+'/panel/varsity/add',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: Varsity,

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
                    else{
                        Swal.fire({
                            title: "Error",
                            text: "There is something wrong.",
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
    var slugSet = () => {
        $('#varsity_short_name').keyup(() => {
            $('#varsity_slug').val(convertToSlug($('#varsity_short_name').val()));
        });
    }

    return {
        // public functions
        init: function () {
            submitVarsityForm();
            slugSet();
        }
    };

}();

jQuery(document).ready(function () {

    varsityClass.init();
});