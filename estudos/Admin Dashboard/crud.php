<?php

class Students
{
    private $pdo;
    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:dbname=testes;host=localhost", "root", "");

        } catch (PDOException $e) {
            echo "FALHA AO CONECTAR-SE" . $e;
        }

    }

    // Create
    public function adicionar($email, $nome = '', $pass)
    {
        if ($this->existeEmail($email) == false) {
            $sql = 'INSERT INTO formularios (nome,email,pass) VALUES (:nome,:email,:pass)';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':password', $pass);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    //Read
    public function getNome($email)
    {
        $sql = 'SELECT nome FROM formulario WHERE email = :email';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $info = $sql->fetch();
            return $info['nome'];
        } else {
            return '';
        }
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM userForms';
        $sql = $this->pdo->query($sql);
        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }
    private function editar($nome, $email)
    {
        if ($this->existeEmail($email)) {
            $sql = 'UPDATE userForms SET nome = :nome WHERE email = :email';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    private function excluir($email)
    {
        if ($this->existeEmail($email)) {
            $sql = 'DELETE FROM userForms WHERE email = :email';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }
    private function existeEmail($email)
    {
        $sql = 'SELECT * FROM userForms WHERE email = :email';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}
