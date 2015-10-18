$( document ).ready(function(){
    $('.main-nav-btn').click(function(){
        $('.main-nav').toggleClass('show-nav')
    })
    
    $('#show-login').click(function(){
        $('.login-container').toggleClass('show-login')        
    })
    
})