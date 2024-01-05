<?php

    class Database{
        private $hostname = "31.170.160.103";
        private $database = "u935854194_iot";
        private $username = "u935854194_alex";
        private $password = "Alexgc24";
        private $charset = "utf8";

        function conectar()
        {
            try{
            $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . ";
            charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false 
            ];
            $pdo = new PDO($conexion, $this->username, $this->password, $options);
        //echo 'conexion exitosa';
            return $pdo;
        }catch(PDOException $e){
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
        }
    }
?>