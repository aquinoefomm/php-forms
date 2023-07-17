<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resultado</title>
</head>
<body>
    <header><h1>Resultado do Processamento</h1>
</header>
    <main>
        <?php 
            $nome = $_GET['nome']; // "??" Operador é o operador de coalescência nula. 
            $sobrenome = $_GET['sobrenome']; // "??" Operador é o operador de coalescência nula.
            if ($nome == null || $sobrenome == null){
                echo "<p> Por favor, preencha os dados!</p>"; 
            } else{
                echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p>";
            }
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>