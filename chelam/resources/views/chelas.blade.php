@extends('header')

@section('title', 'Chelas')
@section('page-css')
<link rel="stylesheet" href="css/chelas-styles.css">
@endsection

@section('content')
<section class="chelas-container">
    <div class="chelas-nav">
        <h2>BUSCA TUS CERVEZAS</h2>
        <p>Encuentra tus cervezas por tipo, color, sabor o por el estado de su procedencia. </p>
        <p>Recuerda que tus pedidos deben ser en múltiplos de 6.</p>
        <form action="">
            <div class="check-group">
                <h3>Por tipo:</h3>                    
                <input type="checkbox" name="tipo" value="Ale" id="ale">
                <label for="ale">Ale</label><br>
                
                <input type="checkbox" name="tipo" value="Lager" id="lager">
                <label for="lager">Lager</label>                  
            </div>
            <div class="check-group">
                <h3>Por color:</h3>
                <input type="checkbox" name="color" value="Oscura" id="oscura">
                <label for="oscura">Oscura</label><br>
                
                <input type="checkbox" name="color" value="Clara" id="clara">
                <label for="clara">Clara</label>
            </div>
            <div class="check-group">
                <h3>Por sabor:</h3>
                <input type="checkbox" name="sabor" value="Amargo" id="amargo">
                <label for="oscura">Amargo</label><br>
                
                <input type="checkbox" name="sabor" value="Dulce" id="dulce">
                <label for="clara">Dulce</label>
            </div>
            <div class="check-group">
               <h3>Por estado:</h3>
                <select name="estados" id="estados">                   
                    <option value="todos">Todos</option>
                    <option value="chiapas">Chiapas</option>
                </select>
            </div>                
        </form>
    </div>
    <div class="chelas-list">
        <!--
        <div class="chela-container">
            <div class="chela-container-img">
              <img src="media/beers/0.png" alt="chela">
            </div>            
            <div class="chela-list-info">
                <header class="chela-list-info-header">
                    <h2>Amnesia <span>Nocturna</span></h2>
                    <p>Tipo</p>
                    <a href="" class="more-info">?</a>
                </header>
                <div class="chela-list-info-content">
                    <p class="price old-price">$65.00</p>
                    <p class="promo-price">$30.00</p>
                    <p class="volumen">600 ml</p>
                    <button type="button" class="add-to-cart">
                      <i class="fa fa-plus"></i>Agregar al carrito
                    </button>
                </div>
            </div>
        </div>
        -->
        <?php $cont = 0 ?>
        @foreach ($cervezas as $cerveza)
        
        <div class="chela-container">
            <div class="chela-container-img">
              <img src="media/beers/{{ $cont }}.png" alt="chela">
            </div>            
            <div class="chela-list-info">
                <header class="chela-list-info-header">
                    <?php
                    $nombre = explode(" ", $cerveza->Nombre);
                    if(sizeof($nombre)>0){
                      ?>
                      <h2>{{ $nombre[0] }} <span>{{ $nombre[1] }}</span></h2>  
                      <?php
                    }else{
                      ?>
                      <h2>{{ $cerveza->Nombre }}</h2>  
                      <?php
                    }
                    ?>
                    
                    <p>{{ $cerveza->tipo }}</p>
                    <a href="" class="more-info" id="{{ $cerveza->idCerveza }}">?</a>
                </header>
                <div class="chela-list-info-content">
                    <p class="price">${{ $cerveza->precio }}.00</p>
                    <p class="volumen">{{ $cerveza->Volumen }} ml</p>
                    <button type="button" class="add-to-cart" id="{{ $cerveza->idCerveza }}" ng-click='addCont()'>
                      <i class="fa fa-plus"></i>Agregar al carrito
                    </button>
                </div>
            </div>
        </div>
        <?php $cont++; ?>
        @endforeach
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>    
<!--          CHELA MODAL PARA MOSTRAR LA INFORMACIÓN DE LAS SHELAS-->
<?php $cont2 = 0 ?>
@foreach ($cervezas as $cerveza)
   <div class="chela-modal {{ $cerveza->idCerveza }}">                              
       <div class="chela-modal-container">
           <div class="chela-header">
                <?php
                  $nombre = explode(" ", $cerveza->Nombre);
                  if(sizeof($nombre)>0){
                    ?>
                    <h2>{{ $nombre[0] }} <span>{{ $nombre[1] }}</span></h2>  
                    <?php
                  }else{
                    ?>
                    <h2>{{ $cerveza->Nombre }}</h2>  
                    <?php
                  }
                ?>
               <a href="" class="exit-modal" id="{{ $cerveza->idCerveza }}">Cerrar</a>
           </div>
           <div class="chela-info">
               <div class="chela-info-img">
                 <img src="media/beers/{{ $cont2 }}.png" alt="chela">
               </div>               
               <div class="chela-data">
                  <div class="data-group">
                      <p>Estado</p>
                      <strong>Chiapas</strong>
                  </div>
                  <div class="data-group">
                      <p>Presentación</p>
                      <strong>{{ $cerveza->Volumen }} ml</strong>
                  </div>
                  <div class="data-group">
                      <p>Color</p>
                      <strong>{{ $cerveza->Color }}</strong>
                  </div>
                  <div class="data-group">
                      <p>Vol. Alc.</p>
                      <strong>{{ $cerveza->Alcohol }}%</strong>
                  </div>
                  <div class="data-group">
                       <p>Estilo</p>
                       <strong>{{ $cerveza->Estilo }}</strong>
                  </div>
                  <div class="data-group">
                        <p>Sabor</p>
                       <strong>{{ $cerveza->Sabor }}</strong>
                  </div>
                  <div class="data-group">
                        <p>Temperatura</p>
                       <strong>{{ $cerveza->Temperatura }}°C</strong>
                  </div>  
               </div>
           </div>
           <div class="chela-desc">
               <p>{{ $cerveza->Descripcion }}.</p>
           </div>
       </div>
   </div>    
   <?php $cont2 ++; ?>
   @endforeach
</section>
</body>
</html>

@endsection