<?php

function dbConnect() {
    try
     {
     $db = new PDO('mysql:host=localhost;dbname=magicbox;charset=utf8', 'root',
    '');
     }
     catch(Exception $e){
     die( 'Erreur : '.$e->getMessage() );
     } 
    return $db;
    }