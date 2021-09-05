$('.responsive').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$(function () {
    $('.topScroll').click(function () {
        $('html').animate({ "scrollTop": "0" }, 200)
        return false;
    });
    $(window).scroll(function () {
        let TopPos = $(window).scrollTop();

        if (TopPos > 200) {
            $('.visible-topScroll').fadeIn()
        } else {
            $('.visible-topScroll').fadeOut()
        }
    });
});

$('.send_message').click(function (event) {
    event.preventDefault();
    const SubmitMessage = $('#SubmitMessage');
    $.ajax({
        url: SubmitMessage.attr('action'),
        method: "POST",
        beforeSend: () => {
            ErrorRemove()
            $(this).html('Sending.... <i class="fa fa-spin fa-spinner"></i>');
        },
        complete: () => {
            $(this).html('Send Message <i class="fas fa-paper-plane"></i>');
        },
        data: SubmitMessage.serialize(),
        success: function (result) {
            SubmitMessage[0].reset();
            toastr.success(result.message);
            ErrorRemove();
        },
        error: function (errors) {
            ErrorRemove()
            ErrorShow(errors.responseJSON.errors);
        }
    });
});

function ErrorShow(errors) {
    $.each(errors, function (index, value) {
        $('#error_' + index).text(value);
        $('.error_' + index).addClass('is-invalid');
    });
}

function ErrorRemove() {
    $('#error_name').text('');
    $('.error_name').removeClass('is-invalid');
    $('#error_email').text('');
    $('.error_email').removeClass('is-invalid');
    $('#error_subject').text('');
    $('.error_subject').removeClass('is-invalid');
    $('#error_phone_number').text('');
    $('.error_phone_number').removeClass('is-invalid');
    $('#error_message').text('');
    $('.error_message').removeClass('is-invalid');
}
