@extends('header')
@section('title', 'Mayoreo')
@section('page-css')
<link rel="stylesheet" href="css/mayoreo-styles.css"> 
@endsection
@section('content')
<section class="page-cover">
        <h2>Sabemos que amas lo artesanal</h2>
        <p>Por eso tenemos venta al mayoreo, para saciar tu sed de las mejores cervezas.</p>
    </section>    
<section class="mayoreo-info">
        <p>La compra minima para considerarse mayoreo es de 3 cartones de cerveza, es decir, 72.</p> <br>
        <p>Si deseas comprar nuestras cervezas por mayoreo, mandanos un correo a <strong>ventas@chelam.com</strong> o marcanos al telefono <strong>(044-961-278-18-92)</strong> con la siguiente informacion:</p>
        <div class="mayoreo-data">
            <p>Cantidad de cervezas</p> <br>
            <p>Especificar cuantas cervezas de cada tipo</p>
        </div>
        <p>Al hacer tu pedido se te enviará un correo donde incluieremos la cantidad de cervezas y el monto a pagar con el descuento de mayoreo desglozado y la referencia de pago.</p>
</section>
</body>
</html>
@endsection
