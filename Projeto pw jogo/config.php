<?php
//declaração dos namespaces dos controladores e instanciação dos objetos
use Project\Controller\ TesteController;
$testeController = new TesteController();


//configuração do banco de dados
$_ENV['config'] = [
    'host' => 'localhost',
    'dbname' => 'pwjogo',
    'user' => 'root',
    'password' => ''
];
