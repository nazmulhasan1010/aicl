$('.owl-carousel-group').owlCarousel({
    loop: true,
    margin: 20,
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
    margin: 20,
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

