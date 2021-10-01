<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <a class="dropdown-item " href="../MyPanelCancun.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="../EventosCancun.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
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
<!--panel lateral-->
  <div class="col-10">
      <h4 class="text-center">EO Cancún Alianzas</h4>
      <br>
      <hr>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="Alianzas/Alianza1.jpg" class="card-img-top" alt="Alianza 1">
      <div class="card-body">
        <h5 class="card-title">Alianza 1</h5>
        <p class="card-text">Aquí irá la descricpión de la alianza 1, si es que conlleva alguna</p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#Alianza1">
            Modificar
          </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="Alianzas/Alianza2.jpg" class="card-img-top" alt="Alianza 2">
      <div class="card-body">
      <h5 class="card-title">Alianza 2</h5>
        <p class="card-text">Aquí irá la descricpión de la alianza 1, si es que conlleva alguna</p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#Alianza2">
            Modificar
          </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="Alianzas/Alianza3.jpg" class="card-img-top" alt="Alianza 2">
      <div class="card-body">
      <h5 class="card-title">Alianza 3</h5>
        <p class="card-text">Aquí irá la descricpión de la alianza 1, si es que conlleva alguna</p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#Alianza3">
            Modificar
          </button>
      </div>
    </div>
  </div>
  <div class="col">

</div>
</div>
<br>
<!--
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">

</div>
</div>

<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">

</div>
</div>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">

</div>
</div>
-->
  </div>
<!--panel lateral-->


<!--modales-->
<!--modal de alianza 1-->
<div class="modal fade" id="Alianza1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Alianza</h5>
      </div>
      <div class="modal-body">
      <img src="Alianzas/Alianza1.jpg" alt="Alianza1" class="img-thumbnail">
        <form action="AlianzasArchivos.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="Alianza1">
          <input type="submit" class="btn btn-success" name="enviar20" value="Cargar">
        </form>
      </div>
    </div>
  </div>
</div>
<!--modal de alianza 1-->
<!--modal de alianza 2-->
<div class="modal fade" id="Alianza2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Alianza</h5>
      </div>
      <div class="modal-body">
      <img src="Alianzas/Alianza2.jpg" alt="Alianza2" class="img-thumbnail">
        <form action="AlianzasArchivos.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="Alianza2">
          <input type="submit" class="btn btn-success" name="enviar21" value="Cargar">
        </form>
      </div>
    </div>
  </div>
</div>

<!--modal de alianza 2-->

<!--modal de alianza 3-->
<div class="modal fade" id="Alianza3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Alianza</h5>
      </div>
      <div class="modal-body">
      <img src="Alianzas/Alianza3.jpg" alt="Alianza3" class="img-thumbnail">
        <form action="AlianzasArchivos.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="Alianza3">
          <input type="submit" class="btn btn-success" name="enviar22" value="Cargar">
        </form>
      </div>
    </div>
  </div>
</div>

<!--modal de alianza 3-->

<!--modales-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>