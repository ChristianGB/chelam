@include('header')
<div id="perfil">
	<img src="img/user1.jpg">
</div>

<div id="data_user">
	<h5>yelow melo</h5>
	<hr>
	<h2>Datos de Compra</h2>
	<p>Cambiar contraseña</p>
</div>
<div id="historial_com">
	<div id="h1">
		<h1>Historial de Compras</h1>
	<hr>
	</div>
	<table>
		<tr>
			<th>Fecha</th>
			<th>Producto</th>
			<th>Costo</th>
			<th>Estatus</th>
		</tr>
	</table>
	<hr>
	<table>
		<tr>
			<th>01/09/2015</th>
			<th>
				<ul>
					<li>Tzotzil </li>
					<li>Tzotzil</li>
					<li>Tzotzil</li>
					<li>Tzotzil</li>
				</ul>
			</th>
			<th>$ 390.00</th>
			<th>Entregado</th>
		</tr>
		</table>
		<hr>
		<table>
		<tr>
			<th>05/09/2015</th>
			<th>
				<ul>
					<li>ChelaPack</li>
				</ul>
			</th>
			<th>$ 490.00</th>
			<th>Pendiente</th>
		</tr>
	</table>
</div>

@include('footer')