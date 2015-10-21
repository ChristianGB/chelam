$( document ).ready(function(){
    (function(){
        var mayorEdad = getCookie("mayorEdad")
        if(mayorEdad != "true" || mayorEdad == null){
            $('.modal').addClass('show-modal')
        }            
    })()
    
    $('#mayorEdad').click(function(){
        setCookie("mayorEdad","true",3)
        window.location.href = "/"
    })
    
    $('.main-nav-btn').click(function(){
        $('.main-nav').toggleClass('show-nav')
    })
    
    $('#show-login').click(function(e){
        e.preventDefault()
        if($(window).width() >= 900)
            $('.login-container').toggleClass('show-login')
        else
            window.location.href = "/login"
    })

// Sticky nav
    $(window).on('scroll', function(){
        if($(window).scrollTop() > 20){
            $('.main-header').addClass('fix-header')
        } else {
            $('.main-header').removeClass('fix-header')
        }
    })
    
//show chela info
    $('.more-info').click(function(e){
        e.preventDefault()
        $('.chela-modal').addClass('show-chela-info')
    })
    
    $('.exit-modal').click(function(e){
        e.preventDefault()
        $('.chela-modal').removeClass('show-chela-info')
    })
    
// Cookies
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
})