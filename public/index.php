<?php
// abrir a sessao

use core\class\Database;

session_start();

//Carregar o config 
require_once('../config.php');

require_once('../vendor/autoload.php');

$a = new Database();

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