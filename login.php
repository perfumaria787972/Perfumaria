<?php
    $con = mysqli_connect("localhost", "root","", "bdperfumaria");

if(isset($_POST["cadastrar"])){
$login = $_POST["login"];
$senha = $_POST["senha"];
$sql = "SELECT * FROM g3_administrador WHERE login = '$login' and senha = '$senha'";
$query = mysqli_query($con,$sql) ;

    if($query > 0) {
        session_start();
        $_SESSION ['login']=$_POST ['login'];
        $_SESSION ['senha']=$_POST ['senha'];
        header('Location: arearestrita.php ');
        
    }
else{
    echo"<center><h1>Usuário ou senha Inválido! Tente novamente.</h1></center>";
    echo"<script>Loginfailed()</script>";
}    
}
?>

