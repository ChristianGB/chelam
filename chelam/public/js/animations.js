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
    
    $('.show-nav-btn').click(function(){
        $('.main-nav').toggleClass('show-nav')
    })
    
// Elemento agregado a carrito
    $('.add-to-cart').click(function(){
        $('.new-element-mark').addClass('new-element')
        $('.show-cart-btn').addClass('cart-btn-anim')
    })
    
    $('.show-cart-btn').click(function(){
        $('.new-element-mark').removeClass('new-element')
        $('.show-cart-btn').removeClass('cart-btn-anim')
    })
    
// Show cart 
    $('.show-cart-btn').click(function(e){
        e.preventDefault()
        $('.cart').toggleClass('show-cart')
    })

// Show login 
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

//User nav
    $('#toHistorial').click(function(e){
        e.preventDefault()
        $('#toPerfil').removeClass('user-active')
        $('#toHistorial').addClass('user-active')
        
        $('.user-profile').fadeOut()
        $('.user-historial').delay(600).fadeIn()        
    })
    
    $('#toPerfil').click(function(e){
        e.preventDefault()
        $('#toHistorial').removeClass('user-active')
        $('#toPerfil').addClass('user-active')
        
        $('.user-historial').fadeOut()      
        $('.user-profile').delay(600).fadeIn()  
    })
    
// Cookies
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue;
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

// Añadir al carrito temporal en header
    
    $(".add-to-cart").click(function(e){
        e.preventDefault();
        var idCerveza = this.id;
        $.ajax({
            url: 'addTempCart',
            type: "post",
            data: {'idCerveza':idCerveza, '_token': $('input[name=_token]').val()},
            success: function(data){
                if(data=="error login"){
                    alert("Por favor crea una cuenta o ingresa para hacer tu pedido");
                }else{
                    var myData = JSON.parse(data);
                    $("#contentCart").html(myData.cantProductos);

                    var cajaCerveza = document.createElement("DIV");
                    cajaCerveza.setAttribute( 'class','cart-list-group');

                    var a = document.createElement("A");
                    var textnode = document.createTextNode("X");
                    a.appendChild(textnode);
                    cajaCerveza.appendChild(a);

                    var nombre = document.createElement("P");
                    nombre.setAttribute("class", "chela-name");
                    nombre.setAttribute("id", "nameTempProductCart");
                    

                    var strong = document.createElement("STRONG");
                    strong.setAttribute("id", "nameTempProductCartStrong");
                    nombre.appendChild(strong);

                    var nombreCerveza = document.createTextNode(myData.nombreProducto);
                    strong.appendChild(nombreCerveza);

                    cajaCerveza.appendChild(nombre);
                    
                    var precio = document.createElement("P");
                    precio.setAttribute("class", "chela-amount");
                    var precioProducto = document.createTextNode("$"+myData.precioProducto);
                    precio.appendChild(precioProducto);
                    cajaCerveza.appendChild(precio);

                    var cajota = document.getElementById("cart-list");
                    cajota.appendChild(cajaCerveza);
                }
            },
            error: function(data){
                console.log(data);
            }
        });  
    });
});