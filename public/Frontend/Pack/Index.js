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
