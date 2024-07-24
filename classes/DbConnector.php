<?php
namespace classes;
use PDO;

class DbConnector{
    private $host="localhost";
    private $dbname="travel_planner";
    private $dbuser="visagan";
    private $dbpw="visagan";
    
    
    
    public function getConnection(){
        $dsn="mysql:host=$this->host;dbname=$this->dbname";
        
        try {
          $con  =new PDO($dsn, $this->dbuser, $this->dbpw);
          return $con;
        
        } catch (PDOException $exc) {
            die( "ERROR: ".$exc->getMessage());
        }
            
        
    }
    
    
}

?>