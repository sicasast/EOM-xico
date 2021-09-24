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
  </div>

  <div class="col-10">
    <h4 class="text-center">Banners Inicio</h4>
    <div class="row container-fluid">
      <div class="row container-fluid">
        <div class="col-2">
          <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Banner #1</p>
          </div>
        </div>
        </div>
         <div class="col-2">
            <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Banner #2</p>
          </div>
        </div>
        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Banner #3</p>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Banner #4</p>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Banner #5</p>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Banner #6</p>
          </div>
        </div>        </div>
      </div>

     
    </div>
    <br>
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

      <hr>
      <h4 class="text-center">Noticia Principal</h4>
      <div class="row container-fluid">
         <div class="col-4 bg-light"> 
           <p>Listado De Noticias de la página principal , para modificar tus caratulas de eventos carga tus archivos en la siguiente sección seguido de una
           descripción de la noticia</p>

        </div>
        <div class="col-4">
        <div class="card" style="width: 23rem; height: 15rem;">
          <img class="card-img-top" src="prueba1.jpg" alt="Card image cap">
        </div>        
      </div>
        <div class="col-4 bg-light">
          <form action="#" method="POST" enctype="multipart/form-data">
              <label >Noticia Principal</label>
                <input type="text" name="Descripcion" placeholder="Agrega una descripción de la noticia" class="form-control">
                <br>
                <input type="file" name="d1"  class="btn btn-primary">
              <br>
          </form>
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
      <hr>  


      <h4 class="text-center">Noticias 1</h4>
       <div class="row container-fluid">
      <div class="row container-fluid">
         <div class="col-4  bg-light">
          <label >Noticia #1</label>
        <input type="text" name="Descripcion" placeholder="Descripción de la noticia" class="form-control">
        <input type="file" name="d1"  class="btn btn-primary">
        <br>
        <br>
         <label >Noticia #2</label>
        <input type="text" name="Descripcion" placeholder="Descripción de la noticia" class="form-control">
        <input type="file" name="d1"  class="btn btn-primary">
        <br>
        <br>
         <label >Noticia #3</label>
        <input type="text" name="Descripcion" placeholder="Descripción de la noticia" class="form-control">
        <input type="file" name="d1"  class="btn btn-primary">
        <br>
        <br>
         <label >Noticia #4</label>
        <input type="text" name="Descripcion" placeholder="Descripción de la noticia" class="form-control">
        <input type="file" name="d1"  class="btn btn-primary">
      </div>
      
        <div class="col-2">
          <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #1</p>
          </div>
        </div>
        </div>
         <div class="col-2">
            <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #2</p>
          </div>
        </div>
        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #3</p>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #4</p>
          </div>
        </div>        
      </div>
      
        

      </div>

     
    </div>
     <br>
      <hr>
            <h4 class="text-center">Noticias 2</h4>
             <div class="row container-fluid">
      <div class="row container-fluid">
         <div class="col-4  bg-light">
          <label >Noticia #1</label>
        <input type="text" name="Descripcion" placeholder="Descripción de la noticia" class="form-control">
        <input type="file" name="d1"  class="btn btn-primary">
        <br>
        <br>
         <label >Noticia #2</label>
        <input type="text" name="Descripcion" placeholder="Descripción de la noticia" class="form-control">
        <input type="file" name="d1"  class="btn btn-primary">
        <br>
        <br>
         <label >Noticia #3</label>
        <input type="text" name="Descripcion" placeholder="Descripción de la noticia" class="form-control">
        <input type="file" name="d1"  class="btn btn-primary">
        <br>
        <br>
         <label >Noticia #4</label>
        <input type="text" name="Descripcion" placeholder="Descripción de la noticia" class="form-control">
        <input type="file" name="d1"  class="btn btn-primary">
      </div>
      
        <div class="col-2">
          <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #1</p>
          </div>
        </div>
        </div>
         <div class="col-2">
            <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #2</p>
          </div>
        </div>
        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #3</p>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="prueba2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Noticia #4</p>
          </div>
        </div>        
      </div>
      
        

      </div>

     
    </div>
    <br>
    <hr>  
    <!--proximos eventos-->
    <h4 class="text-center">Próximos eventos</h4>
    <div class="row container-fluid">
      <div class="col-4 bg-light">
        <form action="#" method="POST" enctype="multipart/form-data">
              <label >Evento 2</label>
                <input type="text" name="Descripcion" placeholder="Agrega una descripción del evento" class="form-control">
                <br>
                <input type="file" name="d1"  class="btn btn-primary">
                <br>
                <br>
                <label >Evento 2</label>
                <input type="text" name="Descripcion" placeholder="Agrega una descripción del evento" class="form-control">
                <br>
                <input type="file" name="d1"  class="btn btn-primary">
              <br>
          </form>
      </div>
      <div class="col-4">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="prueba2.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Evento 1</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
      </div>
       <div class="col-4">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="prueba2.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Evento 2</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
    </div>
</div>
</div>
<!--panel lateral-->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>