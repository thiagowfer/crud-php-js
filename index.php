<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>CRUD PHP JS</title>
</head>
<body>
    
<span id="conteudo"></span>

<script>
    $(document).ready(function(){
        $.post('listar_usuarios.php', function(retorna){
            $("#conteudo").html(retorna);
        });
    });
</script>
</body>
</html>