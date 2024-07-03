<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/ico/php.ico" type="image/x-icon"> <!-- icone da aba -->
    <title> Exercício 🐘</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- importando fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercise.css">
</head>
<body class="exercicio">
    <header class="cabecalho">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" width="70px" />
        <h2> PHP na prática 🎯 </h2> 
    </header>
    <nav class="navegacao">
        <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde"> SEM FORMATAÇÃO </a> <!-- pega o "bruto" -->
        <a href="index.php" class="vermelho"> Voltar </a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                //include("teste/teste.php") 
                //no navegador basta digitar = http://localhost:8080/exercise.php?dir=teste -> nada mais é que parametro para o diretório '?'
                //include($_GET['dir'] . "/teste.php"); 
                //include($_GET['dir] . "/" . $_GET['file] . ".php"); -ponto serve para concatenar
                //no navegador basta digitar = http://localhost:8080/exercise.php&file=teste -> pega diretamente o arquivo '&'
                //include("{$_GET['dir']}/{$_GET['file']}.php");

                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); //pega caminho absoluto
            ?>
        </div>

    </main>

    <footer class="rodape"> 
        <a href="https://github.com/ruan-lopes16" target="_blank"> <!-- colocando github para acessar -->
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original-wordmark.svg" width="40px"/>
        </a>
        <p>RUAN S. LOPES &copy; <?= date('Y');?></p> 
<!-- código php - "M" mês-extenso, "m" mês-número, "D" dia da semana(inglês), "d" dia-número, "Y" ano-completo, "y" ano-dois último digitos -->
        <a href="https://www.linkedin.com/in/ruanslopes/" target="_blank"> <!--colocado linkedim para acessar -->
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linkedin/linkedin-original.svg" width="40px"/>
        </a>
    </footer>
 
</body>
</html> 