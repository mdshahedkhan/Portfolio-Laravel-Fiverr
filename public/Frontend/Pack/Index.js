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
        beforeSend: () => {
            $('.UpdateBtn').html('<span class="fa fa-spin fa-spinner"></span> Loading..')
        },
        processData: false,
        contentType: false,
        data: new FormData(this),
        success: function (result) {
            if(result.status === 200 || result.status === 201){
                window.location.href = "/staff/login";
            }else{
                toastr.error(result.message);
            }
        },
        error: function (err) {
            ErrorMessage(err.responseJSON.errors);
        },
        complete: () => {
            $('.UpdateBtn').html('Update')
        }
    });
});

function ErrorMessage(errors) {
    $.each(errors, function (key, value) {
        toastr.error(value)
    });
}


$('#UpdateGeneralSetting').submit(function (event) {
    event.preventDefault();
    const URL = $(this).attr('action');
    $.ajax({
        url: URL,
        method: "post",
        processData: false,
        contentType: false,
        beforeSend: () => {
            $('.UpdateBtn').html('<span class="fa fa-spin fa-spinner"></span> Loading..')
        },
        data: new FormData(this),
        success: function (result) {
            $('.UpdateBtn').attr('disabled', true);
            $('.UpdateCondition').prop('checked', false);
            if (result.status === 200) {
                $('#UpdateGeneralSetting')[0].reset();
                toastr.success(result.message)
            } else {
                toastr.warning(result.message)
            }
        },
        error: function (errors) {
            ErrorMessage(errors.responseJSON.errors);
            $('.UpdateBtn').attr('disabled', true);
            $('.UpdateCondition').prop('checked', false)
        },
        complete: () => {
            $('.UpdateBtn').html('Update');
        }
    });
});


function ReadFileImage(input, place) {
    if (input.files) {
        const fileLength = input.files.length;
        for (var i = 0; i < fileLength; i++) {
            const ImageFileReader = new FileReader();
            ImageFileReader.onload = function (event) {
                const res = event.target.result;
                $('#' + place).attr('src', res);
            }
            ImageFileReader.readAsDataURL(input.files[i]);

        }
    }
}


$(document).on('change', '#edit_icon_service', function (event) {
    ReadFileImage(this, 'IconPreviewImageProfile');
});
