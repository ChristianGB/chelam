@extends('header')

@section('title', 'UsuarioX')
@section('page-css')
<link rel="stylesheet" href="css/user-styles.css">
<link rel="stylesheet" href="css/user-queries.css">
@endsection

@section('content')
<nav class="user-nav">
        <a href="" class="user-active" id="toPerfil">Perfil</a>
        <a href="" id="toHistorial">Historial de Compras</a>
    </nav>
    <section class="user-panel">
        <section class="user-profile">
            <div class="user-header">
               <div class="user-img">                   
                    <img src="media/icons/user.jpg" alt="Image">
               </div>
               <h2>Usuario X</h2>
               <a href="" id="edit-data">Editar mis datos</a>
            </div>
            <div class="user-data">                
                <h2 class="data-title">Datos personales</h2>
                <div class="my-data">
                    <div class="data-group">
                        <p class="label">Nombre</p>
                        <p class="data">Usuario X</p>
                    </div>
                    <div class="data-group">
                        <p class="label">Email</p>
                        <p class="data">correo@correo.es</p>
                    </div>
                    <div class="data-group">
                        <p class="label">Celular</p>
                        <p class="data">XXX XXX XX XX</p>
                    </div>
                    <div class="data-group">
                        <p class="label">Cumpleaños</p>
                        <p class="data">dd/mm/aaa</p>
                    </div>
                    <div class="data-group">
                        <p class="label">Género</p>
                        <p class="data">Indefinido</p>
                    </div>
                </div>
                <h2 class="data-title">Direcciones de envío</h2>
                <p class="send-dir"><strong>Principal <br></strong>Av. de los Melocotones secos. <br>
                Entre tejeringo del chico y te pellizco el grande</p>
                <p class="send-dir"><strong>Secundaria <br></strong>Av. de los Melocotones mojados. <br>
                Entre tejeringo del chico y te pellizco el grande</p>
            </div>
        </section>
        
        <section class="user-historial">
            <header class="user-historial-header hist-row">
                <h3 class="hist-col">Fecha</h3>
                <h3 class="hist-col">Productos</h3>
                <h3 class="hist-col">Costo Total</h3>
                <h3 class="hist-col">Estatus</h3>
            </header>
            
<!--            CADA HIST-ELEM ES UNA FILA DE PRODUCTOS-->
            
            <div class="hist-row hist-elem">
                <div class="hist-fecha hist-col"> 15/40/2015 </div>                
                <div class="hist-productos hist-col">
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Tzotzil Claro de Luna</span>
                        <span class="producto-info">3x $40.00</span>
                    </div>
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Amnesia Nocturna Menta</span>
                        <span class="producto-info">1x $55.00</span>
                    </div>
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Raiz Cuadrada de 30</span>
                        <span class="producto-info">6x $33.00</span>
                    </div>
                </div>                
                <div class="hist-costo hist-col"> $600.00 </div>
                <div class="hist-estuatus hist-col"> En espera de pago </div>
            </div>
            
            <div class="hist-row hist-elem">
                <div class="hist-fecha hist-col"> 15/40/2015 </div>                
                <div class="hist-productos hist-col">
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Tzotzil Clara</span>
                        <span class="producto-info">3x $45.00</span>
                    </div>
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Cerveza de Toro</span>
                        <span class="producto-info">7x $15.00</span>
                    </div>
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Tzotzil Menta</span>
                        <span class="producto-info">3x $60.00</span>
                    </div>
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Amnesia Nocturna Menta</span>
                        <span class="producto-info">1x $55.00</span>
                    </div>
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Corona Modelo</span>
                        <span class="producto-info">13x $35.00</span>
                    </div>
                    <div class="hist-producto-group">
                        <span class="producto-nombre">Hielo Azul Marino</span>
                        <span class="producto-info">5x $35.00</span>
                    </div>
                </div>                
                <div class="hist-costo hist-col"> $1500.00 </div>
                <div class="hist-estuatus hist-col"> Atendido </div>
            </div>
<!--            CADA HIST-ELEM ES UNA FILA DE PRODUCTOS-->
        </section>
    </section>   
</body>
</html>
@endsection