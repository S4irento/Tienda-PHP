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