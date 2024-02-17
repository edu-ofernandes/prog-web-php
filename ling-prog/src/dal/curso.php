<?php
class Curso {
    private PDO $con;

    public function __construct(PDO $connexion) {
        $this->$con = $connexion;
    }
    
    public function mountTable() {
        $this->$con->prepare("create table curso (
            Cod_curso integer NOT NULL Pk
        )")
    }
}