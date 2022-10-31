<?php

// Importa o arquivo de configuração:
require('config.php');

/***********************************************
 * Todo o código PHP desta página começa aqui! *
 ***********************************************/

// Define o título da página:
$page_title = 'Faça contato';

/************************************************
 * Todo o código PHP desta página termina aqui! *
 ************************************************/

// Importa cabeçalho do tema:
require('header.php');

/********************************************************
 * Todo o conteúdo VISUAL da página (HTML) começa aqui! *
 ********************************************************/
?>

<h2>Faça contato</h2>
Nome: <input type="text"> <br>
Email: <input type="email"> <br>
Sua Mensagem: <input type="text"> <br>


<?php
/*********************************************************
 * Todo o conteúdo VISUAL da página (HTML) termina aqui! *
 *********************************************************/

// Importa rodapé do tema:
require('footer.php');
?>