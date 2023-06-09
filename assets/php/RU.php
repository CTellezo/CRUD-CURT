<?php

require_once 'C:/xampp/htdocs/CRUDTR/CRUD405/assets/php/config.php';

$valido['success']=array('success'=>false,'mensaje'=>"");

if ($_POST) {
    $correo=$_POST['correo'];
    $contraseña=md5($_POST['contraseña']);
    $nombre=$_POST['nombre'];

    $sql="SELECT * FROM usuario WHERE correo='$correo'";
    $resultado=$cx->query($sql);
    $n=$resultado->num_rows;

    if($n==0){
        $sqlInsetar="INSERT INTO usuario VALUES(null, '$correo', '$contraseña', '$nombre')";
        if ($cx->query($sqlInsetar)===true) {
            $valido['success']=true;
            $valido['mensaje']="SE GUARDO PERFECTAMENTE";
        }else{
        $valido['success']=false;
        $valido['mensaje']="ERROR: NO SE GUARDO";
   }
}else{
     $valido['success']=false;
     $valido['mensaje']="EL CORREO ELECTRONICO YA ESTA EN USO";
}

}else{
   $valido['success']=false;
   $valido['mensaje']="NO SE GUARDO";
}
echo json_encode($valido);



?>