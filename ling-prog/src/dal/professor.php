<?php
class ProfessorDAL {
    private $con;

    public function __construct($connexion) {
        $this->$con = $connexion;
    }
    
    public function mountTable() {
        $ppr = $this->$con->prepare("create table professor (
            Cod_Professor int not null,
            Nome varchar(255) not null
        );")->execute();
    }

    public function listAll() {
        return $ppr = $this->$con->prepare("select * from professor")->execute();
    }

    public function addOne() {
        return $ppr = $this->$con->prepare("insert into professor (Cod_Professor, Nome) values (:cod_professor, :nome)")
        ->execute();
    }
}