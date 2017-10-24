<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {


    case '/':
        
        require './app/views/index.html';
        break;

    case '/game':
        $testeController->game();
        break;

    case '/nome':
        $testeController->nome();
        break;

    case '/win';
        require './app/views/win.php';
        break;

    case '/enviar';
        $testeController->enviar();
        break;

    case '/score';
        $testeController->score();
        break;

    default:
        die('ERRO 404');
        break;
}
