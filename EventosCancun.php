
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script serc="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<title>Panel De Administración</title>
</head>
<body>

<!--panel superior administrativo-->
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">EO México Administrador De Contenido</h5>
      <span class="text-muted">EO México</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<!--panel superior administrativo-->


<!--panel lateral-->
<div class="row">
  <div class="col-2 bg-dark">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    	<!-- <a class="btn btn-primary" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true">Vista General Sucursales</a>
      <button class="btn btn-primary" id="v-pills-home-tab" data-toggle="pill" href="MyPanelCancun.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Contenido Cancún Riviera Maya</button>
      <a class="btn btn-primary" id="v-pills-profile-tab" data-toggle="pill" href="MyPanelcdmx.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Contenido CDMX</a>
      <a class="btn btn-primary" id="v-pills-messages-tab" data-toggle="pill" href="MyPanelGuad.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contenido Guadalajara</a>
      <a class="btn btn-primary" id="v-pills-settings-tab" data-toggle="pill" href="MyPanelMont.php" role="tab" aria-controls="v-pills-settings" aria-selected="false">Contenido Monterrey</a>
      <a class="btn btn-primary" id="v-pills-settings-tab" data-toggle="pill" href="MyPanelQuer.php" role="tab" aria-controls="v-pills-settings" aria-selected="false">Contenido Queretaro</a>-->
      <!--<button class="btn btn-primary" onclick="window.location.href='https://www.google.com'">Contenido Cancún Riviera Maya</button>-->
      <div class="dropdown">
       
        <!--
        <div class="dropdown-menu  bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item " href="MyPanelCancun.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="#">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>

        </div>-->
        <li class="nav-item dropdown btn-block btn btn-primary bg-light">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contenido Cancun-Riviera Maya</a>
    <div class="dropdown-menu">
    <a class="dropdown-item " href="MyPanelCancun.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="EventosCancun.php">Eventos</a>
          <a class="dropdown-item" href="ArchivosEOCancun/Alianzas.php">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>
    </div>
  </li>
      </div>
      
        <div class="dropdown">
        <li class="nav-item dropdown btn-block btn btn-primary bg-light">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contenido CDMX.</a>
    <div class="dropdown-menu">
    <a class="dropdown-item " href="MyPanelcdmx.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="Eventoscdmx.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>
    </div>
  </li>
      </div>
      <div class="dropdown">
        
      <li class="nav-item dropdown btn-block btn btn-primary bg-light">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contenido Guadalajara</a>
    <div class="dropdown-menu">
    <a class="dropdown-item " href="MyPanelGuad.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="EventosGuad.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>
    </div>
  </li>
      </div>
        <div class="dropdown">
       
        <li class="nav-item dropdown btn-block btn btn-primary bg-light">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contenido Monterrey</a>
    <div class="dropdown-menu">
    <a class="dropdown-item " href="MyPanelMont.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="EventosMont.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>
    </div>
  </li>
      </div>
      <div class="dropdown">
       
        <li class="nav-item dropdown btn-block btn btn-primary bg-light">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contenido Queretaro</a>
    <div class="dropdown-menu">
    <a class="dropdown-item " href="MyPanelQuer.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="EventosQueretaro.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>
    </div>
  </li>
      </div>
    
     

     
    </div>
    <!--HASTA AQUI-->
  </div>

  <div class="col-10">
      <h4 class="text-center">Eventos EOMéxico Cancún Riviera Maya</h4>
      <br>
  <div class="card-deck">
    <!--evento numero 1-->
  <div class="card">
    <img class="card-img-top" src="ArchivosEOCancun/eventos/evento1.jpg" alt="Evento1">
    <div class="card-body">
      <p class="card-text">
       
       <?php

        include 'BaseDeDatos/bd.php';
       
       if(isset($_POST['Des'])){
       $Descripcion1=$_POST['DesNot1'];
       $NotTitulo1=$_POST['NotTitulo1'];
        //$query1=mysqli_query($conectar,"INSERT INTO eventos (descripcion) VALUES  ('$Descripcion1')");
        $query2=mysqli_query($conectar,"UPDATE eventos SET descripcion='$Descripcion1' WHERE id=1");
        $queryn1=mysqli_query($conectar,"UPDATE eventos SET titulo='$NotTitulo1' WHERE id=1");

     
    }
    $query3=mysqli_query($conectar,"SELECT * FROM eventos WHERE id=1");
    while($s=$query3->fetch_assoc()){
      $d0=$s['titulo'];

      $d1=$s['descripcion'];
      
    }
    echo "<h5 class='card-title'>Titulo: $d0</h5>";
    echo "<hr>";
    echo "Descripción: $d1";
 
     ?>
      
    </p>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary" data-toggle="modal" data-target="#n1">Modificar</button>    
    </div>
  </div>
      <!--evento numero 1-->
  <!--evento numero 2-->

  <div class="card">
  <img class="card-img-top" src="ArchivosEOCancun/eventos/evento2.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">
       
       <?php

        include 'BaseDeDatos/bd.php';
       
       if(isset($_POST['Des2'])){
       $Evento2Titulo=$_POST['DesNot2'];
       $Evento2Descripcion=$_POST['NotTitulo2'];
        //$query1=mysqli_query($conectar,"INSERT INTO eventos (descripcion) VALUES  ('$Descripcion1')");
        $Evento2Query1=mysqli_query($conectar,"UPDATE eventos SET descripcion='$Evento2Titulo' WHERE id=2");
        $Evento2Query2=mysqli_query($conectar,"UPDATE eventos SET titulo='$Evento2Descripcion' WHERE id=2");

     
    }
    $Evento2Query3=mysqli_query($conectar,"SELECT * FROM eventos WHERE id=2");
    while($Evento2Var=$Evento2Query3->fetch_assoc()){
      $Evento2Imp1=$Evento2Var['titulo'];
      $Evento2Imp2=$Evento2Var['descripcion'];
      
    }
    echo "<h5 class='card-title'>Titulo: $Evento2Imp1</h5>";
    echo "<hr>";
    echo "Descripción: $Evento2Imp2";
 
     ?>
      
    </p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n2">Modificar</button>    
    </div>
  </div>
    <!--evento numero 2-->

  <!--evento numero 3-->

  <div class="card">
  <img class="card-img-top" src="ArchivosEOCancun/eventos/evento3.jpg" alt="Card image cap">
    <div class="card-body">
    <p class="card-text">
       
       <?php

        include 'BaseDeDatos/bd.php';
       
       if(isset($_POST['Des3'])){
       $Evento3Titulo=$_POST['DesNot3'];
       $Evento3Descripcion=$_POST['NotTitulo3'];
        //$query1=mysqli_query($conectar,"INSERT INTO eventos (descripcion) VALUES  ('$Descripcion1')");
        $Evento3Query1=mysqli_query($conectar,"UPDATE eventos SET descripcion='$Evento3Titulo' WHERE id=3");
        $Evento3Query2=mysqli_query($conectar,"UPDATE eventos SET titulo='$Evento3Descripcion' WHERE id=3");

     
    }
    $Evento3Query3=mysqli_query($conectar,"SELECT * FROM eventos WHERE id=3");

    while($Evento3Var=$Evento3Query3->fetch_assoc()){
      $Evento3Imp1=$Evento3Var['titulo'];
      $Evento3Imp2=$Evento3Var['descripcion'];
      
    }
    echo "<h5 class='card-title'>Titulo: $Evento3Imp1</h5>";
    echo "<hr>";
    echo "Descripción: $Evento3Imp2";
 
     ?>
      
    </p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n3">Modificar</button>    
    </div>
  </div>
    <!--evento numero 3-->

</div>
<br>
<div class="card-deck">
  <!--evento numero 4-->
  <div class="card">
  <img class="card-img-top" src="ArchivosEOCancun/eventos/evento4.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">
      <?php

              include 'BaseDeDatos/bd.php';

              if(isset($_POST['Des4'])){
              $Evento4Titulo=$_POST['DesNot4'];
              $Evento4Descripcion=$_POST['NotTitulo4'];
              //$query1=mysqli_query($conectar,"INSERT INTO eventos (descripcion) VALUES  ('$Descripcion1')");
              $Evento4Query1=mysqli_query($conectar,"UPDATE eventos SET descripcion='$Evento4Titulo' WHERE id=4");
              $Evento4Query2=mysqli_query($conectar,"UPDATE eventos SET titulo='$Evento4Descripcion' WHERE id=4");


              }
              $Evento4Query3=mysqli_query($conectar,"SELECT * FROM eventos WHERE id=4");

              while($Evento4Var=$Evento4Query3->fetch_assoc()){
              $Evento4Imp1=$Evento4Var['titulo'];
              $Evento4Imp2=$Evento4Var['descripcion'];

              }
              echo "<h5 class='card-title'>Titulo: $Evento4Imp1</h5>";
              echo "<hr>";
              echo "Descripción: $Evento4Imp2";

              ?>
      </p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n4">Modificar</button>    
    </div>
  </div>
  <!--evento numero 4-->

  <!--evento numero 5-->

  <div class="card">
  <img class="card-img-top" src="ArchivosEOCancun/eventos/evento5.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">Aquí va la descripción del evento que se mostrará en la pagina principal</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n5">Modificar</button>    
    </div>
  </div>
    <!--evento numero 5-->

<!--evento numero 6-->
  <div class="card">
  <img class="card-img-top" src="ArchivosEOCancun/eventos/evento6.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Evento 6 </h5>
      <p class="card-text">Aquí va la descripción del evento que se mostrará en la pagina principal</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n6">Modificar</button>    
    </div>
  </div>
  <!--evento numero 6-->
 
</div>
<br>
<div class="card-deck">
    <!--evento numero 7-->

  <div class="card">
  <img class="card-img-top" src="ArchivosEOCancun/eventos/evento7.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Evento 7</h5>
      <p class="card-text">Aquí va la descripción del evento que se mostrará en la pagina principal</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n7">Modificar</button>    
    </div>
  </div>
    <!--evento numero 7-->
<!--evento numero 8-->

    <div class="card">
    <img class="card-img-top" src="ArchivosEOCancun/eventos/evento8.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Evento 8</h5>
      <p class="card-text">Aquí va la descripción del evento que se mostrará en la pagina principal</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n8">Modificar</button>    
    </div>
  </div>
  <!--evento numero 8-->

  <div class="card">
    <!--
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 7</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n7">Modificar</button>    
    </div>
    -->
  </div>
  
</div>
</div>


<!--panel lateral-->





<!--modales modal evento1 -->
<div class="modal fade" id="n1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="ArchivosEOCancun/eventos/evento1.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <form action="ArchivosEOCancun/Eventos.php" method="POST" enctype="multipart/form-data">
        <input type="file" class="btn btn-primary" name="evento1">
        
        <input type="submit" name="enviarevento1" value="Subir Imágen" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <form method="POST">
      <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
      <textarea class="form-control" name="NotTitulo1" rows="3"></textarea>
        <textarea class="form-control" name="DesNot1" rows="3"></textarea>
        <input type="submit" name="Des" value="Cargar Descripción" class="btn btn-success">
        </form>
        
      </div>
    </div>
  </div>
</div>
<!--modales modal evento1-->

<!--modales modal evento2 -->
<div class="modal fade" id="n2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/eventos/evento2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <form action="ArchivosEOCancun/Eventos.php" method="POST" enctype="multipart/form-data">
        <input type="file" class="btn btn-primary" name="evento2">
        <input type="submit" name="enviarevento2" value="Subir Imágen" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
      <form method="POST">
      <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
      <textarea class="form-control" name="NotTitulo2" rows="3"></textarea>
        <textarea class="form-control" name="DesNot2" rows="3"></textarea>
        <input type="submit" name="Des2" value="Cargar Descripción" class="btn btn-success">
        </form>

      </div>
    </div>
  </div>
</div>
<!--modales modal evento 2-->

<!--modales modal evento3 -->
<div class="modal fade" id="n3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="ArchivosEOCancun/eventos/evento3.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <form action="ArchivosEOCancun/Eventos.php" method="POST" enctype="multipart/form-data">
        <input type="file" class="btn btn-primary" name="evento3">
        <input type="submit" name="enviarevento3" value="Cargar" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
      <form method="POST">
      <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
      <textarea class="form-control" name="NotTitulo3" rows="3"></textarea>
        <textarea class="form-control" name="DesNot3" rows="3"></textarea>
        <input type="submit" name="Des3" value="Cargar Descripción" class="btn btn-success">
        </form>
    </div>
  </div>
</div>
<!--modales modal evento3-->

<!--modales modal evento 4 -->

<div class="modal fade" id="n4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="ArchivosEOCancun/eventos/evento1.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <form action="ArchivosEOCancun/Eventos.php" method="POST" enctype="multipart/form-data">
        <input type="file" class="btn btn-primary" name="evento1">
        <input type="submit" name="enviarevento1" value="Subir Imágen" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <form method="POST">
      <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
      <textarea class="form-control" name="NotTitulo1" rows="3"></textarea>
        <textarea class="form-control" name="DesNot1" rows="3"></textarea>
        <input type="submit" name="Des" value="Cargar Descripción" class="btn btn-success">
        </form>
        
      </div>
    </div>
  </div>
</div>
<!--modales modal evento 4-->

<!--modales modal evento 5 -->
<div class="modal fade" id="n5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 5</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/eventos/evento5.jpg" alt="Evento 5" class="img-thumbnail">
        <br>
        <form action="ArchivosEOCancun/Eventos.php" method="POST" enctype="multipart/form-data">
        <input type="file" class="btn btn-primary" name="evento5">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
        <br>
        <input type="submit" name="enviarevento5" value="Cargar" class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
</div>
<!--modales modal evento 5-->

<!--modales modal evento6 -->
<div class="modal fade" id="n6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 6</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/eventos/evento6.jpg" alt="Evento 6" class="img-thumbnail">
        <br>
        <form action="ArchivosEOCancun/Eventos.php" method="POST" enctype="multipart/form-data">
        <input type="file" class="btn btn-primary" name="evento6">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
        <br>
        <input type="submit" name="enviarevento6" value="Cargar" class="btn btn-success">
        </form>      </div>
    </div>
  </div>
</div>
<!--modales modal evento 6-->

<!--modales modal evento7 -->
<div class="modal fade" id="n7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 7</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/eventos/evento7.jpg" alt="Evento 6" class="img-thumbnail">
        <br>
        <form action="ArchivosEOCancun/Eventos.php" method="POST" enctype="multipart/form-data">
        <input type="file" class="btn btn-primary" name="evento7">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
        <br>
        <input type="submit" name="enviarevento7" value="Cargar" class="btn btn-success">
        </form> 
      </div>
    </div>
  </div>
</div>
<!--modales modal evento 7-->

<!--modales modal evento 8 -->
<div class="modal fade" id="n8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Evento 8</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/eventos/evento8.jpg" alt="Evento 6" class="img-thumbnail">
        <br>
        <form action="ArchivosEOCancun/Eventos.php" method="POST" enctype="multipart/form-data">
        <input type="file" class="btn btn-primary" name="evento8">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
        <br>
        <input type="submit" name="enviarevento8" value="Cargar" class="btn btn-success">
        </form> 
      </div>
    </div>
  </div>
</div>
<!--modales modal evento 8-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>