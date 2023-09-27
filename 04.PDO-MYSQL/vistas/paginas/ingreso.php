<div class="d-flex justify-content-center text-center">


  <form class="p-5 bg-light" method="post">


      <div class="form-group">
        <label for="email">Correo</label>

        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa-solid fa-envelope"></i>
            </span>
          </div>

            <input type="email" class="form-control" placeholder="Escribe tu correo" id="email" name="logEmail">

          </div>

      </div>

      <div class="form-group">
        <label for="pwd">Contraseña</label>

        <div class="input-group mb-3">

        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa-solid fa-lock"></i>
          </span>
        </div>

          <input type="password" class="form-control" placeholder="Escribe tu contraseña" id="pwd" name="logPassword">

        </div>

      </div>

      <?php

      $ingreso = new formControlador();
      $ingreso -> ctrIngreso();

      ?>

      <button type="submit" class="btn btn-primary my-4 px-5">Ingresar</button>

  </form>

</div>