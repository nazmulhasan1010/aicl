$('.owl-carousel-group').owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1100: {
            items: 3,
        }
    }
});
$('#recomandedProduct').owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    items: 2,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        }
    }
});


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}



@if (\Session::has('success'))
showModalCart('show')
@endif

function showModalCart(sta) {
    $('#cartModal').modal(sta);
}
$("#cartModalClose").on('click', function(){
    $('#cartModal').modal('hide');
});

function zoom(e) {
    var zoomed = e.currentTarget;
    e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX;
    e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX;
    x = offsetX / zoomed.offsetWidth * 100;
    y = offsetY / zoomed.offsetHeight * 100;
    console.log(zoomed.offsetWidth)
    zoomed.style.backgroundPosition = x + '% ' + y + '%';
}

$('.QuantityInDe').click(function () {
    let inst = $(this).data('inst'),
        quantityField = $('#quantity'),
        quantityField_2 = $('#quantityField_2'),
        quantity = parseInt(quantityField.text());
    if (inst === 'in') {
        quantity++
        quantityField.text(quantity);
        quantityField_2.text(quantity);
        $('.productQuantity').val(quantity)
        $('.productPriceShow').text($('.productPrice').val() * quantity);
    } else if (inst === 'de') {
        if (quantity > 1) {
            quantity--
            quantityField.text(quantity);
            quantityField_2.text(quantity);
            $('.productQuantity').val(quantity)
            $('.productPriceShow').text($('.productPrice').val() * quantity);
        } else {
            alert('Minimum quantity')
        }
    }
});

// ratings
var star_rating = $('.star-rating .fa');
star_rating.on('mouseover', function () {
    star_rating.siblings('input.temp-value').val($(this).data('rating'));
    star_rating.each(function () {
        if (parseInt(star_rating.siblings('input.temp-value').val()) >= parseInt($(this).data('rating'))) {
            $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
            $(this).removeClass('fa-star').addClass('fa-star-o');
        }
    });
})
star_rating.on('mouseout', function () {
    ratingRole();
})
ratingRole()

function ratingRole() {
    star_rating.each(function () {
        if (parseInt(star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
            $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
            $(this).removeClass('fa-star').addClass('fa-star-o');
        }
    });
}

star_rating.on('click', function () {
    star_rating.siblings('input.rating-value').val($(this).data('rating'));
    ratingRole()
    productQualityCheck()
    $('#reviewModal').modal('show');
});

function productQualityCheck() {
    let rating = parseInt($('#ratingValue').val()),
        quality;
    if (rating === 1) {
        quality = 'Poor';
    } else if (rating === 2) {
        quality = 'Fair';
    } else if (rating === 3) {
        quality = 'Average';
    } else if (rating === 4) {
        quality = 'Good';
    } else if (rating === 5) {
        quality = 'Excellent';
    }
    $('#tRating').text(rating);
    $('#pQuality').text(quality);
}

$('#ratingsReviews').keyup(function () {
    let value = $(this).val();
    $('#ratingsReviewsReq').text(value.length)
    if (value.length >= 50) {
        $('#ratingsReviewsReq').parent('.requirBox').css('color', 'green')
        if ($('.form-check-input').is(':checked')) {
            let value1 = $('#nickName').val();
            let value2 = $('#reviewTitle').val();
            if (value1.length < 10 && value2.length < 50) {
                $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
            }
        }
    } else {
        $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
        $('#ratingsReviewsReq').parent('.requirBox').css('color', 'red')
    }
});
$('#reviewTitle').keyup(function () {
    let value = $(this).val();
    $('#ratingTitleReq').text(value.length)
    if (value.length > 50) {
        $('#ratingTitleReq').parent('.requirBox').css('color', 'red')
        $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
    } else {
        if (value.length > 10) {
            $('#ratingTitleReq').parent('.requirBox').css('color', 'green')
        }
        if ($('.form-check-input').is(':checked')) {
            let value1 = $('#nickName').val();
            let value3 = $('#ratingsReviews').val();
            if (value1.length < 10 && value3.length > 50) {
                $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
            }
        }
    }
});
$('#nickName').keyup(function () {
    let value = $(this).val();
    $('#nickNameReq').text(value.length)
    if (value.length > 10) {
        $('#nickNameReq').parent('.requirBox').css('color', 'red')
        $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
    } else {
        if (value.length > 4) {
            $('#nickNameReq').parent('.requirBox').css('color', 'green')
        }
        if ($('.form-check-input').is(':checked')) {
            let value2 = $('#reviewTitle').val();
            let value3 = $('#ratingsReviews').val();
            if (value2.length < 50 && value3.length > 50) {
                $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
            }
        }
    }
});
$(".form-check-input").change(function () {
    if ($(this).is(':checked')) {
        let value1 = $('#nickName').val();
        let value2 = $('#reviewTitle').val();
        let value3 = $('#ratingsReviews').val();
        if (value1.length < 10 && value2.length < 50 && value3.length > 50) {
            $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
        }
    } else {
        $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
    }
});

var navbar = document.getElementById("addCartModal");
var sticky = navbar.offsetBottom;
window.onscroll = function () {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
};
