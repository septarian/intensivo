<div class="d-flex justify-content-center text-center">


  <form class="p-5 bg-light" method="post">

      <div class="form-group">
        <label for="nombre">Nombre</label>

        <div class="input-group mb-3">

            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa-solid fa-user"></i>
              </span>
            </div>

            <input type="text" class="form-control" placeholder="Escribe tu nombre" id="nombre" name="name">

        </div>

      </div>

      <div class="form-group">
        <label for="email">Correo</label>

        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa-solid fa-envelope"></i>
            </span>
          </div>

            <input type="email" class="form-control" placeholder="Escribe tu correo" id="email" name="email">

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

          <input type="password" class="form-control" placeholder="Escribe tu contraseña" id="pwd" name="password">

        </div>

      </div>

      <?php

      ##########################################################
      #FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO NO ESTATICO
      ##########################################################

       // $registro = new formControlador();
       // $registro -> ctrRegistro();

      ##########################################################
      #FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO ESTATICO
      ##########################################################

      $registro = formControlador::ctrRegistro();

      if($registro == "ok"){

        echo '<script> 
        
          if( window.history.replaceState ) {

            window.history.replaceState( null, null, window.location.href );

          }
        
        </script>';

        echo '<div class="alert alert-success">El usuario a sido registrado</div>';

      }

      ?>

      <button type="submit" class="btn btn-primary my-4 px-5">Enviar</button>

  </form>

</div>