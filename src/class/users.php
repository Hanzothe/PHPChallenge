<?php

class Usuario
{
    private $pdo;
    public $msgErro = '';
    public function conectar($nome, $host, $usuario, $senha)
    {
        global $msgErro;
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=" . $nome . ";host=" . $host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        };
    }
    public function cadastrar($nome, $telefone, $email, $senha)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT id FROM users WHERE email = :e");
    }

    public function logar($email, $senha)
    {
        global $pdo;
    }
}
