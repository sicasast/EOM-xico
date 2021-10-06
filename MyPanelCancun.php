<!DOCTYPE html>
<html>
<head>

<link rel="shortcut icon" href="favicom.ico">

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Panel De Administración</title>
</head>
<body>

<!--panel superior administrativo-->
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">EO Cancún Riviera Maya / Administrador De Contenido</h5>
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
    <h4 class="text-center">EO cancun/ Rivera Maya Banners</h4>
    <div class="row container-fluid">
      <div class="row container-fluid">
        <div class="col-2">
          <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="ArchivosEOCancun/banners/banner1.jpg" alt="Card image cap">
          <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner1">
              Modificar
            </button>
          </div>
        </div>
        </div>
         <div class="col-2">
            <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="ArchivosEOCancun/banners/banner2.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner2">
              Modificar
            </button>
          </div>
        </div>
        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
          <img class="card-img-top" src="ArchivosEOCancun/banners/banner3.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner3">
              Modificar
            </button>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
<img class="card-img-top" src="ArchivosEOCancun/banners/banner4.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner4">
              Modificar
            </button>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
<img class="card-img-top" src="ArchivosEOCancun/banners/banner5.jpg" alt="Card image cap">
          <div class="card-body">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#banner5">
              Modificar
            </button>
          </div>
        </div>        </div>
         <div class="col-2">
<div class="card" style="width: 15rem;">
<img class="card-img-top" src="ArchivosEOCancun/banners/banner6.jpg" alt="Card image cap">
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
      <h4 class="text-center">EO Cancun/Riviera Maya Noticia Principal</h4>
      <div class="row container-fluid">
      <div class="col ">
       
        </div> 
        <div class="col-8">
        <div class="card" style="width: 23rem; height: 15rem;">
          <img class="card-img-top" src="ArchivosEOCancun/noticiap/noticiap.jpg" alt="Noticia Principal">
          <p class="card-text">Título De Noticia</p>
          <p class="card-text bg-light color-dark" >
            <?php
              include 'BaseDeDatos/bd.php';
              if (isset($_POST['principal'])){
                $noticia1=$_POST['descripcion'];
                $var1=mysqli_query($conectar,"UPDATE noticias SET titulo='$noticia1' WHERE idnoticia=1");
              }
              $Consulta1=mysqli_query($conectar,"SELECT titulo FROM noticias WHERE idnoticia=1");
          while($s1=$Consulta1->fetch_assoc()){
            $d2=$s1['titulo'];
          }
          echo $d2;
            ?>
          </p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia">
            Modificar
          </button>
        </div>  
        <div class="col ">
       
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
          <img class="card-img-top" src="ArchivosEOCancun/noticias1/noticia1.jpg" alt="Noticia Principal">
          <div class="card-body">
            <p class="card-text bg-light">
              <?php 
              if (isset($_POST['Not1Datos'])){
                $Not1Titulo=$_POST['titulo1'];
                $Not1Des=$_POST['NotDes1'];
                $Not1Query1=mysqli_query($conectar,"UPDATE noticias SET titulo='$Not1Titulo' WHERE idnoticia=2");
                $Not1Query2=mysqli_query($conectar,"UPDATE noticias SET descripcion='$Not1Des' WHERE idnoticia=2");
              }
              $Not1Query3=mysqli_query($conectar,"SELECT *FROM noticias WHERE idnoticia=2");

              while($Not1Var=$Not1Query3->fetch_assoc()){
                $Not1Imp1=$Not1Var['titulo'];
                $Not1Imp2=$Not1Var['descripcion'];

              }
              echo "Evento: $Not1Imp1";
              echo "<hr>";
              echo "Descripción: $Not1Imp2";
              ?>
            </p>
            
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia1">
            Modificar
          </button>
          </div>
        </div>
        </div>
         <div class="col-3">
            <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="ArchivosEOCancun/noticias1/noticia2.jpg" alt="Noticia Principal">
          <div class="card-body">
            <p class="card-text">
            <?php
              if (isset($_POST['Not2Datos'])){
                $Not2Titulo=$_POST['titulo2'];
                $Not2Des=$_POST['NotDes2'];
                $Not2Query1=mysqli_query($conectar,"UPDATE noticias SET titulo='$Not2Titulo' WHERE idnoticia=3");
                $Not2Query2=mysqli_query($conectar,"UPDATE noticias SET descripcion='$Not2Des' WHERE idnoticia=3");
              }
              $Not2Query3=mysqli_query($conectar,"SELECT *FROM noticias WHERE idnoticia=3");

              while($Not2Var=$Not2Query3->fetch_assoc()){
                $Not2Imp1=$Not2Var['titulo'];
                $Not2Imp2=$Not2Var['descripcion'];

              }
              echo "Evento: $Not2Imp1";
              echo "<hr>";
              echo "Descripción: $Not2Imp2";

              ?>

            </p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia2">
            Modificar
          </button>
          </div>
        </div>
        </div>
         <div class="col-3">
<div class="card" style="width: 15rem;">
<img class="card-img-top" src="ArchivosEOCancun/noticias1/noticia3.jpg" alt="Noticia 3">
          <div class="card-body">
            <p class="card-text">
            <?php
              if (isset($_POST['Not3Datos'])){
                $Not3Titulo=$_POST['titulo3'];
                $Not3Des=$_POST['NotDes3'];
                $Not3Query1=mysqli_query($conectar,"UPDATE noticias SET titulo='$Not3Titulo' WHERE idnoticia=4");
                $Not3Query2=mysqli_query($conectar,"UPDATE noticias SET descripcion='$Not3Des' WHERE idnoticia=4");
              }
              $Not3Query3=mysqli_query($conectar,"SELECT *FROM noticias WHERE idnoticia=4");

              while($Not3Var=$Not3Query3->fetch_assoc()){
                $Not3Imp1=$Not3Var['titulo'];
                $Not3Imp2=$Not3Var['descripcion'];

              }
              echo "Evento: $Not3Imp1";
              echo "<hr>";
              echo "Descripción: $Not3Imp2";

              ?>

            </p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia3">
            Modificar
          </button>
          </div>
        </div>        </div>
         <div class="col-3">
<div class="card" style="width: 15rem;">
<img class="card-img-top" src="ArchivosEOCancun/noticias1/noticia4.jpg" alt="Noticia 4">
          <div class="card-body">
            <p class="card-text">
            <?php
              if (isset($_POST['Not4Datos'])){
                $Not4Titulo=$_POST['titulo4'];
                $Not4Des=$_POST['NotDes4'];
                $Not4Query1=mysqli_query($conectar,"UPDATE noticias SET titulo='$Not4Titulo' WHERE idnoticia=5");
                $Not4Query2=mysqli_query($conectar,"UPDATE noticias SET descripcion='$Not4Des' WHERE idnoticia=5");
              }
              $Not4Query3=mysqli_query($conectar,"SELECT *FROM noticias WHERE idnoticia=5");

              while($Not4Var=$Not4Query3->fetch_assoc()){
                $Not4Imp1=$Not4Var['titulo'];
                $Not4Imp2=$Not4Var['descripcion'];

              }
              echo "Evento: $Not4Imp1";
              echo "<hr>";
              echo "Descripción: $Not4Imp2";

              ?>
            </p>
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
          <img class="card-img-top" src="ArchivosEOCancun/noticias1/noticia5.jpg" alt="Noticia 5">
          <div class="card-body">
            <p class="card-text">
            <?php
              if (isset($_POST['Not5Datos'])){
                $Not5Titulo=$_POST['titulo5'];
                $Not5Des=$_POST['NotDes5'];
                $Not5Query1=mysqli_query($conectar,"UPDATE noticias SET titulo='$Not5Titulo' WHERE idnoticia=6");
                $Not5Query2=mysqli_query($conectar,"UPDATE noticias SET descripcion='$Not5Des' WHERE idnoticia=6");
              }
              $Not5Query3=mysqli_query($conectar,"SELECT *FROM noticias WHERE idnoticia=6");

              while($Not5Var=$Not5Query3->fetch_assoc()){
                $Not5Imp1=$Not5Var['titulo'];
                $Not5Imp2=$Not5Var['descripcion'];

              }
              echo "Evento: $Not5Imp1";
              echo "<hr>";
              echo "Descripción: $Not5Imp2";

              ?>

            </p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia5">
            Modificar
          </button>
          </div>
        </div>
        </div>
         <div class="col-3">
            <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="ArchivosEOCancun/noticias1/noticia6.jpg" alt="Noticia 6">
          <div class="card-body">
            <p class="card-text">
            <?php
              if (isset($_POST['Not6Datos'])){
                $Not6Titulo=$_POST['titulo6'];
                $Not6Des=$_POST['NotDes6'];
                $Not6Query1=mysqli_query($conectar,"UPDATE noticias SET titulo='$Not6Titulo' WHERE idnoticia=7");
                $Not6Query2=mysqli_query($conectar,"UPDATE noticias SET descripcion='$Not6Des' WHERE idnoticia=7");
              }
              $Not6Query3=mysqli_query($conectar,"SELECT *FROM noticias WHERE idnoticia=7");

              while($Not6Var=$Not6Query3->fetch_assoc()){
                $Not6Imp1=$Not6Var['titulo'];
                $Not6Imp2=$Not6Var['descripcion'];

              }
              echo "Evento: $Not6Imp1";
              echo "<hr>";
              echo "Descripción: $Not6Imp2";

              ?>
            </p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia6">
            Modificar
          </button>
          </div>
        </div>
        </div>
         <div class="col-3">
<div class="card" style="width: 15rem;">
<img class="card-img-top" src="ArchivosEOCancun/noticias1/noticia7.jpg" alt="Noticia 7">
          <div class="card-body">
            <p class="card-text">
            <?php
              if (isset($_POST['Not7Datos'])){
                $Not7Titulo=$_POST['titulo7'];
                $Not7Des=$_POST['NotDes7'];
                $Not7Query1=mysqli_query($conectar,"UPDATE noticias SET titulo='$Not7Titulo' WHERE idnoticia=8");
                $Not7Query2=mysqli_query($conectar,"UPDATE noticias SET descripcion='$Not7Des' WHERE idnoticia=8");
              }
              $Not7Query3=mysqli_query($conectar,"SELECT *FROM noticias WHERE idnoticia=8");

              while($Not7Var=$Not7Query3->fetch_assoc()){
                $Not7Imp1=$Not7Var['titulo'];
                $Not7Imp2=$Not7Var['descripcion'];

              }
              echo "Evento: $Not7Imp1";
              echo "<hr>";
              echo "Descripción: $Not7Imp2";

              ?>

            </p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia7">
            Modificar
          </button>
          </div>
        </div>        </div>
         <div class="col-3">
<div class="card" style="width: 15rem;">
<img class="card-img-top" src="ArchivosEOCancun/noticias1/noticia8.jpg" alt="Noticia 8">
          <div class="card-body">
            <p class="card-text">
            <?php
              if (isset($_POST['Not8Datos'])){
                $Not8Titulo=$_POST['titulo8'];
                $Not8Des=$_POST['NotDes7'];
                $Not8Query1=mysqli_query($conectar,"UPDATE noticias SET titulo='$Not8Titulo' WHERE idnoticia=9");
                $Not8Query2=mysqli_query($conectar,"UPDATE noticias SET descripcion='$Not8Des' WHERE idnoticia=9");
              }
              $Not8Query3=mysqli_query($conectar,"SELECT *FROM noticias WHERE idnoticia=9");

              while($Not8Var=$Not8Query3->fetch_assoc()){
                $Not8Imp1=$Not8Var['titulo'];
                $Not8Imp2=$Not8Var['descripcion'];

              }
              echo "Evento: $Not8Imp1";
              echo "<hr>";
              echo "Descripción: $Not8Imp2";

              ?>
            </p>
            <br>  
            <button class="btn btn-primary" data-toggle="modal" data-target="#Noticia8">
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
    <h4 class="text-center">Próximos eventos EOMéxico</h4>
    <br>
    <div class="row container-fluid">
    <div class="col-3">
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="ArchivosEOCancun/ProxEventos/proxevento1.jpg" alt="Próximo Evento 1">
        <div class="card-body">
          <p class="card-text">
          <?php
              if (isset($_POST['EnviaEvento1'])){
                $ProxEven1Titulo=$_POST['ProxEvento1Titulo'];
                $ProxEven1Descripcion=$_POST['ProxEventoDescripcion'];
                $ProxEven1Query1=mysqli_query($conectar,"UPDATE eventos SET titulo='$ProxEven1Titulo' WHERE id=9");
                $ProxEven1Query2=mysqli_query($conectar,"UPDATE eventos SET descripcion='$ProxEven1Descripcion' WHERE id=9");
              }
              $ProxEven1Query3=mysqli_query($conectar,"SELECT *FROM eventos WHERE id=9");

              while($ProxEvento1Var1=$ProxEven1Query3->fetch_assoc()){
                $ProxEv1Imp1=$ProxEvento1Var1['titulo'];
                $ProxEv1Imp2=$ProxEvento1Var1['descripcion'];

              }
              echo "Evento: $ProxEv1Imp1";
              echo "<hr>";
              echo "Descripción: $ProxEv1Imp2";

              ?>
          </p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#ProxEvento1">
            Modificar
          </button>
        </div>
      </div>
      </div>

       <div class="col-3">
       <div class="card" style="width: 18rem;">
       <img class="card-img-top" src="ArchivosEOCancun/ProxEventos/proxevento2.jpg" alt="Próximo Evento 2">
  <div class="card-body">
    <p class="card-text">
    <?php
              if (isset($_POST['EnviaEvento2'])){
                $ProxEven2Titulo=$_POST['ProxEvento2Titulo'];
                $ProxEven2Descripcion=$_POST['ProxEvento2Descripcion'];
                $ProxEven2Query1=mysqli_query($conectar,"UPDATE eventos SET titulo='$ProxEven2Titulo' WHERE id=10");
                $ProxEven2Query2=mysqli_query($conectar,"UPDATE eventos SET descripcion='$ProxEven2Descripcion' WHERE id=10");
              }
              $ProxEven2Query3=mysqli_query($conectar,"SELECT *FROM eventos WHERE id=10");

              while($ProxEvento2Var1=$ProxEven2Query3->fetch_assoc()){
                $ProxEv2Imp1=$ProxEvento2Var1['titulo'];
                $ProxEv2Imp2=$ProxEvento2Var1['descripcion'];

              }
              echo "Evento: $ProxEv2Imp1";
              echo "<hr>";
              echo "Descripción: $ProxEv2Imp2";

              ?>
    </p>
    <button class="btn btn-primary" data-toggle="modal" data-target="#ProxEvento2">
            Modificar
          </button>
  </div>
</div>
      </div>
      <div class="col-3">
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
        <h5 class="modal-title" id="exampleModalLabel">Modificar Banner 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="ArchivosEOCancun/banners/banner1.jpg" alt="Banner1" class="img-thumbnail">
        <form action="ArchivosEOCancun/Banner.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="banner1">
          <input type="submit" class="btn btn-success" name="enviar1" value="Cargar">
        </form>
       
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
        <h5 class="modal-title" id="exampleModalLabel">Modificar Banner 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/banners/banner2.jpg" alt="Banner2" class="img-thumbnail">
        <form action="ArchivosEOCancun/Banner.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="banner2">
          <input type="submit" class="btn btn-success" name="enviar2" value="Cargar">
        </form>
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
      <img src="ArchivosEOCancun/banners/banner3.jpg" alt="Banner3" class="img-thumbnail">
        <form action="ArchivosEOCancun/Banner.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="banner3">
          <input type="submit" class="btn btn-success" name="enviar3" value="Cargar">
        </form>
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
      <img src="ArchivosEOCancun/banners/banner4.jpg" alt="Banner4" class="img-thumbnail">
        <form action="ArchivosEOCancun/Banner.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="banner4">
          <input type="submit" class="btn btn-success" name="enviar4" value="Cargar">
        </form>
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
      <img src="ArchivosEOCancun/banners/banner5.jpg" alt="Banner5" class="img-thumbnail">
        <form action="ArchivosEOCancun/Banner.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="banner5">
          <input type="submit" class="btn btn-success" name="enviar5" value="Cargar">
        </form>
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
      <img src="ArchivosEOCancun/banners/banner6.jpg" alt="Banner6" class="img-thumbnail">
        <form action="ArchivosEOCancun/Banner.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona el nuevo Banner a cargar</small></p>
          <input type="file" class="btn btn-primary" name="banner6">
          <input type="submit" class="btn btn-success" name="enviar6" value="Cargar">
        </form>
      </div>
     
    </div>
  </div>
</div>
<!--modales modal banner 6-->

<!--modales noticia principal-->
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
      <img src="ArchivosEOCancun/noticiap/noticiap.jpg" alt="NoticiaPrincipal" class="img-thumbnail">
        <form action="ArchivosEOCancun/NoticiaPrincipal.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia">
          <br>
          <br>
          <input type="submit" class="btn btn-success" name="enviar7" value="Cargar Imágen">
        </form>
      </div>
      <div class="modal-footer">
          <form method="POST">
          <!--<div class="mb-1">-->
            <!--<textarea class="form-control" name="descripcion" ></textarea>-->
            <input type="text" name="descripcion" class="form-control">
            <div name="passwordHelpBlock" class="form-text">
              Ingresa Un Titulo, el cual se mostrará en la página principal de EOMexico          
            </div>
            <!--<input type="text" class="form-control" name="descripcion">-->
            <input type="submit" name="principal" value="Cargar Título" class="btn btn-success">
          <!--</div>-->
          </form>
      </div>
    </div>
  </div>
</div>
<!--modales modal noticia principal -->

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
      <img src="ArchivosEOCancun/noticias1/noticia1.jpg" alt="Noticia#1" class="img-thumbnail">
        <form action="ArchivosEOCancun/Noticias.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia1">
          <input type="submit" class="btn btn-success" name="enviar8" value="Cargar Imágen">
        </form>
      </div>

      <div class="modal-footer">
      <div class="mb-3">
        <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un Titulo</label>
            <textarea class="form-control" name="titulo1" rows="3"></textarea>
            <br>
            <label for="exampleInputEmail1" class="form-label">Agrega Una Descripción</label>
            <textarea class="form-control" name="NotDes1" rows="3"></textarea>
            <br>
            <input type="submit" name="Not1Datos" value="Cargar Datos" class="btn btn-success">
        </form>
          </div>
      </div>
      <br>
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
      <img src="ArchivosEOCancun/noticias1/noticia2.jpg" alt="Noticia#2" class="img-thumbnail">
        <form action="ArchivosEOCancun/Noticias.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia2">
          <br>
          <input type="submit" class="btn btn-success" name="enviar9" value="Cargar">
        </form>
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="titulo2" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="NotDes2" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="Not2Datos" value="Cargar Datos">
            </form>
          </div>
      </div>
      <br>
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
      <img src="ArchivosEOCancun/noticias1/noticia3.jpg" alt="Noticia#3" class="img-thumbnail">
        <form action="ArchivosEOCancun/Noticias.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia3">
          <br>
          <input type="submit" class="btn btn-success" name="enviar10" value="Cargar">
        </form>
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="titulo3" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="NotDes3" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="Not3Datos" value="Cargar Datos">
            </form>
          </div>
      </div>
      <br>
     
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
      <img src="ArchivosEOCancun/noticias1/noticia4.jpg" alt="Noticia#4" class="img-thumbnail">
        <form action="ArchivosEOCancun/Noticias.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia4">
          <br>
          <input type="submit" class="btn btn-success" name="enviar11" value="Cargar">
        </form>
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="titulo4" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="NotDes4" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="Not4Datos" value="Cargar Datos">
            </form>
          </div>
      </div>
      <br>
    </div>
  </div>
</div>
<!--modales modal noticia4 -->

<!--modales noticia 5-->
<div class="modal fade" id="Noticia5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Evento 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/noticias1/noticia5.jpg" alt="Noticia#5" class="img-thumbnail">
        <form action="ArchivosEOCancun/Noticias.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia5">
          <br>
          <input type="submit" class="btn btn-success" name="enviar12" value="Cargar">
        </form>
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="titulo5" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="NotDes5" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="Not5Datos" value="Cargar Datos">
            </form>
          </div>
      </div>
      <br>
    </div>
  </div>
</div>
<!--modales modal noticia5 -->

<!--modales noticia 6-->
<div class="modal fade" id="Noticia6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Evento 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/noticias1/noticia6.jpg" alt="Noticia#6" class="img-thumbnail">
        <form action="ArchivosEOCancun/Noticias.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia6">
          <br>
          <input type="submit" class="btn btn-success" name="enviar13" value="Cargar">
        </form>
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="titulo6" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="NotDes6" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="Not6Datos" value="Cargar Datos">
            </form>
          </div>
      </div>
      <br>
    </div>
  </div>
</div>
<!--modales modal noticia6 -->

<!--modales noticia 7-->
<div class="modal fade" id="Noticia7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 7</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/noticias1/noticia7.jpg" alt="Noticia#7" class="img-thumbnail">
        <form action="ArchivosEOCancun/Noticias.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia7">
          <br>
          <input type="submit" class="btn btn-success" name="enviar14" value="Cargar">
        </form>
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="titulo7" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="NotDes7" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="Not7Datos" value="Cargar Datos">
            </form>
          </div>
      </div>
      <br>
    </div>
  </div>
</div>
<!--modales modal noticia7 -->

<!--modales noticia 8-->
<div class="modal fade" id="Noticia8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia 8</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/noticias1/noticia8.jpg" alt="Noticia#8" class="img-thumbnail">
        <form action="ArchivosEOCancun/Noticias.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="noticia8">
          <br>
          <input type="submit" class="btn btn-success" name="enviar15" value="Cargar">
        </form>
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="titulo8" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="NotDes8" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="Not8Datos" value="Cargar Datos">
            </form>
          </div>
      </div>
      <br>
    </div>
  </div>
</div>
<!--modales modal noticia8 -->




<!--modales Evento1-->
<div class="modal fade" id="ProxEvento1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Noticia6</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/ProxEventos/ProxEvento1.jpg" alt="Proximo Evento 1" class="img-thumbnail">
        <form action="ArchivosEOCancun/ProxEventos.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="ProxEvento1">
          <br>
          <input type="submit" class="btn btn-success" name="enviar17" value="Cargar">
        </form>
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="ProxEvento1Titulo" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="ProxEventoDescripcion" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="EnviaEvento1" value="Cargar Datos">
            </form>
          </div>
      </div>

      <br>
    </div>
  </div>
</div>
<!--modales modal Evento 1 -->



<!--modales Evento2-->
<div class="modal fade" id="ProxEvento2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Evento 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="ArchivosEOCancun/ProxEventos/ProxEvento2.jpg" alt="Proximo Evento 2" class="img-thumbnail">
        <form action="ArchivosEOCancun/ProxEventos.php" method="POST" enctype="multipart/form-data">
        <p class="card-text"><small class="text-muted">Selecciona la nueva noticia a cargar</small></p>
          <input type="file" class="btn btn-primary" name="ProxEvento2">
          <br>
          <input type="submit" class="btn btn-success" name="enviar18" value="Cargar">
        </form>      
      </div>
      <div class="modal-footer">
      <div class="mb-3">
            <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Agrega Un titulo</label>
            <textarea class="form-control" name="ProxEvento2Titulo" rows="3"></textarea>
            <label for="exampleInputEmail1" class="form-label">Agrega una descripción</label>
            <textarea class="form-control" name="ProxEvento2Descripcion" rows="3"></textarea>
            <br>
            <input type="submit" class="btn btn-success" name="EnviaEvento2" value="Cargar Datos">
            </form>
          </div>
      </div>
      <br>
     
    </div>
  </div>
</div>
<!--modales modal noticia4 -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>