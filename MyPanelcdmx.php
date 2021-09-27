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
          <a class="dropdown-item " href="#">Paantalla De Inicio</a>
          <a class="dropdown-item" href="#">Eventos</a>
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
          <a class="dropdown-item " href="#">Paantalla De Inicio</a>
          <a class="dropdown-item" href="#">Eventos</a>
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
          <a class="dropdown-item " href="#">Paantalla De Inicio</a>
          <a class="dropdown-item" href="#">Eventos</a>
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
          <a class="dropdown-item " href="#">Paantalla De Inicio</a>
          <a class="dropdown-item" href="#">Eventos</a>
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
          <a class="dropdown-item " href="#">Paantalla De Inicio</a>
          <a class="dropdown-item" href="#">Eventos</a>
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
          <a class="dropdown-item " href="#">Paantalla De Inicio</a>
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
    <h4 class="text-center">Banners Inicio</h4>
    <div class="row container-fluid">
      <div class="row container-fluid">
        <div class="col-2">
          <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner1">
              Modificar
            </button>
          </div>
        </div>
        </div>
         <div class="col-2">
            <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner2">
              Modificar
            </button>
          </div>
        </div>
        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner3">
              Modificar
            </button>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner4">
              Modificar
            </button>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner5">
              Modificar
            </button>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner6">
              Modificar
            </button>
          </div>
        </div>        </div>
      </div>

     
    </div>
    <br>
    <!--
     <div class="row container-fluid">
        <div class="col-4  bg-light">
          <p>Listado De Banners de la página principal , para modificar los banners carga tus archivos en la siguiente sección</p>
        </div>

        <div class="col-8 ">
          <form action="#" method="POST" enctype="multipart/form-data">
                <input type="file" name="d1"  class="btn btn-primary">
              <br>
              <br>
                <input type="file" name="d1"  class="btn btn-primary">
               <br>
              <br>
                <input type="file" name="d1"  class="btn btn-primary">
               <br>
              <br>
                <input type="file" name="d1"  class="btn btn-primary">
               <br>
              <br>
                <input type="file" name="d1"  class="btn btn-primary">
               <br>
              <br>
                <input type="file" name="d1"  class="btn btn-primary">
               <br>
              <br>
          </form>
        </div>
      </div>
-->
      <hr>
      <h4 class="text-center">Noticia Principal</h4>
      <div class="row container-fluid">
      <div class="col-4 ">
       
        </div> 
        <div class="col-4 ">
        <div class="card" style="width: 23rem; height: 15rem;">
          <img class="card-img-top" src="prueba1.jpg" alt="Card image cap">
          <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia">
            Modificar
          </button>
        </div>  
        <div class="col-4 ">
       
       </div>       
      </div>
       
       


      </div>
      <br>
      <br>  
      <br>
      <br>  
      <br>
      <br>
      <br>  
      <br>
      <br>
      <br>
      <br>
      <br>
      <hr>  


      <h4 class="text-center">Noticias 1</h4>
      <br>
       <div class="row container-fluid">
      <div class="row container-fluid">
         
      
        <div class="col-3">
          <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #1</p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia1">
            Modificar
          </button>
          </div>
        </div>
        </div>
         <div class="col-3">
            <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #2</p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia2">
            Modificar
          </button>
          </div>
        </div>
        </div>
         <div class="col-3">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #3</p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia3">
            Modificar
          </button>
          </div>
        </div>        </div>
         <div class="col-3">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #4</p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia4">
            Modificar
          </button>
          </div>
        </div>        
      </div>
      </div>

     
    </div>
     <br>
      <hr>
      <h4 class="text-center">Noticias 2</h4>
      <br>
       <div class="row container-fluid">
      <div class="row container-fluid">
         
      
        <div class="col-3">
          <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #1</p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia1">
            Modificar
          </button>
          </div>
        </div>
        </div>
         <div class="col-3">
            <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #2</p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia2">
            Modificar
          </button>
          </div>
        </div>
        </div>
         <div class="col-3">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #3</p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia3">
            Modificar
          </button>
          </div>
        </div>        </div>
         <div class="col-3">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #4</p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia4">
            Modificar
          </button>
          </div>
        </div>        
      </div>
      </div>

     
    </div>
     <br>
    <hr>  
    <!--proximos eventos-->
    <h4 class="text-center">Próximos eventos</h4>
    <br>
    <div class="row container-fluid">
      <div class="col-6">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Evento 1</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#Evento1">
            Modificar
          </button>
        </div>
      </div>
      </div>
       <div class="col-6">
       <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Evento 2</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button class="btn btn-primary" data-toggle="modal" data-target="#Evento2">
            Modificar
          </button>
  </div>
</div>
      </div>
    </div>
    </div>
</div>
</div>
<!--panel lateral-->

<!--modales modal banner1-->
<div class="modal fade" id="banner1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificación de Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 1-->
<!--modales modal banner2-->
<div class="modal fade" id="banner2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificación de Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 2-->
<!--modales modal banner3-->
<div class="modal fade" id="banner3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificación de Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 3-->
<!--modales modal banner4-->
<div class="modal fade" id="banner4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificación de Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 4-->
<!--modales modal banner5-->
<div class="modal fade" id="banner5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificación de Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 5-->
<!--modales modal banner6-->
<div class="modal fade" id="banner6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificación de Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cambiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modales modal banner 6-->

<!--modales noticia-->
<div class="modal fade" id="Noticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia Principal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <br>
      <!--formm para llenar datos-->
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Una Descripción">
        </div>
        <center><button type="submit" class="btn btn-warning">Modificar</button></center>
        <br>
      </form>
          <!--formm para llenar datos-->
     
    </div>
  </div>
</div>
<!--modales modal noticia -->

<!--modales noticia 1-->
<div class="modal fade" id="Noticia1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia #1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <br>
      <!--formm para llenar datos-->
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Una Descripción">
        </div>
        <center><button type="submit" class="btn btn-warning">Modificar</button></center>
        <br>
      </form>
          <!--formm para llenar datos-->
     
    </div>
  </div>
</div>
<!--modales modal noticia1 -->


<!--modales noticia 2-->
<div class="modal fade" id="Noticia2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia #2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <br>
      <!--formm para llenar datos-->
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Una Descripción">
        </div>
        <center><button type="submit" class="btn btn-warning">Modificar</button></center>
        <br>
      </form>
          <!--formm para llenar datos-->
     
    </div>
  </div>
</div>
<!--modales modal noticia2 -->
<!--modales noticia 3-->
<div class="modal fade" id="Noticia3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia #3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <br>
      <!--formm para llenar datos-->
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Una Descripción">
        </div>
        <center><button type="submit" class="btn btn-warning">Modificar</button></center>
        <br>
      </form>
          <!--formm para llenar datos-->
     
    </div>
  </div>
</div>
<!--modales modal noticia3 -->
<!--modales noticia 4-->
<div class="modal fade" id="Noticia4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia #4</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <br>
      <!--formm para llenar datos-->
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Una Descripción">
        </div>
        <center><button type="submit" class="btn btn-warning">Modificar</button></center>
        <br>
      </form>
          <!--formm para llenar datos-->
     
    </div>
  </div>
</div>
<!--modales modal noticia4 -->

<!--modales Evento1-->
<div class="modal fade" id="Evento1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Evento 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <br>
      <!--formm para llenar datos-->
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Una Descripción">
        </div>
        <center><button type="submit" class="btn btn-warning">Modificar</button></center>
        <br>
      </form>
          <!--formm para llenar datos-->
     
    </div>
  </div>
</div>
<!--modales modal noticia4 -->

<!--modales Evento2-->
<div class="modal fade" id="Evento2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Evento 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="prueba2.jpg" alt="Banner1" class="img-thumbnail">
      </div>
      <br>
      <!--formm para llenar datos-->
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Una Descripción">
        </div>
        <center><button type="submit" class="btn btn-warning">Modificar</button></center>
        <br>
      </form>
          <!--formm para llenar datos-->
     
    </div>
  </div>
</div>
<!--modales modal noticia4 -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>