<?php
class Conexion {
    
    private static $instance = null;
    
    public static function getConexion(){
        if(self::$instance == null) {
            self::$instance = new PDO('mysql:host=localhost;dbname=tienda;charset=utf8', 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
    
}
