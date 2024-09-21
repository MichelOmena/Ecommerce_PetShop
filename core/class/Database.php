<?php

namespace core\class;

use PDO;
use PDOException;

class Database{

    private $connection;

    //=============================================================================
    //1 - Ligar a base de dados
    private function TurnOn(){

        $this->connection = new PDO(
            'mysql:'.
            'host='.MYSQL_SERVER.';'.
            'dbname='.MYSQL_DATABASE.';'.
            'charset='.MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)
        );
    }


    //=============================================================================
    private function TurnOff(){
        //desliga-se da base de dados
        $this->connection = null;
    }

    //=============================================================================
    //CRUD
    //=============================================================================
    public function select($sql, $parametros = null){

        // executa funcao de pesquisa de SQL
        
    }
}
