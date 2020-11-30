<?php 
class DB_Connection{
    private static $instance = NULL;
    
    
    public static function getInstance(){
        if(isset(self::$instance)){
            $db_host = "localhost";
            $db_name = "laptopshop";
            $db_user = "root";
            $db_pass = "";

            try{
                self::$instance = new PDO("mysql:host=$db_host;dbname=$db_name,$db_user,$db_pass");
                self::$instance->exec("SET NAMES 'utf8'");
            }catch(PDOException $ex){
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}
?>