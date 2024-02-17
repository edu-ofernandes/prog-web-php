<?php
class Connexion {
    private PDO $con;

    public function __construct() {
        $this->$con = new PDO('mysql:host=localhost;dbname=prova-php', "root","");
    }
    
}