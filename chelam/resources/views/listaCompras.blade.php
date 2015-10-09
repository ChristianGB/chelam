@include('header') 

<div id="compras">
    <h1>Lista de compras</h1>
  <table class="table table-condensed" id="lista">
    <thead>
      <tr>
        <th>Cerveza Tzotzil</th>
        <td>$45</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Cerveza Tzotzil</th>
        <td>$45</td>
      </tr>
      <tr>
        <th>Cerveza</th>
        <td>$45</td>
      </tr>
      <tr>
        <th>Cerveza Tzotzil</th>
        <td>$45</td>
      </tr>
    </tbody>
    <tfoot>
    <tr>
        <th>Total</th>
        <td>$450</td>
      </tr>
    </tfoot>
  </table>

  <a href="#service" id="confirmar_pedido" class="btn btn-skin btn-scroll">Confirmar pedido</a>
</div>

	
@include('footer')