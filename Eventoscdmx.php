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
        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenido Cancún Riviera Maya
        </button>
        <div class="dropdown-menu  bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item " href="MyPanelCancun.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="EventosCancun.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>

        </div>
      </div>
        <div class="dropdown">
        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenido Ciudad De México
        </button>
        <div class="dropdown-menu  bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item " href="MyPanelcdmx.php">Paantalla De Inicio</a>
          <a class="dropdown-item" href="Eventoscdmx.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>

        </div>
      </div>
      <div class="dropdown">
        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenido Guadalajara
        </button>
        <div class="dropdown-menu  bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item " href="MyPanelGuad.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="EventosGuad.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>

        </div>
      </div>
        <div class="dropdown">
        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenido Monterrey
        </button>
        <div class="dropdown-menu  bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item " href="MyPanelMont.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="EventosMont.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>

        </div>
      </div>
      <div class="dropdown">
        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenido Queretaro
        </button>
        <div class="dropdown-menu  bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item " href="MyPanelQuer.php">Pantalla De Inicio</a>
          <a class="dropdown-item" href="EventosQueretaro.php">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>

        </div>
      </div>
      <div class="dropdown">
        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contenido Queretaro
        </button>
        <div class="dropdown-menu  bg-light" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item " href="#">Pantalla De Inicio</a>
          <a class="dropdown-item" href="#">Eventos</a>
          <a class="dropdown-item" href="#">Alianzas</a>
          <a class="dropdown-item" href="#">Organización</a>
          <a class="dropdown-item" href="#">Miembros</a>
          <a class="dropdown-item" href="#">Buzón</a>

        </div>
      </div>
    </div>
    <!--HASTA AQUI-->
  </div>

  <div class="col-10">
      <h4 class="text-center">Eventos EOMéxico CDMX</h4>
      <br>
  <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 1</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary" data-toggle="modal" data-target="#n1">Modificar</button>    
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 2</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n2">Modificar</button>    
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 3</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n3">Modificar</button>    
    </div>
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 4</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n4">Modificar</button>    
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 5</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n5">Modificar</button>    
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 6</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n6">Modificar</button>    
    </div>
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 6</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n6">Modificar</button>    
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 7</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n7">Modificar</button>    
    </div>
  </div>
  <div class="card">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Noticia 8</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary" data-toggle="modal" data-target="#n8">Modificar</button>    
    </div>
  </div>
</div>
</div>


<!--panel lateral-->





<!--modales modal noticia1 -->
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
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->

<!--modales modal noticia2 -->
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
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->

<!--modales modal noticia3 -->
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
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->

<!--modales modal noticia4 -->
<div class="modal fade" id="n4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 4</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->

<!--modales modal noticia5 -->
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
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->

<!--modales modal noticia6 -->
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
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->

<!--modales modal noticia7 -->
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
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->

<!--modales modal noticia8 -->
<div class="modal fade" id="n8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 8</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
        <br>
        <p class="card-text"><small class="text-muted">Ingresa Una Descripción</small></p>
        <textarea class="form-control" name="DescripcionNoticia1" rows="3"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>