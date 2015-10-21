@extends('header')

@section('title', 'Chelas')
@section('page-css')
<link rel="stylesheet" href="css/chelas-styles.css"> 
<link rel="stylesheet" href="css/chelas-queries.css">
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
                    <a href="" class="add-to-cart">Agregar al carrito</a>
                </div>
            </div>
        </div>
        
        <div class="chela-container">
            <div class="chela-container-img">
              <img src="media/beers/1.png" alt="chela">
            </div>            
            <div class="chela-list-info">
                <header class="chela-list-info-header">
                    <h2>Apophis<span></span></h2>
                    <p>Tipo</p>
                    <a href="" class="more-info">?</a>
                </header>
                <div class="chela-list-info-content">
                    <p class="price">$30.00</p>
                    <p class="volumen">600 ml</p>
                    <a href="" class="add-to-cart">Agregar al carrito</a>
                </div>
            </div>
        </div>
        
        <div class="chela-container">
            <div class="chela-container-img">
              <img src="media/beers/2.png" alt="chela">
            </div>            
            <div class="chela-list-info">
                <header class="chela-list-info-header">
                    <h2>Trepadora<span></span></h2>
                    <p>Tipo</p>
                    <a href="" class="more-info">?</a>
                </header>
                <div class="chela-list-info-content">
                    <p class="price">$30.00</p>
                    <p class="volumen">600 ml</p>
                    <a href="" class="add-to-cart">Agregar al carrito</a>
                </div>
            </div>
        </div>
        
        <div class="chela-container">
            <div class="chela-container-img">
              <img src="media/beers/3.png" alt="chela">
            </div>            
            <div class="chela-list-info">
                <header class="chela-list-info-header">
                    <h2>Trepadora <span>Red Ale</span></h2>
                    <p>Tipo</p>
                    <a href="" class="more-info">?</a>
                </header>
                <div class="chela-list-info-content">
                    <p class="price">$30.00</p>
                    <p class="volumen">600 ml</p>
                    <a href="" class="add-to-cart">Agregar al carrito</a>
                </div>
            </div>
        </div>
        
        <div class="chela-container">
            <div class="chela-container-img">
              <img src="media/beers/4.png" alt="chela">
            </div>            
            <div class="chela-list-info">
                <header class="chela-list-info-header">
                    <h2>Tzotzil<span></span></h2>
                    <p>Ambar</p>
                    <a href="" class="more-info">?</a>
                </header>
                <div class="chela-list-info-content">
                    <p class="price">$30.00</p>
                    <p class="volumen">600 ml</p>
                    <a href="" class="add-to-cart">Agregar al carrito</a>
                </div>
            </div>
        </div>
        
        <div class="chela-container">
            <div class="chela-container-img">
              <img src="media/beers/5.png" alt="chela">
            </div>            
            <div class="chela-list-info">
                <header class="chela-list-info-header">
                    <h2>Tzotzil<span></span></h2>
                    <p>Lager</p>
                    <a href="" class="more-info">?</a>
                </header>
                <div class="chela-list-info-content">
                    <p class="price">$30.00</p>
                    <p class="volumen">600 ml</p>
                    <a href="" class="add-to-cart">Agregar al carrito</a>
                </div>
            </div>
        </div>
    
    </div>    
    
     
<!--          CHELA MODAL PARA MOSTRAR LA INFORMACIÓN DE LAS SHELAS-->
   <div class="chela-modal">                              
       <div class="chela-modal-container">
           <div class="chela-header">
               <h2>Ceveza <span>Melano</span></h2>
               <a href="" class="exit-modal">Cerrar</a>
           </div>
           <div class="chela-info">
               <div class="chela-info-img">
                 <img src="media/beers/3.png" alt="chela">
               </div>               
               <div class="chela-data">
                  <div class="data-group">
                      <p>Estado</p>
                      <strong>Chiapas</strong>
                  </div>
                  <div class="data-group">
                      <p>Presentación</p>
                      <strong>355 ml</strong>
                  </div>
                  <div class="data-group">
                      <p>Color</p>
                      <strong>Oscura</strong>
                  </div>
                  <div class="data-group">
                      <p>Vol. Alc.</p>
                      <strong>5.1%</strong>
                  </div>
                  <div class="data-group">
                       <p>Estilo</p>
                       <strong>Dunkelwizen</strong>
                  </div>
                  <div class="data-group">
                        <p>Sabor</p>
                       <strong>Amargo</strong>
                  </div>
                  <div class="data-group">
                        <p>Temperatura</p>
                       <strong>4 a 7°C</strong>
                  </div>  
               </div>
           </div>
           <div class="chela-desc">
               <p>Digamos que esta es la chela del mundo aunque no lo es, sólo para ver si vende más</p>
           </div>
       </div>
   </div>    
</section>
</body>
</html>

@endsection