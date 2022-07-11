"use-strict";

// from: https://stackoverflow.com/questions/5968196/how-do-i-check-if-a-cookie-exists
function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    } else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }

    return decodeURI(dc.substring(begin + prefix.length, end));
} 

if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    if (getCookie('theme') == null && navigator.cookieEnabled) {
        window.location = "/api/change-theme";
    }
}

document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        let navbar_top = document.getElementById('navbar_top');
        let top_size = navbar_top.offsetHeight;

        if (window.scrollY > top_size) {
            navbar_top.classList.add('fixed-top');
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
        } else {
            navbar_top.classList.remove('fixed-top');
            document.body.style.paddingTop = '0';
        } 
    });
}); 