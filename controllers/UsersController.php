<?php
class UsersController{
    public function index(){
        $users = App::get('database')->selectAll('names');
        
        view('users', compact('users'));
    }
    public function store(){
        App::get('database')->insert('names',
        [
            'name' => $_POST['name']
        ]
        );
            redirect('/users');
         
    }
}