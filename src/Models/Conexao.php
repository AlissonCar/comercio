<?php

namespace Scr\Models;

class Conexao {
    
    private static $instance;

    public static function getConn(){

        if(!isset(self::$instance)){
            self::$instance =
            new \PDO('mysql:host=localhost;dbname=pdo_ini3b_01;charset=utf8' ,'root', '12345678');
        }
            return self::$instance;
       
    }

}