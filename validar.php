<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","bjorshoop");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contra='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:inicio.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION EL USUARIO NO EXISTE</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
