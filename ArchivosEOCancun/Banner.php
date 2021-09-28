<?php
if ($_POST['banner1']){
    $var1=copy($_FILES['banner1']['tmp_name'], "banners/banner1.jpg");
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

//banner 2
if ($_POST['banner2']){
    $var2=copy($_FILES['banner2']['tmp_name'], "banners/banner2.jpg");
    if(!$var2){
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

//banner3
if ($_POST['banner3']){
    $var3=copy($_FILES['banner3']['tmp_name'], "banners/banner3.jpg");
    if(!$var3){
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