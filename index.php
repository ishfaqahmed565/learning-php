 <?Php

require 'functions.php';
$dbPassword = "";
$dbUser = "root";
$dbServer = "localhost";
$dbName = "mytodo";

try {
    $pdo = new PDO('mysql:host='.$dbServer.';dbname='.$dbName,$dbUser,$dbPassword);
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
$statement = $pdo->prepare('select * from todos');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
dd($tasks);
?>

