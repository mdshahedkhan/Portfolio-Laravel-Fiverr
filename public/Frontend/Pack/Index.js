$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
    }
});

// Delete Method
function DeleteMethod(URL, id) {
    event.preventDefault();
    swal({
            title: "Are you sure?",
            text: "Your will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {
            $.ajax({
                url: URL,
                type: "POST",
                success: function (data) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    $('.removeItem' + id).empty();
                }
            });
        });
}


// User Update
$('#userInfoUpdate').submit(function (event) {
    event.preventDefault();
    const url = $(this).attr('action');
    $.ajax({
        url,
        type: "POST",
        data: $('#userInfoUpdate').serialize(),
        success: function (result) {
            //window.location = result.redirectUrl;
            window.location.href = "/staff/login";
        },
        error: function (err) {
            ErrorMessage(err.responseJSON.errors);
        }
    });
});

function ErrorMessage(errors) {
    $.each(errors, function (key, value) {
        toastr.error(value)
    });
}


$('#UpdateGeneralSetting').submit(function (event){
    event.preventDefault();
    const URL = $(this).attr('action');
    $.ajax({
        url: URL,
        method: "POST",
        data: $(this).serialize(),
        success: function (result){

        },
        error: function (errors){
            ErrorMessage(errors.responseJSON.errors);
        }
    });
});
