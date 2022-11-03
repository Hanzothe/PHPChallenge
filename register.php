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
        <h1 class=" h2 pt-1">Cadastre-se!</h1>
        <div class="container" style='position:relative; top:-10%'>
            <form method="POST">
                <div style="display:grid;place-items:center;">
                    <div class="form-outline mb-4 " style='width: 25%;'>
                        <input type="text" name='name' class="form-control" maxlength="30" />
                        <label class="form-label">Nome Completo</label>
                    </div>
                    <div class="form-outline mb-4 " style='width: 25%;'>
                        <input type="text" name='telefone' class="form-control" maxlength="30" />
                        <label class="form-label">Telefone</label>
                    </div>
                </div>
                <div style="display:grid;place-items:center;">
                    <div class="form-outline mb-4 " maxlength="40" style='width: 25%; '>
                        <input type="email" name='email' class="form-control" />
                        <label class="form-label">Usuário</label>
                    </div>
                    <div class="form-outline mb-4 " style='width: 25%;'>
                        <input type="password" name='senha' class="form-control" maxlength="15" />
                        <label class="form-label">Senha</label>
                    </div>
                    <div class="form-outline mb-4 " style='width: 25%;' maxlength="15">
                        <input type="password" name='confSenha' class="form-control" />
                        <label class="form-label">Confirmar Senha</label>
                    </div>
                </div>

                <div style='display:grid'>
                    <button type="submit" value='Cadastrar' class="btn btn-primary btn-block" style='width:25%; place-self: center;'>Cadastrar</button>

                </div>
            </form>
        </div>

        <?php
        if (isset($_POST['email'])) {
            $name = addslashes($_POST['name']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confirmarSenha = addslashes($_POST['confSenha']);

            if (!empty($name) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
                $u->conectar('registerdata', 'localhost', 'root', '');
                if ($u->msgErro == '') {
                    if ($senha == $confirmarSenha) {
                        if ($u->cadastrar($name, $telefone, $email, $senha)) {
        ?>
                            <div style="position:relative;">Cadastrado com sucesso! Acesse o conteúdo!</div>
                        <?php
                        } else {
                        ?>
                            <div style="position:relative;">Email já cadastrado!</div>
                        <?php
                        };
                    } else {
                        ?>
                        <div style="position:relative;">Senhas e confirmação não correspondem!</div>
                <?php
                    }
                } else {
                    echo "Erro: " . $u->msgErro;
                }
            } else {
                ?>
                <div style="position:relative;">Preencha todos os campos!</div>
        <?php
            }
        }


        ?>



        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript"></script>
        <script src="app.js"></script>
</body>

</html>