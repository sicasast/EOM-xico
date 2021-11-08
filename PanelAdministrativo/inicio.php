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
                                <li class="nav-item active"><a class="nav-link text-white" href="inicio.php">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="#!">Visitar Pagina</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
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
				<h6 class="text-muted">Sección Banners</h6>
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#banner">
				Agregar Banner
				</button>
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modbanner">
				Modificar Banner
				</button>
			    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#elbanner">
				Eliminar Banner
				</button>			
				<br>
				<div class="card-group">
    <!--cuerpo de toda la pagina-->
	    <!--banners de la pagina de administracion-->
			<?php
			  $consulta1=mysqli_query($conexion,"SELECT *FROM banners");
			  while($c=mysqli_fetch_assoc($consulta1)){
               $campo=$c['titulo'];
               $campo=$c['descripcion'];
               $campo=$c['id'];
			?>
			<?php
			  $consulta2="SELECT *FROM banners";
			  $a=$conexion->query($consulta2);
			  while ($datos=$a->fetch_object()) {
				$imagen = base64_encode($datos->foto=$c['imagen']);
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
									<?php  echo 'ID Banner:' . ' ' . $c['id'];  ?></h6>
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'Nombre De Banner:' . ' ' . $c['titulo'];  ?></h6>
								<p class="card-text p-y-1"><?php  echo 'Descripción De Banner: '. $c['descripcion'];  ?></p>
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
		<!--banners de la pagina de administracion-->
    <!--cuerpo de toda la pagina-->
				</div>	
				<hr>
				<h6 class="text-muted">Seccion Noticia Principal</h6>
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#noticiaprincipal">
				Agregar Noticia
				</button>
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modnoticiaprincipal">
				Modificar Noticia
				</button>
			    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#elnoticiaprincipal">
				Eliminar Noticia
				</button>
				<br>
				<div class="card-group">
    <!--cuerpo de toda la pagina-->
	    <!--noticia principal de la pagina de administracion-->
			<?php
			  $consultanotp1=mysqli_query($conexion,"SELECT *FROM noticia_principal");
			  while($c1=mysqli_fetch_assoc($consultanotp1)){
               $campo1=$c1['titulo'];
               $campo1=$c1['descripcion'];
               $campo1=$c1['id'];
			?>
			<?php
			  $consulta2notp="SELECT *FROM noticia_principal";
			  $a2=$conexion->query($consulta2notp);
			  while ($datos=$a2->fetch_object()) {
				$imagen2 = base64_encode($datos->imagen=$c1['imagen']);
		      }
			?>
					<div class="py-5">
						<div class="container">
						<div class="row hidden-md-up">
							<div class="col-md-12">
							<div class="card">
								<div class="card-block">
								<img src="data:image/jpeg; base64 ,<?php echo $imagen2 ?>" class="card-img-top" alt="..." height="300px" width="700px">
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'ID Noticia:' . ' ' . $c1['id'];  ?></h6>
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'Nombre De Noticia:' . ' ' . $c1['titulo'];  ?></h6>
								<p class="card-text p-y-1"><?php  echo 'Descripción De Noticia: '. $c1['descripcion'];  ?></p>
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
		<!--noticia principal de la pagina de administracion-->
    <!--cuerpo de  la pagina-->
				</div>
			    <hr>
				<h6 class="text-muted">Seccion Portadas Eventos</h6>
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#portadaevento">
				Agregar Evento
				</button>
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modportadaeve">
				Modificar Evento
				</button>
			    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#elportadaeve">
				Eliminar Evento
				</button>
				<br>
				<div class="card-group">
    <!--cuerpo de toda la pagina-->
	    <!--portadas eventos de la pagina de administracion-->
			<?php
			  $consultaportada1=mysqli_query($conexion,"SELECT *FROM portadas_eventos");
			  while($c0=mysqli_fetch_assoc($consultaportada1)){
               $campo0=$c0['titulo'];
               $campo0=$c0['descripcion'];
               $campo0=$c0['id'];
			?>
			<?php
			  $consultaportada2="SELECT *FROM portadas_eventos";
			  $a0=$conexion->query($consultaportada2);
			  while ($datos0=$a0->fetch_object()) {
				$imagen0 = base64_encode($datos0->imagen=$c0['imagen']);
		      }
			?>
					<div class="py-5">
						<div class="container">
						<div class="row hidden-md-up">
							<div class="col-md-12">
							<div class="card">
								<div class="card-block">
								<img src="data:image/jpeg; base64 ,<?php echo $imagen0 ?>" class="card-img-top" alt="..." height="300px" width="700px">
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'ID Noticia:' . ' ' . $c0['id'];  ?></h6>
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'Nombre De Noticia:' . ' ' . $c0['titulo'];  ?></h6>
								<p class="card-text p-y-1"><?php  echo 'Descripción De Noticia: '. $c0['descripcion'];  ?></p>
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
		<!--noticia principal de la pagina de administracion-->
    <!--cuerpo de toda la pagina-->
				</div>	
				<hr>
				<h6 class="text-muted">Seccion Proximos Eventos</h6>
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#portadaevento">
				Agregar Proximo Evento
				</button>
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modportadaeve">
				Modificar Proximo Evento
				</button>
			    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#elportadaeve">
				Eliminar Proximo Evento
				</button>
				<br>
				<div class="card-group">
    <!--cuerpo de toda la pagina-->
	    <!--portadas eventos de la pagina de administracion-->
			<?php
			  $consultaportada1=mysqli_query($conexion,"SELECT *FROM portadas_eventos");
			  while($c0=mysqli_fetch_assoc($consultaportada1)){
               $campo0=$c0['titulo'];
               $campo0=$c0['descripcion'];
               $campo0=$c0['id'];
			?>
			<?php
			  $consultaportada2="SELECT *FROM portadas_eventos";
			  $a0=$conexion->query($consultaportada2);
			  while ($datos0=$a0->fetch_object()) {
				$imagen0 = base64_encode($datos0->imagen=$c0['imagen']);
		      }
			?>
					<div class="py-5">
						<div class="container">
						<div class="row hidden-md-up">
							<div class="col-md-12">
							<div class="card">
								<div class="card-block">
								<img src="data:image/jpeg; base64 ,<?php echo $imagen0 ?>" class="card-img-top" alt="..." height="300px" width="700px">
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'ID Noticia:' . ' ' . $c0['id'];  ?></h6>
								<h6 class="card-subtitle text-muted">
									<br>
									<?php  echo 'Nombre De Noticia:' . ' ' . $c0['titulo'];  ?></h6>
								<p class="card-text p-y-1"><?php  echo 'Descripción De Noticia: '. $c0['descripcion'];  ?></p>
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
		<!--noticia principal de la pagina de administracion-->
    <!--cuerpo de toda la pagina-->
				</div>	
				<!-- Modal para agregar evento -->
			<div class="modal fade" id="portadaevento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nueva Portada Evento</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <form method="POST" enctype="multipart/form-data">
			        	<input type="file" name="img" class="form-control">
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
			$img_eve=addslashes(file_get_contents($_FILES['img'] ['tmp_name']));
			$tit_eve=$_POST['titulo'];
			$des_eve=$_POST['descripcion'];
			$cons_eventos=mysqli_query($conexion, "INSERT INTO portadas_eventos VALUES (0,'$tit_eve','$des_eve','$img_eve','cancun')");
			if($cons_eventos){
				echo "<script> alert('La carga de archivos  se realizo con exito');
				location.href='inicio.php';
				   </script>";
			}
			else{
				echo "<script> alert('La carga de archivos no se realizo con exito');
				location.href='inicio.php';
				   </script>";
			}

		    }
			?>
		<!-- Modal para agregar evento -->		
		<!-- Modal para agregar modificar Evento -->
			<div class="modal fade" id="modportadaeve" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modificar Portada Evento</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<label class="form-control">Selecciona ID de Evento</label>
			      	<br>
			        <form method="POST" enctype="multipart/form-data">
			        	<select name="valor">
			        	<?php
			        	$cons_portada_eve=mysqli_query($conexion,"SELECT id FROM portadas_eventos");
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
			$cons_eventos=mysqli_query($conexion, "UPDATE portadas_eventos SET titulo='$tit_eve', descripcion='$des_eve', imagen='$img_eve', locacion='cancun' WHERE id='$id_seleccion'");
			if($cons_eventos){
				echo "<script> alert('La carga de archivos  se realizo con exito');
				location.href='inicio.php';
				   </script>";
			}
			else{
				echo "<script> alert('La carga de archivos no se realizo con exito');
				location.href='inicio.php';
				   </script>";
			}

		    }
			?>
		<!-- Modal para eliminar evento -->	
				<!-- Modal para eliminar evento -->
			<div class="modal fade" id="elportadaeve" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			        	$id_event=mysqli_query($conexion,"SELECT id FROM portadas_eventos");
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
		<!-- Modal para eliminar banner -->
			<!--logica de eliminar-->
		<?php 
		if(isset($_POST['el_evento'])){
		$ke_evento=$_POST['eliminar_evento'];
		$kcon2_evento=mysqli_query($conexion,"DELETE FROM portadas_eventos WHERE id = '$ke_evento';");
		if($kcon2_evento){
			echo "<script>
			location.href='inicio.php';
			</script>";
		}
	}
		  ?>
		<!--logica de eliminar-->				
				</div>
            </div>
        </div>

		<!-- Modal para agregar banner -->
			<div class="modal fade" id="banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nuevo Banner</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <form method="POST" enctype="multipart/form-data">
			        	<input type="file" name="img" class="form-control">
			        	<br>
			        	<input type="text" name="titulo" class="form-control" placeholder="Titulo" required>
			        	<br>
			        	<input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required>
			        	<br>
			        	<hr>
			        	<input type="submit" name="cargarbanner" class="btn btn-success" value="Cargar">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		<!-- Modal para agregar banner -->

				<!-- Modal para modificar banner -->
			<div class="modal fade" id="modbanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modificar Banner</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<label class="form-control">Selecciona ID de Banner</label>
			      	<br>
			        <form method="POST" enctype="multipart/form-data">
			        	<select name="valor">
			        	<?php
			        	$ver=mysqli_query($conexion,"SELECT id FROM banners");
			        	while($r=mysqli_fetch_assoc($ver)){ 
			        		$i=$r['id'];
			        	?>
			        	<option class="form-control"> <?php  echo $i; ?> </option>
			        <?php 
			          }
			        ?>
			        </select>
			        <input type="text" name="texto1" class="form-control" placeholder="Titulo">
			        <input type="text" name="texto2" class="form-control" placeholder="Descripcion">
			        <input type="file" name="imagennueva" class="form-control">
			        <input type="submit" name="enviar4" value="Modificar" class="btn btn-warning">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		<!-- Modal para modificar banner -->

		<!-- Modal para eliminar banner -->
			<div class="modal fade" id="elbanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Eliminar Banner</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<label class="form-control">Selecciona ID de Banner</label>
			      	<br>
			        <form method="POST" enctype="multipart/form-data">
			        	<select name="valor2">
			        	<?php
			        	$ver2=mysqli_query($conexion,"SELECT id FROM banners");
			        	while($r2=mysqli_fetch_assoc($ver2)){ 
			        		$i2=$r2['id'];
			        	?>
			        	<option class="form-control"> <?php  echo $i2; ?> </option>
			        <?php 
			          }
			        ?>
			        </select>
			         <input type="submit" name="enviar5" value="Eliminar" class="btn btn-danger">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		<!-- Modal para eliminar banner -->
			<!--logica de eliminar-->
		<?php 
		if(isset($_POST['enviar5'])){
		$ke=$_POST['valor2'];
		$kcon2=mysqli_query($conexion,"DELETE FROM banners WHERE id = '$ke';");
		if($kcon2){
			echo "<script>
			location.href='inicio.php';
			</script>";
		}
	}
		  ?>
		<!--logica de eliminar-->

		<!--logica de modificar-->
		<?php 
		if(isset($_POST['enviar4'])){
		$k=$_POST['valor'];
		$k2=$_POST['texto1'];
		$k3=$_POST['texto2'];
		$k4=addslashes(file_get_contents($_FILES['imagennueva']['tmp_name']));

		$kcon=mysqli_query($conexion,"UPDATE banners SET titulo='$k2',descripcion='$k3', imagen='$k4' WHERE id='$k'");
		if($kcon){
			echo "<script>
			location.href='inicio.php';
			</script>";
		}
	}
		  ?>
		<!--logica de modificar-->

		<!--logica de banner-->
		<?php  
			if (isset($_POST['cargarbanner'])) {
                $var1=addslashes(file_get_contents($_FILES['img']['tmp_name']));				
                $var2=$_POST['titulo'];				
				$var3=$_POST['descripcion'];
				$consulta3=mysqli_query($conexion,"INSERT INTO banners VALUES(0,'$var2','$var3','$var1','cancun')");
					if (!$consulta3){
						echo "<script>
							alert('No se pudo cargar el archivo seleccionado');
							location.href='inicio.php';
						</script>";
					}
					else{
						echo "<script>
							location.href='inicio.php';
						</script>";
					}
			} 
          ?>
		<!--logica de banner-->


		<!--modales de noticia principal-->

		<!-- Modal para agregar noticia -->
			<div class="modal fade" id="noticiaprincipal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nueva Noticia Principal</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <form method="POST" enctype="multipart/form-data">
			        	<input type="file" name="img" class="form-control">
			        	<br>
			        	<input type="text" name="titulo" class="form-control" placeholder="Titulo" required>
			        	<br>
			        	<input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required>
			        	<br>
			        	<hr>
			        	<input type="submit" name="cargarnoticia" class="btn btn-success" value="Cargar">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<?php
			if (isset($_POST['cargarnoticia'])) {
                $var1notp=addslashes(file_get_contents($_FILES['img']['tmp_name']));				
                $var2notp=$_POST['titulo'];				
				$var3notp=$_POST['descripcion'];
				$consultax=mysqli_query($conexion,"INSERT INTO noticia_principal VALUES(1,'$var2notp','$var3notp','$var1notp','cancun')");
					if (!$consultax){
						echo "<script>
							alert('No se pudo cargar el archivo seleccionado');
							location.href='inicio.php';
						</script>";
					}
					else{
						echo "<script>
							location.href='inicio.php';
						</script>";
					}
			} 
			?>
		<!--modales de noticia principal-->

				<!-- Modal para modificar noticia principal -->
			<div class="modal fade" id="modnoticiaprincipal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia Principal</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	
			        <form method="POST" enctype="multipart/form-data">
			        <input type="text" name="texto1" class="form-control" placeholder="Titulo">
			        <br>
			        <input type="text" name="texto2" class="form-control" placeholder="Descripcion">
			        <br>
			        <input type="file" name="imagennueva" class="form-control">
			        <br>
			        <input type="submit" name="modnp" value="Modificar" class="btn btn-warning">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
				<!-- Modal para modificar noticia principal -->
			<?php

			if (isset($_POST['modnp'])) {
                $imgnotp=addslashes(file_get_contents($_FILES['imagennueva']['tmp_name']));				
                $titnotp=$_POST['texto1'];				
				$desnotp=$_POST['texto2'];
				$consultanotp=mysqli_query($conexion,"UPDATE noticia_principal SET titulo='$titnotp', descripcion='$desnotp',imagen='$imgnotp',locacion='cancun' WHERE id=1");
					if (!$consultanotp){
						echo "<script>
							alert('No se pudo cargar el archivo seleccionado');
							location.href='inicio.php';
						</script>";
					}
					else{
						echo "<script>
							location.href='inicio.php';
						</script>";
					}
			} 

			?>
		<!--modales de noticia principal-->
		<!-- Modal para eliminar noticia principal -->
			<div class="modal fade" id="elnoticiaprincipal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia Principal</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			      	<label class="form-control">¿Seguro que desea eliminar el contenido?</label>
			        <form method="POST">
			        <input type="submit" name="elnotp" value="Eliminar" class="btn btn-danger">
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			<?php 
			if (isset($_POST['elnotp'])) {
				$consultanotp=mysqli_query($conexion,"DELETE FROM noticia_principal WHERE id=1");
					if (!$consultanotp){
						echo "<script>
							alert('No se pudo cargar el archivo seleccionado');
							location.href='inicio.php';
						</script>";
					}
					else{
						echo "<script>
							location.href='inicio.php';
						</script>";
					}
			} 
			?>
				<!-- Modal para modificar noticia principal -->
	    <!--modales de noticia principal-->


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php  }
//mysqli_free_result($insertar);
//mysqli_free_result($a0);
mysqli_free_result($consulta1);
mysqli_free_result($consultaportada1);
//mysqli_free_result($a);
mysqli_free_result($ver);
mysqli_free_result($ver2);
//mysqli_free_result($kcon);
//mysqli_free_result($kcon2);
//mysqli_free_result($consulta3);
mysqli_close($conexion);
 ?>