<h1>Pedidos</h1>

<form action="<?base_url?>Pedidos/insertPedidos">
  <label for="cliente">Nombre del cliente</label>
  <input type="text" name="cliente" id="cliente">
  <label for="articulo">Articulo</label>
  <select name="articulo" id="articulo">
    <?php while($articulo = $articulos->fetch_object()): ?>
      <option value="<?= $articulo->id ?>"><?= $articulo->nombre?></option>
    <?php endwhile; ?>
  </select>
  <label for="cantidad">Cantidad</label>
  <input type="number" name="cantidad" id="cantidad">
  <label for="ciudad">Ciudad</label>
  <input type="text" name="ciudad" id="ciudad">
  <label for="direccion">Dirección</label>
  <input type="text" name="direccion" id="direccion">

  <button type="submit">Guardar Pedido</button>
</form>
<table>
  <thead>
    <tr>
      <td>Cliente</td>
      <td>Articulo</td>
      <td>Catatidad</td>
      <td>Valor total</td>
      <td>Ciudad</td>
      <td>Dirección</td>
      <td>Fecha</td>
    </tr>
  </thead>
  <tbody>
    <?php while($pedido = $pedidos->fecth_object()): ?>
      <tr>
        <td><?= $pedido->nombre_cliente ?></td>
        <td><?= $pedido->articulo ?></td>
        <td><?= $pedido->cantidad ?></td>
        <td><?= $pedido->valor_total ?></td>
        <td><?= $pedido->ciudad ?></td>
        <td><?= $pedido->direccion ?></td>
        <td><?= $pedido->fecha ?></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>