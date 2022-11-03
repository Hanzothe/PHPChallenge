<?php

class Usuario
{
    private $pdo;
    public $msgErro = '';
    public function conectar($name, $host, $usuario, $password)
    {
        global $msgErro;
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=" . $name . ";host=" . $host, $usuario, $password);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        };
    }
    public function cadastrar($name, $telefone, $email, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT id FROM users WHERE email = :e");
        $sql->bindValue(':e', $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $pdo->prepare("INSERT INTO users (name, telefone, email, password) VALUES (:n, :t, :e, :p) ");
            $sql->bindValue(':n', $name);
            $sql->bindValue(':t', $telefone);
            $sql->bindValue(':e', $email);
            $sql->bindValue(':p', md5($password));
            $sql->execute();
            return true;
        }
    }

    public function logar($email, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT id FROM users WHERE email = :e AND password = :p");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":p", md5($password));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
            session_start();
            $_SESSION['id'] = $data['id'];
            return true;
        } else {
            return false;
        }
    }
}
