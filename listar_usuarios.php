<?php 
include_once "config/conexao.php";

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado = mysqli_query($conn, $sql);

if($resultado && $resultado->num_rows != 0){
    while($row_usuario = mysqli_fetch_assoc($resultado)){
        echo "Nome: "  . ucwords($row_usuario['nome']). "<br>";
        echo "Email: " . ucwords($row_usuario['email']). "<br>";
        echo "<hr>";
    }
} 
else {
    echo "<h2>Nenhum usuário encontrado!</h2>";
}

?>