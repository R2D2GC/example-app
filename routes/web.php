<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hola mundo' ;
});

Route::get('/posts', function() { //rutas definidas
    return 'como funcionan las rutas';
});

Route::get('/posts/create', function(){
    return "Formulario de creacion";
});

Route::get('/posts/{post}', function($post){
    return "rutas variables {$post}";
});