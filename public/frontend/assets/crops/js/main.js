let detail = document.getElementById('rightmenu2');
window.addEventListener('scroll', function(e) {
    let valu = this.window.scrollY;
    var currentScrollPos = window.pageYOffset;
    let topPos = currentScrollPos + 50;
    //let finalValu = this.document.documentElement.scrollHeight - window.innerHeight;
    if (document.body.scrollTop > 950 || this.document.documentElement.scrollTop > 950) {

        detail.style.display = "block";
        detail.style.position = "absolute";
        detail.style.top = topPos + "px";
        //const total = document.documentElement.scrollHeight - this.window.innerHeight;
    } else if (currentScrollPos < 950) {
        detail.style.display = "none";
    }
});


$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1100: {
            items: 3,
        },
        1400: {
            items: 3,
            loop: false,
        }
    }
});


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}
