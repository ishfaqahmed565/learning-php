<?php
function dd($val){
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>'; 
}
function connectToDb(){
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
    
    
    function fetchAllTasks($pdo){
        
        $statement = $pdo->prepare('select * from todos');
        
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_CLASS, "Task");
    };

