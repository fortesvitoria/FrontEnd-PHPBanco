<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar no BD</title>
</head>

<body>

    <?php

    //importa dos dados do banco com método include()
    include("conexao.php");

    //query do sql
    $sql = mysqli_query($banco, "select * from cadastro;");

    $linha = mysqli_num_rows($sql);

    echo "
        <p>Lista de dados</p>
        <br>
        <table>
            <tr>
            <td>Registro</td>
            <td>Nome:</td>
            <td>CPF:</td>
            <td>E-mail:</td>
            <td>Endereço:</td>
            </tr>
    ";

    for($i=0; $i<$linha; $i++) {
        $registro = mysqli_fetch_row($sql);
        echo "
            <tr>
            <td>$registro[0]</td>
            <td>$registro[1]</td>
            <td>$registro[2]</td>
            <td>$registro[3]</td>
            <td>$registro[4]</td>
            </tr>
        ";

    }
    echo "
    </table>
    ";


    ?>

</body>

</html>