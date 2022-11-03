<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('location: login.php');
  exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>

  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="main.css" />
</head>

<body>
  <div class="container w-75 h-75 bg-light p-3 position-absolute top-50 start-50 translate-middle overflow-auto shadow-4-strong rounded-2 text-center text-justify">
    <a class="fas fa-times fa-2x" href="quit.php" style='position:sticky; top: 1%;
    right: 97%; color: #39aea9;'></a>

    <h1 class="mb-3 h1 pt-5">Meu desafio!</h1>
    <div class="content">
      <div class="row px-5">
        <div class="col-md-8">
          <h5 class="mb-3 h5">Quem sou eu?</h5>
          <p class="" style="text-align: justify">
            Meu nome é Guilherme e me propus a desenvolver um projeto que
            utilize tecnologias que nunca usei em dois dias! Eu sou um
            estudante de desenvolvimento de software buscando minha primeira
            oportunidade na área. Também sou multiinstrumentista autodidata.
            Curso Ciência da Computação, além de fazer alguns outros cursos, a
            maior parte focado no Front-End e na Stack Javascript. Mas também
            sou fã de desafios e esse é mais um deles!
          </p>
          <h5 class="mb-3 h5">E qual é o Desafio?</h5>
          <p class="" style="text-align: justify">
            Bem, o desafio é desenvolver uma aplicação que envolva algumas
            tecnologias que tive pouco ou nenhum contato. Vamos usar Bootstrap, PHP e MySQL pro banco.
          </p>
        </div>
        <div class="col-md-4">
          <img src="img/foto.jpg" class="img-thumbnail" alt="Eu Mesmo" />
        </div>
      </div>
      <div class="row px-5 gap-4">
        <h3 class="mb-3 h3">Tecnologias</h3>
        <nav class="navbar navbar-expand-md navbar-light row" style="
              background-color: #39aea9;
              position: relative;
              left: 2%;
              border-radius: 10px;
            ">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="justify-content: center">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                Front-End
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                <li>
                  <a class="dropdown-item" href="#Bootstrap">Bootstrap</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                Back-End
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#php">PHP</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#MySQL">MySQL</a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>

        <p class="px-0" style="text-align: justify" style="--bs-rows: 3">

        <section id='Boostrap' class='rouded-0 shadow-5'>
          <H3>Bootstrap</H3>
          <p>
          <p>A Alma desse projeto é um framework de uma linguagem que tenho me afeiçoado cada dia mais: O CSS.</p> O Bootstrap é uma abstração de CSS que facilita MUITO a estilização do seu projeto com um conceito polêmico, o in-line CSS. Modificando a classe do seu elemento HTML você é capaz de obter uma performance altíssima as custas de um pouco de bagunça no código, afinal, as classes ocupam um espaço consíderavel da tag:</p>
          <figure>
            <img src="img/inline.jpg" class='img-thumbnail'></img>
            <figcaption>Sério...Olha isso!</figcaption>
          </figure>
          <p style=" text-align: justify">Talvez a parte mais legal do Bootstrap é que a documentação é incrível e você tem acesso a MUITAS opções no site. Eu particularmente usei o Material Design Bootstrap que combina os melhores recursos do Bootstrap 5 com features como Material Icons, Awesome Fonts e outras coisinhas mais!</p>

        </section>

        <section id="php" class='rouded-0 shadow-5'>
          <div class="row">
            <img class="col-md-4 img-thumbnail" src="img/php.jpg"></img>
            <div class="col-md-8">
              <H3>PHP</H3>
              <p class="" style="text-align: justify">
                Minha primeira experiência com PHP foi BEEM interessante. Comecei o projeto um completo leigo em PHP mas tenho uma base de programação orientada a objetos(POO) então foi só descobrir um pouco onde estava pisando. Sendo a primeira vez que mexo com backend desde a adolescência devo admitir que foi um pouco ameaçador a estrutura e tenho MUITO o que aprender. Eu sinto que preciso criar aplicações variadas no PHP para ter uma noção melhor, o conexão com o Banco de Dados me deu muitos problemas e a internet foi minha mãe nesses ultimos dois dias. A notificação de erro, o tal do Warning é algo que eu não pude deixar de notar, mas a coisa mais bizarra do PHP pra mim foi: A variável da variável...</p>
            </div>
            <div class="row">

              <div class="col-md-5">

                <p class="" style="text-align: justify">
                  As classes são um lugar confortável apesar de eu praticamente não usar no JS. Mas tem muitas coisas que são particulares ao PHP que eu não vou esquecer tão cedo:
                </p>
                <ol class="list-group list-group-light">
                  <li class="list-group-item d-flex justify-content-between align-items-start border">
                    <div class="ms-2 me-auto">

                      Para usar o que você quer precisa antes instanciar....
                    </div>

                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start border">
                    <div class="ms-2 me-auto">

                      Começamos variáveis com $ e nem precisamos tipar!
                    </div>

                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start border">
                    <div class="ms-2 me-auto">

                      Se organize em relação ao banco e sua estrutura!
                    </div>

                  </li>
                </ol>
              </div>
              <img class="col-md-7 img-thumbnail" src="img/class.jpg" alt='Uma classe'></img>


            </div>


        </section>
        <section id="MySQL" class='rouded-0 shadow-5'>
          <div class="row">

            <div class="col-md-5">
              <img class="col-md-5 img-thumbnail" src="img/mysql.jpg"></img>
              <H3>MySQL</H3>
              <p class="" style="text-align: justify">
                MySQL é incrível. Ele é bem tranquilo e extremamente intuitívo. Não vejo ele como uma linguagem de programação mas sim algo mais declarativo, mas não sou profundo conhecedor da tecnologia. Seria absurdo falar da minha experiência com o MySql e não falar do XAMPP. Sério, essa ferramente é incrível e já me salvou</p>


            </div>
            <div class='col-md-6 ' style="text-align: justify">
              <p>
                inumeras vezes, afinal, Banco de Dados são muito presentes e portanto já usei o XAMPP e o MySQL em outras oportunidades como no meu TCC da adolescência e em experiências com Wordpress. O meu banco de dados para essa aplicação ficou bem simples e utilitário.

              </p>
              <img class="col-6 img-thumbnail" src="img/bd.jpg" style="
    width: 558px;
    height: 246px;
"></img>
            </div>
        </section>

        </p>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="js/jquery-3.6.1.min.js"></script>
  <script type="text/javascript"></script>
  <script src="app.js"></script>
</body>


</html>