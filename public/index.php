<?php


use core\class\Database;
use core\class\functions;

// abrir a sessao
session_start();

//Carregar o config 
require_once('../config.php');

//Carrega todas as classes do projeto
require_once('../vendor/autoload.php');

$a = new Database();
$b = new functions();

$b->test();

echo 'OK';

/*
Carregar o config
Carregar classes
Carregar o sistema de rotas
      - mostrar loja
      - mostrar carinho
      - mostrar backoffice, etc
 */
?>