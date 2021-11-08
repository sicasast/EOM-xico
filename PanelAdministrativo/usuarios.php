<?php 
	$host="localhost";
	$usuario="root";
	$contra="";
	$bd="usuarios";
	$conexion=mysqli_connect($host,$usuario,$contra,$bd);
	if (!$conexion){
		echo "ocurrio un error al intentar conectar a la 
		base de datos";
	}
	else{    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Administrador de contenido</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-dark" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-dark text-white">EO Mexico / Riviera Maya</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="inicio.php">Pantalla Inicio</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="eventos.php">Pantalla Eventos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="usuarios.php">Usuarios</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-info" id="sidebarToggle">Mostrar / Ocultar Contenido</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link text-white" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                   
    <!--cuerpo de toda la pagina-->
		  <form method="POST" action="#">
		  <table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Correo Electronico</th>
		      <th scope="col">Fotografia</th>
		      <th scope="col">Seleccionar</th>		      
		    </tr>
		  </thead>
		  <tbody>
	<?php           
		$consulta1=mysqli_query($conexion, "SELECT *FROM datos");
		while($v=mysqli_fetch_assoc($consulta1)){
			$campo=$v['id'];
			$campo=$v['nombre'];
			$campo=$v['correo'];
	?>
	<?php
	$consulta2="SELECT *FROM datos";
          $a=$conexion->query($consulta2);
          while ($datos=$a->fetch_object()) {
            $imagen = base64_encode($datos->foto=$v['foto']);
      }
	mysqli_free_result($a);
    ?>  
		    <tr>
		      <th scope="row"><?php echo $v['id'];?></th>
		      <td><?php  echo $v['nombre'];?></td>
		      <td><?php  echo $v['correo'];?></td>
		      <td><img class="img-circle" src="data:image/jpeg; base64 ,<?php echo $imagen ?>" height="50rem" width="50rem"></td>
		      <td><input type="checkbox" name="eliminar[]" value="<?php echo $v['id'];  ?>"></td>		      
		    </tr>
	<?php
	   }
	mysqli_free_result($consulta1);
	?>
		  </tbody>
		  </table>
		  <input type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalagregar" value="Agregar">
		  <input type="submit" name="enviar2" value="Modificar" class="btn btn-warning">
		  <input type="submit" name="enviar3" value="Eliminar" class="btn btn-danger" onclick="reload()">
		  </form>
		
	<!--modal de crud para agregar un nuevo usuario-->	
		<div class="modal fade" id="modalagregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">EO México</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <form method="POST" enctype="multipart/form-data">
				  <div class="mb-3">
				    <label for="nombre" class="form-label">Nombre Completo</label>
				    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" required>
				  </div>
				  <div class="mb-3">
				    <label for="correo" class="form-label">Correo Electrónico</label>
				    <input type="email" class="form-control" name="correo" required>
				  </div>
				  <div class="mb-3">
				    <label for="imagen" class="form-label">Imágen De Perfil</label>
				    <input type="file" class="form-control" name="imagen">
				  </div>				  
				  <button type="submit" name="datos" class="btn btn-success">Agregar</button>
				</form>
		      </div>
		    </div>
		  </div>
		</div>

    <!--modal de crud para agregar un nuevo usuario-->	


		<!--Logica para carga de datos al sistema-->
		<?php	
		if(isset($_POST['datos'])){ 
		$var1=$_POST['nombre'];
		$var2=$_POST['correo'];
        $var3=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $insertar=mysqli_query($conexion,"INSERT INTO datos (id,nombre,correo,foto) VALUES (0,'$var1','$var2','$var3')");
        echo "<script>
        location.href='usuarios.php';
        </script>";
        mysqli_free_result($insertar);
        }
		?>
		<!--Logica para carga de datos al sistema-->

	    <!--Logica para dar de baja en el  sistema-->
	    <?php   
	    if(isset($_POST["enviar3"])){
	    	if (empty($_POST["eliminar"])){
	    		echo "<script>
	    	    alert('No se seleccionó registro alguno');
	    	    location.href='usuarios.php';
	    		</script>";
	    	}
	    	else{
	    		foreach ($_POST["eliminar"] as $id_borrar ) {
	    		   $consulta3="DELETE FROM datos WHERE id='$id_borrar'";
	    		   $consulta4=mysqli_query($conexion,$consulta3);
	    		   echo "<script>
	    	    alert('Registro(s) eliminados con exito');
	    	    location.href='usuarios.php';
	    		</script>";
	    		}
	    	}
	    }

	    ?>
	    <!--Logica para dar de baja en el  sistema-->

    <!--cuerpo de toda la pagina-->

                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php  }
mysqli_close($conexion);
 ?>