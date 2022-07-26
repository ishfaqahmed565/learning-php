<?php
App::get('database')->insert('names',
[
    'name' => $_POST['name']
]
);
  header('Location: /')
?>