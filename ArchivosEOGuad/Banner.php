<?php
if (isset($_POST['enviar1'])){
    $var1=move_uploaded_file($_FILES['banner1']['tmp_name'], "banners/banner1.jpg");
    if(!$var1){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
}

//banner 2
if (isset($_POST['enviar2'])){
    $var2=move_uploaded_file($_FILES['banner2']['tmp_name'], "banners/banner2.jpg");
    if(!$var2){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
}

//banner3
if (isset($_POST['enviar3'])){
    $var3=move_uploaded_file($_FILES['banner3']['tmp_name'], "banners/banner3.jpg");
    if(!$var3){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
}
//banner4
if (isset($_POST['enviar4'])){
    $var4=move_uploaded_file($_FILES['banner4']['tmp_name'], "banners/banner4.jpg");
    if(!$var4){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
}
//banner5
if (isset($_POST['enviar5'])){
    $var5=move_uploaded_file($_FILES['banner5']['tmp_name'], "banners/banner5.jpg");
    if(!$var5){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
}
//banner6
if (isset($_POST['enviar6'])){
    $var6=move_uploaded_file($_FILES['banner6']['tmp_name'], "banners/banner6.jpg");
    if(!$var6){
        echo "<script>
        alert('Ocurrió un error al realizar la carga de archivo, intenta nuevamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Archivo cargado correctamente');
        location.href='../MyPanelGuad.php';
        </script>";
    }
}
?>