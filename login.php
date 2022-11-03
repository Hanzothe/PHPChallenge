<?php
require_once 'src/class/users.php';
$u = new Usuario;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Por favor, cadastre-se!</title>

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <div class="container w-75 h-75 bg-light p-3 position-absolute top-50 start-50 translate-middle overflow-auto shadow-4-strong rounded-2 text-center text-justify" style="display:grid; place-items:center;">
        <h1 class=" h2 pt-1 gap-1" style="position:relative;
        top:20%">Logue para ter acesso a minha mini-jornada!</h1>
        <div class="container" style="position:relative;
        top:-10%">
            <form method="POST">
                <div style="display:grid;place-items:center;">
                    <div class="form-outline mb-4 " style='width: 50%;'>
                        <input type="email" id="form1Example1" name="email" class="form-control" />
                        <label class="form-label" for="form1Example1">Email</label>
                    </div>
                    <div class="form-outline mb-4 " style='width: 50%;'>
                        <input type="password" id="form1Example2" class="form-control " name='senha' />
                        <label class=" form-label" for="form1Example2">Senha</label>
                    </div>
                </div>

                <div style='display:grid'>
                    <button type="submit" class="btn btn-primary btn-block" style='width:25%; place-self: center;'>Entrar</button>
                    <a href="register.php" style="position:relative;
                    top:20%">Cadastre-se</a>
                </div>
            </form>
        </div>
        <?php

        if (isset($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);


            if (!empty($email) && !empty($senha)) {
                $u->conectar('registerdata', 'localhost', 'root', '');
                if ($u->msgErro == '') {
                    if ($u->logar($email, $senha)) {
                        header('location: index.php');
                    } else {
                        echo "Email e/ou senha estão incorretos!";
                    }
                } else {
                    echo "Erro: " . $u->msgErro;
                }
            } else {
                echo "Preencha todos os campos!";
            }
        }
        ?>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript"></script>
        <script src="app.js"></script>
</body>

</html>