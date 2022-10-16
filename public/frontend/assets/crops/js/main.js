let detail = document.getElementById('rightmenu2');
window.addEventListener('scroll', function(e) {
    let valu = this.window.scrollY;
    var currentScrollPos = window.pageYOffset;
    let topPos = currentScrollPos + 10;
    console.log(currentScrollPos);
    //let finalValu = this.document.documentElement.scrollHeight - window.innerHeight;
    if (document.body.scrollTop > 950 || this.document.documentElement.scrollTop > 950) {

        detail.style.display = "block";
        detail.style.position = "absolute";
        detail.style.top = topPos + "px";
        //const total = document.documentElement.scrollHeight - this.window.innerHeight;
    } else if (currentScrollPos < 950) {
        detail.style.display = "none";
    }
})
