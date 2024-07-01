<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/ico/php.ico" type="image/x-icon"> <!-- icone da aba -->
    <title> PHP🐘 </title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- importando fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="cabecalho">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" width="70px" />
        <!-- <h1>PHP 🐘</h1> -->
        <h2>Índice dos exercícios</h2> 
    </header>

    <main class="principal">

        <div class="conteudo">
            <nav class="modulos">
                <!-- CRIANDO MÓDULOS PARA OS EXERCÍCIOS -->
                <div class="modulo verde">
                    <h3>MÓDULO 01 - </h3>
                    <ul> <!-- link para acesso ao exercício -->
                        <li> <a href="exercise.php"> EXERCÍCIOS </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3> MÓDULO 02 - </h3>
                    <ul>
                        <li> <a href="#"> EXERCÍCIOS </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>MÓDULO 03 -</h3>
                    <ul>
                        <li> <a href="#">EXERCÍCIOS</a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>MÓDULO 04 - </h3>
                    <ul>
                        <li> <a href="#">EXERCÍCIOS</a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>MÓDULO 05 - </h3>
                    <ul>
                        <li> <a href="#">EXERCÍCIOS</a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>MÓDULO 06 - </h3>
                    <ul>
                        <li> <a href="#">EXERCÍCIOS</a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        <li> <a href="#"> ... </a> </li>
                        
                    </ul>
                </div>
                <!-- + módulos criados de acordo com o avanço dos estudos - alguns já com layout css -->
            </nav>

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