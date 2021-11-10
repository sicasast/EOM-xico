<?php
if (isset($_POST['enviar20'])){
    $var1=move_uploaded_file($_FILES['Alianza1']['tmp_name'], "Alianzas/Alianza1.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../ArchivosEOCancun/Alianzas.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../ArchivosEOCancun/Alianzas.php';
        </script>";
    }
}

if (isset($_POST['enviar21'])){
    $var1=move_uploaded_file($_FILES['Alianza2']['tmp_name'], "Alianzas/Alianza2.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../ArchivosEOCancun/Alianzas.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../ArchivosEOCancun/Alianzas.php';
        </script>";
    }
}

if (isset($_POST['enviar22'])){
    $var1=move_uploaded_file($_FILES['Alianza3']['tmp_name'], "Alianzas/Alianza3.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../ArchivosEOCancun/Alianzas.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../ArchivosEOCancun/Alianzas.php';
        </script>";
    }
}
?>