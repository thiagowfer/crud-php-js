<?php 
include_once "config/conexao.php";

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado = mysqli_query($conn, $sql);
?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        </tr>
    </thead>
    <tbody>

<?php 
if($resultado && $resultado->num_rows != 0):
    while($row_usuario = mysqli_fetch_assoc($resultado)):
?>

    <tr>
        <th> <?php echo $row_usuario['id'];    ?></th>
        <td> <?php echo ucwords($row_usuario['name']);  ?></td>
        <td> <?php echo $row_usuario['email']; ?></td>
    </tr>

<?php 
    endwhile;
endif; 
?>

</tbody>
</table>