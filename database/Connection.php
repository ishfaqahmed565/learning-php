<?php

class Connection{
    
public static function make(){
    $dbPassword = "";
    $dbUser = "root";
    $dbServer = "localhost";
    $dbName = "mytodo";
        try {
            return new PDO('mysql:host='.$dbServer.';dbname='.$dbName,$dbUser,$dbPassword);
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    

}