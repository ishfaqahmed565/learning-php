<?php
require 'functions.php'; 


$task = [
    'title' => 'Make bed',
    'due'   => 'Every Morning',
    'assigned_to' =>'Ishfaq',
    
 ];
$task['completed'] = true;
require 'index.view.php';
?>
