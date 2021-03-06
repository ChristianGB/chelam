@extends('header')

@section('title', 'Chelapack')
@section('page-css')
<link rel="stylesheet" href="css/chelapack-styles.css">
@endsection

@section('content')
<section class="chelapacks">

  <section class="chelapack">
    <button type="button" class="add-to-cart agregar">
      <i class="fa fa-plus"></i>Agregar al carrito
    </button>
      <div class="chelapack--img">
        <img src="media/beers/uploader-bg.png" alt="">
      </div>
      <div class="chelapack--data">
        <h2 class="title">Nombre del Chelapack</h2>
        <p id="cp-descripcion" class="descripcion">
          Descripción del Chelapack. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptatum eaque, iste voluptates commodi quaerat laboriosam soluta nam aspernatur nobis assumenda inventore eos. Voluptatum, deserunt iusto corporis. Dignissimos, eligendi, ducimus?
        </p>
        <p class="title price">Disfruta estas deliciosas cervezas por: <span>$200.00</span></p>        
        <div class="cp-chelas">

          <!-- Son 6 chelas así que son 6 group -->
          <div class="group">
            <img src="media/beers/2.png" alt="" class="cp-chela">
            <p class="title">Amnesia Nocturna</p>
          </div>
          <!-- Copiar otras 5 veces-->
          
        </div>
      </div>
     </section>

</section>
@endsection