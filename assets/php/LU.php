<?php

require_once 'C:/xampp/htdocs/CRUDTR/CRUD405/assets/php/config.php';

$valido['success']=array('success'=>false,'mensaje'=>"", 'nombre'=>"");

if ($_POST) {
    $correo=$_POST['correo'];
    $contraseña=md5($_POST['contraseña']);
   

    $sql="SELECT * FROM usuario WHERE correo='$correo' AND contraseña='$contraseña'";
    $resultado=$cx->query($sql);
    $n=$resultado->num_rows;

    if($n>0){
        $row=$resultado->fetch_array();
            $valido['success']=true;
            $valido['mensaje']="BIENVENIDO " $row['nombre'];
            $valido['nombre']=$row['nombre'];
      }else{
        $valido['success']=false;
        $valido['mensaje']="EL CORREO YA ESTA EN USO";
   }
}else{
     $valido['success']=false;
     $valido['mensaje']="ERROR: NO SE GUARDO";
}
echo json_encode($valido);



?>