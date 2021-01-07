<?php

$pg = isset($_GET['pg']);

if ($pg) {
//verdadeiro
    switch ($_GET['pg']) {

        case 'contato':

            //Incluir a pagina Contato
            include_once 'paginas/includes/header.php';
            include_once 'paginas/contato.php';
            include_once 'paginas/includes/fooder.php';
            break;

        case 'inicio':

            //Incluir a pagina Inicio
            include_once 'paginas/includes/header.php';
            include_once 'paginas/inicio.php';
            include_once 'paginas/includes/fooder.php';
            break;

        case 'sobre':

            //Incluir a pagina Sobre
            include_once 'paginas/includes/header.php';
            include_once 'paginas/sobre.php';
            include_once 'paginas/includes/fooder.php';
            break;

        case 'servicos':

            //Incluir a pagina Servicos
            include_once 'paginas/includes/header.php';
            include_once 'paginas/servicos.php';
            include_once 'paginas/includes/fooder.php';

            break;

        case 'produtos':

            //Incluir a pagina Produtos
            include_once 'paginas/includes/header.php';
            include_once 'paginas/produtos.php';
            include_once 'paginas/includes/fooder.php';
            break;

        case 'produtos2':

            //Incluir a pagina Produtos2
            include_once 'paginas/includes/header.php';
            include_once 'paginas/produtos2.php';
            include_once 'paginas/includes/fooder.php';
            break;

        case 'login':

            //Incluir a pagina Login
            include_once 'paginas/login.php';
            break;

        case 'twitter':

            //Incluir a pagina Login2
            include_once 'paginas/twitter.php';
            break;

        case 'facebook':

            //Incluir a pagina Login3
            include_once 'paginas/facebook.php';
            break;

        case 'instagram':

            //Incluir a pagina Login4
            include_once 'paginas/instagram.php';
            break;

        default:

            //Pagina de Erro
            echo 'Página não encontrada <br> Digite esse negócio direito';
            break;
    }
} else {
//falso
    include_once 'paginas/includes/header.php';
    include './paginas/inicio.php';
    include_once 'paginas/includes/fooder.php';
//    echo 'quando não encontra a GET';
}
