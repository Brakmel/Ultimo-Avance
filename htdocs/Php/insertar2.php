<?php
include("conexion.php");
$con=conectar();

$Titulo=$_POST['Titulo'];
$descripcion=$_POST['descripcion'];
$imagen=$_POST['imagen'];
$precio=$_POST['precio'];


$sql="INSERT INTO gohan VALUES('$Titulo','$descripcion','$imagen','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Administrador2.php");
    
}else { echo "No se pudo insertar";
}
?>