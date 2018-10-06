<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>#Patchwork</title>
    <meta name="author" content="Guto Pereira (guto.pereira@live.com)">
    <meta name="robots" content="no-index,no-follow">
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
    <link rel="stylesheet" href="css/normalize.css"/>
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
        <li class="collection-item valign-wrapper" dataset-label="technology" onclick="change(this)"><i class="material-icons orange-text left">toggle_on</i> Tecnologia</li>
        <li class="collection-item valign-wrapper" dataset-label="popculture" onclick="change(this)"><i class="material-icons orange-text left">toggle_on</i> Cultura Pop</li>
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
    <section id="content-container" class="col s12">
      <ul class="collection">
        <li class="collection-item">label 1</li>
      </ul>
    </section>
    <!-- fim conteudo -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- materialize -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
  </body>
</html>