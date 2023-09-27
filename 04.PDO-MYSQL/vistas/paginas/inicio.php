<?php

if (!isset($_SESSION["validarIngreso"])){

  echo '<script>window.location = "index.php?pagina=ingreso"</script>';

  return;

  
}
else
{

  if ($_SESSION["validarIngreso"] != "ok"){

    echo '<script>window.location = "index.php?pagina=ingreso"</script>';

      return;
  }

}

$usuarios = formControlador::ctrSeleccionarRegistros();

?>
<table class="table">
  <thead>

    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Fecha</th>
      <th>Acciones</th>
    </tr>

  </thead>

  <tbody>

    <?php foreach ($usuarios as $key => $value) : ?>

      <tr>
        <td><?php echo ($key + 1); ?></td>
        <td><?php echo $value["nombre"]; ?></td>
        <td><?php echo $value["email"]; ?></td>
        <td><?php echo $value["fecha"]; ?></td>
        <td>

          <div class="btn-group">
            <button class="btn btn-warning"> <i class="fa-solid fa-pencil"></i> </button>
            <button class="btn btn-danger"> <i class="fa-regular fa-trash-can"></i> </button>
          </div>

        </td>
      </tr>

    <?php endforeach ?>



  </tbody>
</table>