<?php
/*
As alteracoes feitas foram:
1 - Juncao das duas condicoes, sendo uma delas verdadeiras, redireciona para a pagina do Google;
2 - Remocao do metodo exit() por ser considerado uma ma pratica de programacao utilizar este metodo depois de um header();
*/
if ( (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) || (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) ) {
	header("Location: http://www.google.com");
}