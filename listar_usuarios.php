<?php 
include_once "config/conexao.php";

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado = mysqli_query($conn, $sql);
?>

<?php if($resultado && $resultado->num_rows != 0): ?>
    <table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        </tr>
    </thead>
    <tbody>

    <?php while($row_usuario = mysqli_fetch_assoc($resultado)): ?>
    <tr>
        <td> <?php echo $row_usuario['id'];    ?></td>
        <td> <?php echo ucwords($row_usuario['name']);  ?></td>
        <td> <?php echo $row_usuario['email']; ?></td>
    </tr>

<?php 
    endwhile;
else: 
    echo "<div class='alert alert-warning' role='alert'>Nenhum usuário cadastrado!</div>";
endif; 

?>


</tbody>
</table>