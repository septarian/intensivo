<?php

class formControlador
{

    static public function ctrRegistro()
    {

        if (isset($_POST['name'])) {

            $tabla = "registros";

            $datos = array(
                "nombre" => $_POST['name'],
                "email" => $_POST['email'],
                "password" => $_POST['password']
            );

            $respuesta = form_modelo::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }


    static public function ctrSeleccionarRegistros()
    {

        $tabla = "registros";

        $respuesta = form_modelo::mdlSeleccionarRegistros($tabla, null, null);

        return $respuesta;
    }

    public function ctrIngreso()
    {

        if (isset($_POST["logEmail"])) {

            $tabla = "registros";
            $item = "email";
            $valor = $_POST["logEmail"];

            $respuesta = form_modelo::mdlSeleccionarRegistros($tabla, $item, $valor);

            if ($respuesta["email"] == $_POST["logEmail"] && $respuesta["password"] == $_POST["logPassword"]) {

                $_SESSION["validarIngreso"] = "ok";

                echo '<script> 
        
                if( window.history.replaceState ) {
    
                window.history.replaceState( null, null, window.location.href );
    
                }
            
                window.location = "index.php?pagina=inicio"

                </script>';
            } else {

                echo '<script> 
        
                    if( window.history.replaceState ) {
        
                    window.history.replaceState( null, null, window.location.href );
        
                    }
                
                    </script>';

                echo '<div class="alert alert-danger"> Error al ingresar al sistema, el email o la contraseña no coinciden </div>';
            }
        }
    }
}
