<?php
if (isset($_POST['enviarevento1'])){
    $var1=move_uploaded_file($_FILES['evento1']['tmp_name'], "eventos/evento1.jpg");
    $var2=$_POST['DesNot1'];
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../EventosCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../EventosCancun.php';
        </script>";
    }
}

if (isset($_POST['enviarevento2'])){
    $var1=move_uploaded_file($_FILES['evento2']['tmp_name'], "eventos/evento2.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../EventosCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../EventosCancun.php';
        </script>";
    }
}

if (isset($_POST['enviarevento3'])){
    $var1=move_uploaded_file($_FILES['evento3']['tmp_name'], "eventos/evento3.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../EventosCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../EventosCancun.php';
        </script>";
    }
}

if (isset($_POST['enviarevento4'])){
    $var1=move_uploaded_file($_FILES['evento4']['tmp_name'], "eventos/evento4.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../EventosCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../EventosCancun.php';
        </script>";
    }
}

if (isset($_POST['enviarevento5'])){
    $var1=move_uploaded_file($_FILES['evento5']['tmp_name'], "eventos/evento5.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../EventosCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../EventosCancun.php';
        </script>";
    }
}

if (isset($_POST['enviarevento6'])){
    $var1=move_uploaded_file($_FILES['evento6']['tmp_name'], "eventos/evento6.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../EventosCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../EventosCancun.php';
        </script>";
    }
}

if (isset($_POST['enviarevento7'])){
    $var1=move_uploaded_file($_FILES['evento7']['tmp_name'], "eventos/evento7.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../EventosCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../EventosCancun.php';
        </script>";
    }
}

if (isset($_POST['enviarevento8'])){
    $var1=move_uploaded_file($_FILES['evento8']['tmp_name'], "eventos/evento8.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../EventosCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../EventosCancun.php';
        </script>";
    }
}
?>
