<?php 
include_once "config/conexao.php";

$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qtd_result_pagina = filter_input(INPUT_POST, 'qtd_result_pagina', FILTER_SANITIZE_NUMBER_INT);

// Calcular início da visualização
$inicio = ($pagina * $qtd_result_pagina) - $qtd_result_pagina;

$sql = "SELECT * FROM usuarios ORDER BY id DESC LIMIT $inicio, 10";
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
        <?php  endwhile; ?>

</tbody>
</table>

<?php 

// Paginação, somar quantidade de registros
$contar = "SELECT COUNT(id) AS num_result FROM usuarios";

else: 
    echo "<div class='alert alert-warning' role='alert'>Nenhum usuário cadastrado!</div>";
endif; 

?>