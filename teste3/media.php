<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do Aluno</title>
</head>
<body>

<div>
    <?php 
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

        if ($media >=7) {
            echo "O aluno foi aprovado com nota $media<br/>";
        }
        elseif ($media >= 5 and $media <= 6) {
            echo "O aluno está de recuperação com nota $media<br/>";
        }
        else{
            echo "O aluno foi reprovado com nota $media<br/>";
        }
    ?>
    <button><a href="index.html">Retornar</a></button> <!--Esse código está errado, a sequencia correta é tag <a> e depois dentro desta mesmo tag, a Tag <buuton>
        ex.:<a href="http://"><button></button></a> -->
        
</div>
</body>
</html>