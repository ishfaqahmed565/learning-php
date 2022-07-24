<?php

$names = $app['database']->selectAll('names');
var_dump($tasks);
require 'views/index.view.php';