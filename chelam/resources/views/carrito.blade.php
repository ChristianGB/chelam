@extends('header')

@section('title', 'Cervezas Artesanales')
@section('page-css')
<link rel="stylesheet" href="css/formas-pago.css"> 
@endsection

@section('content')

<section class="pedido table">  
  <h2 class="title">Estas son tus chelas</h1>
  <header class="table--header">
    <h3 class="table--col pedido--producto">Producto</h3>
    <h3 class="table--col pedido--articulo">Artículo</h3>
    <h3 class="table--col pedido--cantidad">Cantidad</h3>
    <h3 class="table--col pedido--costo">Costo</h3>
  </header>
    
<!--    INFORMACIÓN DE UN PEDIDO  -->

  <div class="table--row">
   <div class="table--col pedido--producto pedido--producto__elemento">
    	<img class="pedido--img" src="media/beers/0.png" alt="Producto">
    </div>      
    <div class="table--col pedido--articulo">
    	<h3 class="pedido--nombre">Amnesia Nocturna</h3>
    	<p class="pedido--descripción pedido--descripcion__estado">Chiapas</p>
    	<p class="pedido--descripción pedido--descripcion__volumen">600ml</p>
    	<p class="pedido--precio">Precio unitario: <span>$30.00</span></p>
    </div>
    <div class="table--col pedido--cantidad">
    	<input type="text" class="pedido--cantidad__input" value="1">
    	<a href="">Eliminar artículo</a>
    </div>
    <div class="table--col pedido--costo">
    	<p class="pedido--costo__total">$30.00</p>
    </div>
  </div>
    
<!--    INFORMACIÓN DE UN PEDIDO  -->
   
<!--    INFORMACIÓN DE UN PEDIDO  -->

  <div class="table--row">
   <div class="table--col pedido--producto pedido--producto__elemento">
    	<img class="pedido--img" src="media/beers/3.png" alt="Producto">
    </div>      
    <div class="table--col pedido--articulo">
    	<h3 class="pedido--nombre">Trepadora Red Ale</h3>
    	<p class="pedido--descripción pedido--descripcion__estado">Chiapas</p>
    	<p class="pedido--descripción pedido--descripcion__volumen">600ml</p>
    	<p class="pedido--precio">Precio unitario: <span>$30.00</span></p>
    </div>
    <div class="table--col pedido--cantidad">
    	<input type="text" class="pedido--cantidad__input" value="3">
    	<a href="">Eliminar artículo</a>
    </div>
    <div class="table--col pedido--costo">
    	<p class="pedido--costo__total">$90.00</p>
    </div>
  </div>
    
<!--    INFORMACIÓN DE UN PEDIDO  -->
</section>
  
<section class="formas-pago">
    <div class="pedido--info">
        <h3>Mi carrito ( <span>4</span> )</h3>
        <p>Información sobre las formas de pago</p>
    </div>
    <div class="pago-botones">
        <button class="pago pago--oxxo">OXXO</button>
        <button class="pago pago--paypal">Paypal</button>
    </div>
</section>
@endsection