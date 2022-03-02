<h1>Articulo</h1>

<form action="<?=base_url?>Articulos/insertArticulo" method="POST">
  <label for="nombre">Nombre del Articulo</label>
  <input type="text" name="nombre" id="nombre">
  <label for="Valor">Valor del Articulo</label>
  <input type="number" name="valor" id="valor">
  <button type="submit">Guardar</button>
</form>