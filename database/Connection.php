<?php

class Connection{
    
public static function make($config){
        try {
            
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['dbUser'],
                $config['dbPassword'],
                $config['options']
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    

}