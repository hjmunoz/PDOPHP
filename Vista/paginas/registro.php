<div class="d-flex justify-content-center text-center">
    <form class="p-5 m-5 bg-light" action="" method="POST">
        <div class="mb-3 mt-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el Nombre" name="nombre">
            </div>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" placeholder="Ingrese el Email" name="email">
            </div>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
                <input type="password" class="form-control" id="pwd" placeholder="Ingrese la Contraseña" name="password">
            </div>
        </div>
        <?php
        
        // if (isset($_POST['nombre'])) { ->esto es lo mismo que esto $registro = new ControladorFormularios();
                                                                    //$registro->Ctrregistrar(); pero usando poo.
            
        //     echo $_POST['nombre'];

        // }

        /*Esta es la forma en que se instancia la clase de un metodo no estatico*/
        // $registro = new ControladorFormularios();
        // $registro->Ctrregistrar();
        /*Esta es la forma en que se instancia la clase de un metodo no estatico*/


        /*Esta es la forma en que se instancia la clase de un metodo estatico*/
        
        $registro = ControladorFormularios::Ctrregistrar();

            if ($registro=="Ok") {

                echo '<script>

                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }

                </script>';
                
                echo '<div class="alert alert-success">El usuario ha sido registrado</div>';

            }

        /*Esta es la forma en que se instancia la clase de un metodo estatico*/
        ?>
        <button type="submit" class="btn btn-primary text-center">Enviar</button>
    </form>
</div>