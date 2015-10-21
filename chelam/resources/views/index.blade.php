@extends('header')

@section('title', 'Cervezas Artesanales')
@section('page-css')
<link rel="stylesheet" href="css/index-styles.css"> 
<link rel="stylesheet" href="css/index-queries.css">
@endsection

@section('content')
<section class="cover">
        <img src="media/logos/logohorz_blc.png" alt="Chelam">
        <h1>Cerveza artesanal hasta tu casa</h1>
    </section>
    <section class="about-us">
    <img src="media/logos/logovert_color.png" alt="Chelam">
    <p>Chelam es una empresa dedicada a la venta y entrega a domicilio de cervezas artesanales en todas partes del mundo a travez de nuestra <a href="#">tienda en linea</a> donde podrás encontrar todo tipo de cervezas artesanales para el gusto de todas las personas.</p> <br>
    <p>Nuestro objetivo no es solo enriquecer la cultura dentro de los hogares sino también dentro de las empresas culinarias que tienen como objetivo desarrollar su diversidad gastronómica a través del consumo de la cerveza artesanal. </p>
</section>
    <section class="buy">
        <a href="#" class="btn">COMPRAR <span>AHORA</span></a>
    </section>
    <section class="how-to-buy">
        <h2>¿Cómo comprar?</h2>
        <p>Ahora puedes tener las mejores cervezas artesanales sin salir de tu casa</p>
        <div class="steps-to-buy">
            <div class="step-to-buy">               
                <div class="step-img">
                    <img src="media/icons/sesion.png" alt="Inicia sesión">
                </div>                    
                <h3>Inicia sesión</h3>
                <p>Desde Facebook o creando un usuario con tu email.</p> 
            </div>
            <div class="step-to-buy">               
                <div class="step-img">
                    <img src="media/icons/arma_pedido.png" alt="Arma tu pedido">
                </div>                    
                <h3>Arma tu pedido</h3>
                <p>Elige entre Cervezas Individuales 
o ChelaPacks prediseñados.</p> 
            </div>
            <div class="step-to-buy">               
                <div class="step-img">
                    <img src="media/icons/carrito.png" alt="Agrega al carrito">
                </div>                    
                <h3>Agrega al carrito</h3>
                <p>Recuerda que tu Pedido 
debe ser en Multiplos de 6.</p> 
            </div> 
            <div class="step-to-buy">               
                <div class="step-img">
                    <img src="media/icons/pedido.png" alt="Recibe tus cervezas

">
                </div>                    
                <h3>Recibe tus cervezas</h3>
                <p>Paga tus Cervezas y te las 
enviamos hasta tu Domicilio.</p> 
            </div>
            <div class="step-to-buy">               
                <div class="step-img">
                    <img src="media/icons/disfruta.png" alt="Disfruta tus cervezas">
                </div>                    
                <h3>Disfruta tus cervezas</h3>
                <p>Recibe en tu Casa las mejores 
Cervezas Artesanales Mexicanas.</p> 
            </div> 
        </div>
    </section>
    <section class="beer-choose">
        <h2>Elige tus cervezas</h2>
        <p>Elige entre los ChelaPack prediseñados o Cervezas individuales</p>
        <div class="chelapacks">
            <div class="chelapack-container">
                <div class="chelapack-img"></div>
                <p>Nuestros cerveceros ya hicieron el trabajo por ti.</p> <br>
                <p>Descubre los chelapacks diseñados para hacerte sentir una experiencia artesanal inolvidable.</p>
            </div>
            <div class="chelapack-container">
                <div class="chelapack-img"></div>
                <p>Si te sientes preparado, diseña tu chelapack tú mismo, con las cervezas que hayan revolucionado tus sentidos.</p>
            </div>
        </div>        
    </section>
@include('footer')
@endsection