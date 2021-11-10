<?php
if (isset($_POST['enviar17'])){
    $var1=move_uploaded_file($_FILES['ProxEvento1']['tmp_name'], "ProxEventos/ProxEvento1.jpg");
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

if (isset($_POST['enviar18'])){
    $var1=move_uploaded_file($_FILES['ProxEvento2']['tmp_name'], "ProxEventos/ProxEvento2.jpg");
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