<?php
class Pensioner {
    private $pdo;
    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=prev; charset=utf8; host=localhost", "root", "");
    }

    public function loginUser($user, $senha){
        $sql = "SELECT * FROM usuarios WHERE user = :user AND senha = :senha";
        $sql= $this->pdo->prepare($sql);
        $sql->bindValue(":user", $user);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $_SESSION['user'] = $data['user'];
            header("Location: index.php");
            exit;
        }
    }

    public function addPensioner($nome, $sobrenome, $cpf, $ender, $fone, $email, $salario, $data_pag, $tipo, $emprest, $parcelas, $valor){
        if($this->checkPensioner($cpf) == false){
            $sql = "INSERT INTO pensionista(nome, sobrenome, cpf, ender, fone, email, salario, data_pag, tipo, emprest, parcelas, valor) VALUES
            (:nome, :sobrenome, :cpf, :ender, :fone, :email, :salario, :data_pag, :tipo, :emprest, :parcelas, :valor)";
            $sql= $this->pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":sobrenome", $sobrenome);
            $sql->bindValue(":cpf", $cpf);
            $sql->bindValue(":ender", $ender);
            $sql->bindValue(":fone", $fone);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":salario", $salario);
            $sql->bindValue(":data_pag", $data_pag);
            $sql->bindValue(":tipo", $tipo);
            $sql->bindValue(":emprest", $emprest);
            $sql->bindValue(":parcelas", $parcelas);
            $sql->bindValue(":valor", $valor);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    public function editPensioner($id, $ender, $fone, $email){
        $sql = "UPDATE pensionista SET ender = :ender, fone = :fone, email = :email,  WHERE id = :id";
        $sql= $this->pdo->prepare($sql);
        $sql->bindValue(":ender", $ender);
        $sql->bindValue(":fone", $fone);
        $sql->bindValue(":email", $email);
        $sql->execute();
    }



    public function updateSalary($id, $salario, $emprest, $percent){
        $sql = "UPDATE pensionista SET $";
    }
// FAZER OS CALCULOS DE SALARIO , AUMENTO, DESCONTOS. ACRESCENTAR NA TABELA $PERCENT...



    public function getPensioner($cpf){
        $sql = "SELECT * FROM pensionista WHERE cpf = :cpf";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

        if($sql->rowCount() > 0 ){
            return $sql->fetch();
           
        } else {
            return array();
         }   
    }




    public function getAll(){
        $sql = "SELECT * FROM pensionista";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }


}