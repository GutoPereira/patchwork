<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Patchwork</title>
    <meta name="author" content="Guto Pereira (guto.pereira@live.com)">
    <meta name="robots" content="no-index,no-follow">
    <link rel="stylesheet" href="css/normalize.css"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--[if lt IE 9]>
      <script src="js/siv/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/fonts.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/modals.css"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
  </head>
  <body class="has-fixed-sidenav">
    <!-- side nav -->
    <ul id="slide-out" class="sidenav sidenav-fixed">
      <div id="slide-content">
        <li>
          <div class="brand-logo">
            <img src="images/patchwork.png">
          </div>
        </li>
      </div>
      <div id="labels-holder">
        <ul class="collection">
          <li class="collection-item valign-wrapper noselect" dataset-label="interaction-design" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Design de Interação
          </li>
          <li class="collection-item valign-wrapper noselect" dataset-label="electronic-arts" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Arte Eletrônica
          </li>
          <li class="collection-item valign-wrapper noselect" dataset-label="prototyping" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Prototipação
          </li>
          <li class="collection-item valign-wrapper noselect" dataset-label="inteligent-objects" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Objetos Inteligentes
          </li>
          <li class="collection-item valign-wrapper noselect" dataset-label="data-visualization" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Visualização de dados
          </li>
        </ul>
      </div>
      <li>
        <footer class="page-footer">
          <div class="container">
            <div class="center-align">
              <sup>©</sup> 2018 - <a class="text-lighten-4 teal-text" href="http://gutopereira.com" target="_blank">Guto Pereira</a>
            </div>
          </div>
        </footer>
      </li>
    </ul>
    <!-- fim side nav -->
    <!-- conteudo -->
    <section id="content-container" class="row">
      <div class="container">
        <article class="col s4" data-labels="interaction-design electronic-arts prototyping intelligent-objects data-visualization">
          <div class="card">
            <div class="card-image modal-trigger">
              <img src="images/posts/1.png" alt="">
              <a class="modal-trigger" href="#modal1"><span class="card-title">RPG</span></a>
            </div>
          </div>
        </article>
      </div>
      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Gênesis</h4>

          <p>Durante a primeira aula com a presença da professora <a class="modal-trigger" href="#modal3">Rejane Spitz</a>, foi explicado o que era a disciplina e como nós deveríamos encarar o resto do semestre. Segundo ela, a disciplina é como se fosse uma grande colcha de retalhos, onde “aperitivos” de assuntos variados de mídia digital são expostos para que os alunos possam ter uma ideia das possibilidades da área dentro do design e da sociedade.</p>

          <p>A partir disso, surgiu toda a inspiração para o desenvolvimento desse blog. Seu conceito é simular uma colcha de retalhos digital, onde as postagens compõem um mosaico interativo. As postagens são filtradas por etiquetas definidas pelo usuário e expostas lado a lado.</p>

          <p>Para o projeto de design do blog, foram escolhidas as fontes <b><em>Open Sans Extra-bold italic</em></b> para os títulos, Open Sans Regular para o corpo de texto e <span style="font-family:'Raleway', sans-serif">Raleway</span> para títulos menores e inserções. Ambas as fontes são gratuitas e foram importadas pelo site Google Fonts.</p>

          <p>As cores que compõem a chamada quadricromia, Ciano, Magenta, Amarelo e Preto (abreviadas do inglês como <b class="cyan-text">C</b><b class="red-text">M</b><b class="yellow-text text-darken-2">Y</b><b>K</b>) foram utilizadas para desenvolver o logo, que se utiliza da forma de uma tralha (também chamada por “hashtag” ou “jogo da velha”) para representar um dos retalhos dessa grande colcha de retalhos digital.</p>

          <p>O framework <a href="https://materializecss.com/" target="blank">Materialize</a> foi utilizado para o desenvolvimento  visual do site, que foi totalmente programado pelo autor, <a href="http://gutopereira.com" target="blank">Augusto (Guto) Pereira</a>.</p>
        </div>
      </div>
      <!-- Modal Structure -->
      <div id="modal2" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
        </div>
      </div>
      <!-- Modal Structure -->
      <div id="modal3" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
        </div>
      </div>
    </section>
    <!-- fim conteudo -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- materialize -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
  </body>
</html>