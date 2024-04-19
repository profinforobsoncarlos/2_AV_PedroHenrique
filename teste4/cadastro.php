<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <style>
        div{
            font: 11pt Arial
        }

    </style>
</head>
<body>

<div>
    <?php 
        $nome = $_GET["nome"];
        $data = $_GET["data"];
        $prof = $_GET["prof"];
        $dat = date('Y', strtotime($data)); #Pegando apenas o ano
        $idade = date('Y') - $dat;
        $email = $_GET["email"];

        echo "Você está cadastrado!<br/>";
        echo "Seu nome é $nome<br/>";
        echo "Sua idade é $idade<br/>";
        echo "Sua profisão é $prof<br/>";
        echo "Seu email cadastrado é $email<br/>";
    ?>
</div>
</body>
</html>