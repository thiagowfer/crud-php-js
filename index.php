<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>CRUD PHP JS</title>
</head>
<body>
<div class="container">
    <h2 class="mt-4 mb-4">Listar Usuários</h2>
    <span id="conteudo"></span>
</div>   

<script>
    var pagina = 1; // página inicial
    var qtd_result_pagina = 10; // quantidade de registro por página
    
    $(document).ready(function(){
        listarUsuario(pagina, qtd_result_pagina);
    });

    function listarUsuario(pagina, qtd_result_pagina){
        var dados = {
            pagina: pagina,
            qtd_result_pagina: qtd_result_pagina
        }

        $.post('listar_usuarios.php', function(retorna){
            $("#conteudo").html(retorna);
        });
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
</script>

</body>
</html>