<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faixa Etária</title>
</head>
<body>

<div>
  <!--Apesar de seu código está rodando normalmente, ele está códificado de maneira errada. Confira no GitHub o modelo correto que o professor irá disponibilizar.-->
    <?php 
      $nome = $_GET["nome"];
      $idade = $_GET["idade"];

      if ($idade <= 11 ) {
        echo "$nome é criança<br/>";
      }
      elseif ($idade <=14) {
        echo "$nome é adolecente<br/>";
      }
      elseif ($idade <=18){
        echo "$nome é jovem<br/>";
      }
      elseif ($idade <= 64) {
        echo "$nome é adulto<br/>";
      }
      else {
        echo "$nome é idoso<br/>&#1F9D3";
      }
    ?>
    <button><a href="index.html"> Retornar</a></button>
</div>
</body>
</html>