<?php

class Conexion
{
    var $mysql;
    public $server = 'localhost';

    public $user = 'root';

    public $password = '';

    public $bd = 'nata_sport';

    public function __construct()
    {
        $this->mysql = new mysqli($this->server, $this->user, $this->password, $this->bd);
        if ($this->mysql->connect_error) {

            die('fallo de conexion' . $this->mysql->connect_error);
        } else {
            echo 'conexion exitosas';
        }
    }



    public function getConexion()
    {
        return $this->mysql;
    }
}



?>