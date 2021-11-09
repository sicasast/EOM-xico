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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="alianzas.php">Alianzas</a>
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
				<br>
				<h6 class="text-muted">Sección Eventos</h6>
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#evento1">
				Agregar Evento	
				</button>
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#evento2">
				Modificar Evento
				</button>
			    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#evento3">
				Eliminar Evento
				</button>			
				<br>
				<div class="card-group">
                <?php
                $consulta_eventos=mysqli_query($conexion, "SELECT *FROM eventos WHERE locacion='cancun'");
                while($ciclo_eventos=mysqli_fetch_assoc($consulta_eventos)) {
                	$campo_eventos0=$ciclo_eventos['id'];
                	$campo_eventos0=$ciclo_eventos['titulo'];
                	$campo_eventos0=$ciclo_eventos['descripcion'];

                ?>
                <?php
			  $consulta2="SELECT imagen FROM eventos";
			  $a=$conexion->query($consulta2);
			  while ($datos=$a->fetch_object()) {
				$imagen = base64_encode($datos->foto=$ciclo_eventos['imagen']);
		  	    }
				?>
					<div class="py-5">
						<div class="container">
						<div class="row hidden-md-up">
							<div class="col-md-12">
							<div class="card">
								<div class="card-block">
								<img src="data:image/jpeg; base64 ,<?php echo $imagen ?>" class="card-img-top" alt="..." height="300px" width="700px">
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'ID Evento:' . ' ' . $ciclo_eventos['id'];  ?></h6>
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'Nombre De Evento:' . ' ' . $ciclo_eventos['titulo'];  ?></h6>
								<p class="card-text p-y-1"><?php  echo 'Descripción De Evento: '. $ciclo_eventos['descripcion'];  ?></p>
							</div>
							</div>
							</div>
						</div>
						<br>
						</div>
					</div>
                <?php
                  }
                ?>
				</div>	
				<hr>
				<!--seccion modales-->
	<!-- Modal para agregar evento -->
			<div class="modal fade" id="evento1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nuevo Evento</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <form method="POST" enctype="multipart/form-data">
			        	<input type="file" name="img_evento" class="form-control">
			        	<br>
			        	<input type="text" name="titulo" class="form-control" placeholder="Titulo" required>
			        	<br>
			        	<input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required>
			        	<br>
			        	<hr>
			        	<input type="submit" name="cargar_evento" class="btn btn-success" value="Cargar">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<?php    
			if(isset($_POST['cargar_evento'])){ 
			$img_eve=addslashes(file_get_contents($_FILES['img_evento'] ['tmp_name']));
			$tit_eve=$_POST['titulo'];
			$des_eve=$_POST['descripcion'];
			$cons_eventos=mysqli_query($conexion, "INSERT INTO eventos VALUES (0,'$tit_eve','$des_eve','$img_eve','cancun')");
			if($cons_eventos){
				echo "<script> alert('La carga de archivos  se realizo con exito');
				location.href='eventos.php';
				   </script>";
			}
			else{
				echo "<script> alert('La carga de archivos no se realizo con exito');
				location.href='eventos.php';
				   </script>";
			}

		    }
			?>
		<!-- Modal para agregar evento -->

		<!-- Modal para modificar evento -->
			<div class="modal fade" id="evento2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modificar  Evento</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<label class="form-control">Selecciona ID de Evento</label>
			      	<br>
			        <form method="POST" enctype="multipart/form-data">
			        	<select name="valor">
			        	<?php
			        	$cons_portada_eve=mysqli_query($conexion,"SELECT id FROM eventos");
			        	while($r_eventos=mysqli_fetch_assoc($cons_portada_eve)){ 
			        		$i_eventos=$r_eventos['id'];
			        	?>
			        	<option class="form-control"> <?php  echo $i_eventos; ?> </option>
			        <?php 
			          }
			        ?>
			        </select>
			        <input type="text" name="texto1" class="form-control" placeholder="Titulo">
			        <br>
			        <input type="text" name="texto2" class="form-control" placeholder="Descripcion">
			        <br>
			        <input type="file" name="imagennueva" class="form-control">
			        <input type="submit" name="modificar_evento" value="Modificar" class="btn btn-warning">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<?php    
			if(isset($_POST['modificar_evento'])){ 
			$id_seleccion=$_POST['valor'];	
			$img_eve=addslashes(file_get_contents($_FILES['imagennueva'] ['tmp_name']));
			$tit_eve=$_POST['texto1'];
			$des_eve=$_POST['texto2'];
			$cons_eventos=mysqli_query($conexion, "UPDATE eventos SET titulo='$tit_eve', descripcion='$des_eve', imagen='$img_eve', locacion='cancun' WHERE id='$id_seleccion'");
			if($cons_eventos){
				echo "<script> alert('La carga de archivos  se realizo con exito');
				location.href='eventos.php';
				   </script>";
			}
			else{
				echo "<script> alert('La carga de archivos no se realizo con exito');
				location.href='eventos.php';
				   </script>";
			}

		    }
			?>
		<!-- Modal para modificar evento -->
<!-- Modal para eliminar evento -->
			<div class="modal fade" id="evento3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Eliminar Evento</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<label class="form-control">Selecciona ID de Evento</label>
			      	<br>
			        <form method="POST" enctype="multipart/form-data">
			        	<select name="eliminar_evento">
			        	<?php
			        	$id_event=mysqli_query($conexion,"SELECT id FROM eventos");
			        	while($r2_evento=mysqli_fetch_assoc($id_event)){ 
			        		$i2_evento=$r2_evento['id'];
			        	?>
			        	<option class="form-control"> <?php  echo $i2_evento; ?> </option>
			        <?php 
			          }
			        ?>
			        </select>
			         <input type="submit" name="el_evento" value="Eliminar" class="btn btn-danger">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<?php
				if(isset($_POST['el_evento'])){
						$ke_evento=$_POST['eliminar_evento'];
						$kcon2_evento=mysqli_query($conexion,"DELETE FROM eventos WHERE id = '$ke_evento';");
						if($kcon2_evento){
							echo "<script>
							location.href='eventos.php';
							</script>";
						}
					}


			?>
		<!-- Modal para eliminar banner -->


				<!--seccion modales-->           
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php  
}
mysqli_free_result($a);
mysqli_free_result($consulta_eventos);
mysqli_free_result($id_event);
mysqli_close($conexion);
 ?>