<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir no BD</title>
</head>

<body>

    <?php

    //importa dos dados do banco com método include()
    include("conexao.php");

    //cria variáveis com valores digitados na interface (index.html)
    $nome  = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];

    //query do sql
    $sql = mysqli_query($banco, "insert into cadastro values(null, '$nome', '$cpf', '$email', '$endereco');");

    if($sql) {
        echo "<br>Cliente cadastrado :)";
    } else {
        echo "Não foi possível cadastrar o cliente :(".mysqli_error($banco);
    }

    mysqli_close($banco);


    ?>

</body>

</html>