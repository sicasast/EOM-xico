<?php
if (isset($_POST['enviar8'])){
    $var1=move_uploaded_file($_FILES['noticia1']['tmp_name'], "noticias1/noticia1.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
}

if (isset($_POST['enviar9'])){
    $var1=move_uploaded_file($_FILES['noticia2']['tmp_name'], "noticias1/noticia2.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
}

if (isset($_POST['enviar10'])){
    $var1=move_uploaded_file($_FILES['noticia3']['tmp_name'], "noticias1/noticia3.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
}

if (isset($_POST['enviar11'])){
    $var1=move_uploaded_file($_FILES['noticia4']['tmp_name'], "noticias1/noticia4.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
}

if (isset($_POST['enviar12'])){
    $var1=move_uploaded_file($_FILES['noticia5']['tmp_name'], "noticias1/noticia5.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
}

if (isset($_POST['enviar13'])){
    $var1=move_uploaded_file($_FILES['noticia6']['tmp_name'], "noticias1/noticia6.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
}

if (isset($_POST['enviar14'])){
    $var1=move_uploaded_file($_FILES['noticia7']['tmp_name'], "noticias1/noticia7.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
}

if (isset($_POST['enviar15'])){
    $var1=move_uploaded_file($_FILES['noticia8']['tmp_name'], "noticias1/noticia8.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelCancun.php';
        </script>";
    }
}
?>