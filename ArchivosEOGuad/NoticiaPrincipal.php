<?php
if (isset($_POST['enviar7'])){
    $var1=move_uploaded_file($_FILES['noticia']['tmp_name'], "noticiap/noticiap.jpg");
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