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
          <li class="collection-item waves-effect waves-light valign-wrapper noselect" data-label="games" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Jogos
          </li>
          <li class="collection-item waves-effect waves-light valign-wrapper noselect" data-label="animation" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Animação
          </li>
          <li class="collection-item waves-effect waves-light valign-wrapper noselect" data-label="web-design" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Mobile / Web Design
          </li>
          <li class="collection-item waves-effect waves-light valign-wrapper noselect" data-label="interaction-design" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Design de Interação
          </li>
          <li class="collection-item waves-effect waves-light valign-wrapper noselect" data-label="electronic-arts" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Arte Eletrônica
          </li>
          <li class="collection-item waves-effect waves-light valign-wrapper noselect" data-label="prototyping" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Prototipação 3D
          </li>
          <li class="collection-item waves-effect waves-light valign-wrapper noselect" data-label="virtual-reality" onclick="change(this)">
            <i class="material-icons orange-text left">toggle_on</i> Realidade Virtual
          </li>
        </ul>
      </div>
      <li>
        <footer class="page-footer">
          <div class="container">
            <div class="center-align">
              <sup>©</sup> 2018 - <a class="text-lighten-2 teal-text" href="http://gutopereira.com" target="_blank">Guto Pereira</a>
            </div>
          </div>
        </footer>
      </li>
    </ul>
    <!-- fim side nav -->
    <!-- conteudo -->
    <section id="content-container" class="row">
      <div class="container">

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="games animation web-design interaction-design electronic-arts prototyping virtual-reality">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/1.png" alt="">
              <a class="modal-trigger" href="#modal1"><span class="card-title">GÊNESIS</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="games animation electronic-arts">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/2.png" alt="">
              <a class="modal-trigger" href="#modal2"><span class="card-title">RPG</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="web-design animation interaction-design electronic-arts">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/3.png" alt="">
              <a class="modal-trigger" href="#modal3"><span class="card-title">OLÁ, REJANE</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="games animation web-design interaction-design electronic-arts virtual-reality">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/4.png" alt="">
              <a class="modal-trigger" href="#modal4"><span class="card-title">SIGGRAPH</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="games web-design interaction-design electronic-arts virtual-reality">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/5.png" alt="">
              <a class="modal-trigger" href="#modal5"><span class="card-title">LAE</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="interaction-design prototyping">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/6.png" alt="">
              <a class="modal-trigger" href="#modal6"><span class="card-title">LAB DE VOLUME</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="prototyping virtual-reality">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/7.png" alt="">
              <a class="modal-trigger" href="#modal7"><span class="card-title">SKYNET</span></a>
            </div>
          </div>
        </article>
        
        <!-- post Structure -->
        <article class="col m4 s12" data-labels="web-design">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/8.png" alt="">
              <a class="modal-trigger" href="#modal8"><span class="card-title">REVOLUÇÃO MÓVEL</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="web-design interaction-design virtual-reality">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/9.png" alt="">
              <a class="modal-trigger" href="#modal9"><span class="card-title">UBIQUIDADE</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="interaction-design prototyping">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/10.png" alt="">
              <a class="modal-trigger" href="#modal10"><span class="card-title">BIOHACKING</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="games animation interaction-design electronic-arts prototyping virtual-reality">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/11.png" alt="">
              <a class="modal-trigger" href="#modal11"><span class="card-title">LIFE</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure -->
        <article class="col m4 s12" data-labels="interaction-design prototyping">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/12.png" alt="">
              <a class="modal-trigger" href="#modal12"><span class="card-title">MUNDO VUCA</span></a>
            </div>
          </div>
        </article>

        <!-- post Structure 
        <article class="col m4 s12" data-labels="animation interaction-design electronic-arts prototyping">
          <div class="card hoverable">
            <div class="card-image modal-trigger">
              <img src="images/posts/13.png" alt="">
              <a class="modal-trigger" href="#modal13"><span class="card-title">I SEE DATA</span></a>
            </div>
          </div>
        </article>-->

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
          <h4>RPG</h4>
          <p>No lugar da habitual <a class="modal-trigger" href="#modal3">aula de apresentação da disciplina</a>, na primeira aula os alunos assistiram a uma palestra ministrada pela equipe da Rio PUC Games (RPG), apresentados pelo professor Leonardo Cardarelli à turma.</p>

          <p>O RPG é um grupo multidisciplinar e independente de alunos que trabalham para a realização prática de jogos, sejam eles eletrônicos ou analógicos. Os alunos são divididos em áreas de interesse e em equipes para que possam dar seguimento a projetos reais de jogos para uma experimentação da dinâmica de trabalhar em uma equipe profissional e também poder levar novos jogos para o mercado.</p>

          <p>Os membros da equipe que participaram da apresentação tinham áreas e cargos bastante variados, que iam desde cargos mais burocráticos até os completamente práticos, na área de Game Design, Arte, Sonorização e Programação. Embora existam cargos, o que implicaria em uma hierarquia e uma cadeia de comando, o RPG é horizontal na hora de coleta de opiniões e de tomada de decisões dentro do time.</p>

          <p>Cada time fica responsável por um jogo, que pode ter diversas naturezas e características. Os times interagem entre si para troca de informações, playtests, feedbacks e tudo que auxilie no desenvolvimento do projeto. O intuito do desenvolvimento desses jogos é angariar e compartilhar conhecimento, ganhando vivência na área de jogos por meio de uma metodologia prática.</p>

          <p>Houve uma breve porém elucidativa explicação por tópicos das áreas de desenvolvimento de jogos, como Level Design, produção de Assets e partes da produção de jogos que são realizadas pelas equipes de jogos do mundo todo. Para mostrar a proporção da necessidade de mão de obra para a produção de um jogo, uma foto com uma das equipes de jogos da empresa Blizzard foi mostrada, em que praticamente toda a foto foi preenchida por funcionários da grande multinacional, mesmo que não representassem nem uma fração do total de empregados desta empresa.</p>

          <p>Fora as áreas de programação e sonorização, todas as outras também são divididas entre equipe analógica, que desenvolve boardgames e similares, e equipe digital, que utilizam de tecnologias virtuais para desenvolvimento de seus projetos.</p>

          <p>Perguntei aos palestrantes se haviam membros que estejam na área de programação e que também fizessem projetos analógicos, com interfaces físicas programadas. Apesar de não haver no momento nenhum membro que desenvolva esse tipo de interação na equipe, o grupo se mostrou aberto e interessado a essa possibilidade.</p>

          <p>Um ponto que foi mencionado e superficialmente explicado durante a apresentação é a existência de Game Jams ao redor do mundo. Game Jams são maratonas de desenvolvimento de jogos, onde pessoas ou grupos desenvolvem ao longo de um período curto (entre algumas horas e alguns dias) de tempo um projeto de jogos, com limitações e orientações iguais, para que possam posteriormente compartilhar seus resultados com os outros participantes.</p>

          <p>Já participei de um Game Jam no passado, o <a href="https://globalgamejam.org/" target="blank">Global Game Jam</a> , mas não conhecia o site que foi trazido para a apresentação, o <a href="http://www.indiegamejams.com/" target="blank">Indie Game Jams</a>, em que é possível visualizar todas as Game Jams cadastradas, quando começaram/começam e quando vão terminar, o que auxilia os desenvolvedores a se programarem para realizar os Jams que mais se adequam ao seu estilo de desenvolvimento.</p>

          <p>Durante as minhas pesquisas sobre o tema, foi possível constatar que o mercado de jogos está em constante crescimento e não mostra sinais de diminuir esse crescimento. Com projeções de arrecadação de 152 Bilhões de dólares americanos para o mercado de games para o ano de 2019, o que representaria um crescimento de mais de 10% em relação ao ano de 2018.</p>

          <p>O Brasil, ao contrário do que é divulgado pela mídia, não é o 4º país do mundo no consumo de games, ocupa a 13ª posição no ranking mundial. Apesar disso, o país vêm apresentando um amplo crescimento na área, com aumento no número de empresas de desenvolvimento de jogos e da oferta de capacitação para o desenvolvimento deste tipo de projetos.</p>

          <div class="divider"></div>
          <div class="section">
            <h5>Fontes:</h5>
            <ul>
              <li><a href="https://newzoo.com/insights/infographics/brazil-games-market-2018/" target="blank">https://newzoo.com/insights/infographics/brazil-games-market-2018/</a></li>
              <li><a href="https://newzoo.com/insights/rankings/top-100-countries-by-game-revenues/" target="blank">https://newzoo.com/insights/rankings/top-100-countries-by-game-revenues/</a></li>
              <li><a href="https://newzoo.com/insights/articles/global-games-market-reaches-137-9-billion-in-2018-mobile-games-take-half/" target="blank">https://newzoo.com/insights/articles/global-games-market-reaches-137-9-billion-in-2018-mobile-games-take-half/</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal3" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Olá, Rejane</h4>

          <div id="rejane-img" class="section">
            <img src="images/posts/3.png" class="circle responsive-image center-align" alt="" style="width:18rem;">
          </div>
          
          <p>Rejane havia chegado há pouco de uma viagem que fez enquanto participava de uma conferência internacional de computação gráfica, <a class="modal-trigger" href="#modal4">SIGGRAPH</a>, e após compartilhar suas experiências lá, apresentou a disciplina, o que ela significa para nós alunos de mídia digital e para a ela própria.</p>
          
          <p>A professora foi uma das pessoas que ajudou a criar o curso de Design de Mídias Digitais na PUC-Rio, então, para ela, recepcionar os calouros em uma aula que conta e mostra os aspectos da mídia digital que eles irão encontrar ao longo da graduação e de suas carreiras como designers é algo extremamente estimulante para ela. Ela escolheu dar essa aula e ter esse contato com os alunos, praticamente não faltando às aulas e sempre alterando e trazendo conteúdos novos para as palestras.</p>
          
          <p>Ela não se coloca em um lugar em relação aos alunos de superioridade, não finge nem dá a entender que sabe de tudo, muito pelo contrário, faz questão de mostrar que os professores também estão em constante processo de aprendizado e busca por conhecimento.</p>

          <p>A disciplina tem alguns “mandamentos” que são explicados sempre que a turma passa por uma situação que toque os temas deles. Até o momento, dois desses mandamentos foram explicados:</p>
          
          <ol>
            <li>“Pode perguntar, dizer que não sabe e medir para explicar”</li>
            <li>“Participar e falar qualquer coisa mesmo que pareça bobagem”</li>
          </ol>
          
          <p>Os alunos também fizeram um juramento com uma das mãos no peito e a outra levantada, em que prometiam respeito, participação, interesse e dignidade não só enquanto participam das aulas mas ao longo do curso de design e sua vida profissional também.</p>
          
          <p>Ao explicar a aula, Rejane disse que “é como se fosse uma colcha de retalhos, que junta assuntos relacionados à mídia digital”; que as aulas eram compostas de uma série de palestras, que seriam “aperitivos de conceitos de mídia digital” e alguns temas que seriam abordados nas palestras foram levantados:</p>
          
          <ul>
            <li>Animação</li>
            <li>Jogos</li>
            <li>Interfaces</li>
            <li>Sonorização</li>
            <li>Realidade Virtual (VR)</li>
            <li>Images Digitais</li>
            <li>Web Design</li>
            <li>Imersão</li>
            <li>Efeitos Especiais</li>
            <li>Impressão e Modelagem 3D</li>
            <li>Celulares e Dispositivos Móveis</li>
          </ul>

          <p>Esta apresentação da disciplina foi muito inspiradora e com toda certeza mostrou uma professora muito animada, curiosa e alegre, mas também que quer passar esse espírito aos alunos. Espero que eles tenham se sentido tocados com a motivação dessa senhora de 62 anos que tem seus olhos brilhando quando fala do que faz e transmite conhecimento. Eu sei que eu me senti.</p>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal4" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>SIGGRAPH</h4>

          <p>No ano de 2018, a conferência SIGGRAPH(“Special Interest Group on GRAPHics and Interactive Techniques” ou “Grupo de Interesse Especial em Gráficos e Técnicas Interativas” em tradução livre) aconteceu na cidade de Vancouver - British Columbia, no Canadá.</p>
          
          <p>A conferência contou com novidades na tecnologia partindo de profissionais, estudantes e pesquisadores do mundo todo e, como a nossa professora Rejane participou da conferência, compartilhou com a turma uma série de experiências que teve por lá.</p>
          
          <p>A primeira experiência compartilhada por ela foi “MARS: Home Planet”, da HP. Esta experiência em Realidade Virtual(VR) busca mostrar um possível desdobramento da existência humana, uma vez que existem planos para a colonização do planeta Marte nos próximos anos. Com um óculos de realidade virtual, fones de ouvido e uma cadeira com movimentos sincronizados ao da experiência, os visitantes se sentem imersos nessa nova realidade.</p>

          <div class="section">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/DU7A8Q00xWw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>

          <p>Neste ponto, a professora chamou atenção para o grau de responsabilidade ao se trabalhar com experiências de mídia digital, porque os seres humanos podem ser enganados pelos sentidos e a convencibilidade das interações levam a uma imersão tão grande que podem alterar de forma negativa o bem estar do usuário.</p>
          
          <p>Outra experiência compartilhada foi o uso de um dispositivo de EEG (Eletroncefalograma) para medir parâmetros do estado mental do usuário para alterar em tempo real um cenário virtual com um horizonte de mar e céu, em que a velocidade das nuvens, da maré e outras características do ambiente eram afetadas pelo seu estado emocional e concentração.</p>
          
          <p>A terceira foi o uso de um óculos de realidade virtual que permitia que o usuário desenhasse formas no ar em três dimensões com um controle nas mãos e, ao selecionar um modo de “teleportar”, o óculos mudava a posição do usuário nesse ambiente virtual desenhado baseado no local em que o controle das mãos era apontado.</p>

          <div class="section">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/TckqNdrdbgk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>          
          
          <div class="section">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/GozB7zlD1wQ?start=459" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal5" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>O LAE</h4>

          <p>Os professores de Design da PUC-Rio são divididos entre professores do quadro principal, 16 deles, e do quadro complementar, cerca de 100. Os professores do quadro principal são contratados por 40 horas semanais e chefiam laboratórios de pesquisa. Os laboratórios, por sua vez, são divididos em linhas de pesquisa; como a seguir:</p>
          
          <ul>
            <li>
              COMUNICAÇÃO, CULTURA E ARTES
              <ul>
                <li><a href="http://www.ladeh.com.br/">Dhis</a> – Laboratorio de Design de Historias</li>
                <li>LCD – Laboratório de Comunicação em Design</li>
                <li>LaRS – Laboratório de Representação Sensível</li>
                <li><a href="http://www.linc.net.br/">LINC-Design</a> – Laboratório Linguagem, Interação e Construção de Sentidos</li>
                <li>LABMEMO – Laboratório Design, Memória e Emoção</li>
              </ul>
            </li>
            <li>
              TECNOLOGIA, EDUCAÇÃO E SOCIEDADE
              <ul>
                <li><a href="http://www.nima.puc-rio.br/index.php/pt/grupos-de-pesquisa/lild.html">LILD</a> – Laboratório de Investigação em Living Design</li>
                <li><a href="http://lide.dad.puc-rio.br/">LIDE</a> – Laboratório Interdisciplinar Design Educação</li>
                <li><a href="http://lae.dad.puc-rio.br/">LAE</a> – Laboratório de Arte Eletrônica</li>
                <li>LGD – Laboratório de Gestão em Design</li>
                <li><a href="http://next.dad.puc-rio.br/">NEXT</a> – Núcleo de Experimentação Tridimensional</li>
                <li>LDS – Laboratório de Design Socioambiental</li>
                
              </ul>
            </li>
            <li>
              ERGONOMIA, USABILIDADE E HCI
              <ul>
                <li><a href="http://www.leui.dad.puc-rio.br/">LEUI</a> – Laboratório de Ergodesign e Usabilidade de Interfaces</li>
              </ul>
            </li>
          </ul>

          <p>O laboratório chefiado pela professora Rejane Spitz é o LAE, que busca integrar as novidades tecnológicas e novas formas de interações multimidiáticas na formação dos profissionais de Design da PUC-Rio.</p>
          
          <p>Os projetos criados por esse laboratório remontam uma história que vem sendo traçada desde 1996, como no caso do website para a banda Barão Vermelho até, mais recentemente, em 2014, o projeto “Sentidos do Nascer”.</p>
          
          <p>Um projeto de iniciação científica atrelado ao LAE, “DYET” (“Do You Eat This?” ou “Você come isso?” em tradução livre), foi apresentado. Este projeto é um aplicativo gameficado que visa ilustrar as substâncias danosas presentes nos alimentos processados que são de comum acesso à maioria da população. Ao escanear o código do produto, o jogador coleta cards relativos às substâncias presentes nele e mais informações sobre os efeitos colaterais da ingestão desse produto.</p>
          
          <p>Na mesma palestra, Rejane contou sobre sua história e tudo que a fez chegar no lugar em que se encontra hoje e o que fundamentou todo o seu trabalho durante a definição dos programas de aula e dos projetos do LAE. A sua história mostrou uma profissional que sempre se dedicou ao pioneirismo e à curiosidade dentro de sua área de atuação.</p>
          
          <p>Ao se formar em Desenho Industrial e Comunicação Visual na PUC-Rio em 1979, não haviam muitas opções de atuação na área. Ao longo dos anos, ao se especializar em temas não tradicionais, como computação gráfica, que era uma novidade à época, foi preparada a não pensar "o que eu posso fazer agora?" mas sim enxergar além, para pensar "o que eu irei fazer?" e, mais profundamente, "o que haverá ára ser feito?". O Design, em específico a área de Mídias Digitais, é um campo de constante mudança, de inconstância. A história da professora e sua maneira de encarar a vida com criatividade e com uma atitude questionadora ajudará a moldar a carreira das jovens mentes presentes nesta e em outras palestras da aula.</p>
          
          <div class="divider"></div>

          <div class="section">
            <p>Fontes:</p>

            <ul>
              <li>
                <a href="http://dad.puc-rio.br/pos-graduacao/linhas-de-pesquisa-e-laboratorios/">http://dad.puc-rio.br/pos-graduacao/linhas-de-pesquisa-e-laboratorios/</a>
              </li>
              <li>
                <a href="http://lae.dad.puc-rio.br/">http://lae.dad.puc-rio.br/</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal6" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Laboratório de Volume</h4>

          <p>O Laboratório de Volumes da PUC-Rio é um dos principais laboratórios de prototipação da América Latina, sendo aberto a todos os alunos de Design da universidade. Com um maquinário preparado para suprir boa parte das necessidades dos alunos, o perigo e os cuidados na hora de manejar estes equipamentos não poderiam ser deixados de lado.</p>
          
          <p>Em sala de aula, houve uma demonstração dos perigos do laboratório, algo que uma pessoa com estômago fraco muito provavelmente gostaria de ser avisada de antemão. Acho importante que algo impactante faça com que os alunos sempre lembrem dessa aula, já que, um dia, pode vir a salvar a vida de alguém ou prevenir amputações em geral.</p>

          <p>Os Equipamentos de Proteção Individual (EPIs) são dispositivos simples de segurança que fazem com que quem está trabalhando com algo perigoso, contanto que esteja usando o EPI correto para a situação, mais seguro. As normas de segurança, quando bem elucidadas e acessíveis, também fazem com que o ambiente de trabalho como um todo se torne mais seguro.</p>

          <p>Guiados inicialmente pela professora Gabriela Vaccari, no próprio laboratório, ela mostrou exemplares de EPIs e repassou as <a href="http://dad.puc-rio.br/wp-content/uploads/2018/05/Regras-do-Laborato%CC%81rio-de-Volume-e-Prototipagem.pdf">regras do laboratório</a>; também apresentou a equipe e explicou como funciona o uso do laboratório. Fomos divididos em 2 turmas, uma que seguiu com o laboratorista Sid e outra com o Diogo. O Diogo mostrou as máquinas que precisam do uso de computadores para serem operadas, como a Router CNC, impressoras 3D e máquina de corte à laser, enquanto o Sid mostrou as máquinas que requerem mais habilidade física, como a furadeira de bancada, a serra de fita, a fresa manual, entre outras.</p>

          <div class="responsive-image">
            <img src="https://i.kinja-img.com/gawker-media/image/upload/s--XKk-Qs1H--/c_scale,f_auto,fl_progressive,q_80,w_800/aqwq8zg16xpqp6f406s3.jpg" alt="">
            <h6>Foto de Cem Ozdel</h6>
          </div>
          
          <p>Essa aula foi de extrema importância para que os alunos tenham em suas cabeças que o laboratório deve sempre ser utilizado com seriedade e que, caso não obedeçam às regras, o preço a pagar pode ser uma marca para vida toda, ou o fim dela. É bom que eles tenham tratado do assunto sem meias palavras, trouxeram a verdade, feia como ela é.</p>
          
          <div class="divider"></div>
          <div class="section">
            Fontes:

            <ul>
              <li><a href="http://dad.puc-rio.br/wp-content/uploads/2018/05/Regras-do-Laborato%CC%81rio-de-Volume-e-Prototipagem.pdf">http://dad.puc-rio.br/wp-content/uploads/2018/05/Regras-do-Laborato%CC%81rio-de-Volume-e-Prototipagem.pdf</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal7" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Singularidade</h4>
          
          <p>Em parte da palestra do professor Marcelo Pereira, ele levantou diversos pontos interessantes que envolvem a taxa de processamento de dados. Mais especificamente, a evolução desta capacidade de computação de dados e de execução de instruções que os processadores de computador vem adquirindo ao longo dos anos, bem como seus impactos nos avanços da Inteligência Artificial.</p>
          
          <p>De forma resumida, nos primórdios da computação digital eletrônica, com o computador ENIAC, válvulas eram utilizadas para a programação e computação de dados. Com o advento do transistor, os circuitos puderam ser diminuídos e tornados cada vez mais eficientes. Nos dias de hoje, um transistor pode chegar a ser tão pequeno quanto 5 nanômetros, sendo que os processadores mais acessíveis ao público utilizam transistores de 14nm.</p>
          
          <p>OK, mas o que isso significa?</p>
          
          <p>Basicamente, se você tem os transistores como os pequenos blocos que compõem o “cérebro” dos computadores, faz sentido que quanto mais transistores nós colocamos nos processadores, mais rápidos e mais consistentes eles se tornarão. Sendo os transistores componentes físicos, quanto menores eles forem maior é a quantidade deles que será possível dispor em um espaço cada vez mais limitado.</p>
          
          <p>Tendo completado 50 anos em 2015, a chamada “Lei de Moore” prevê que a capacidade computacional dobra a cada 2 anos que passam. Isso significa que a diferença entre os modelos de processadores ao passar dos anos fica mais e mais brutal, até eventualmente atingirão um ponto de singularidade.</p>
          
          <p>Na física, é conhecido que todos os corpos tem sua própria gravidade. A gravidade é maior quanto mais denso; quanto mais massa se encontra em espaços menores. Um buraco negro é uma massa gigantesca que está confinada em um espaço relativamente pequeno. No centro de buracos negros, onde sua atração gravitacional definida por sua massa tende ao infinito, a grandeza dessa força é tamanha que não se pode prever o que acontece em situações tão extremas; na computação não é diferente.</p>
          
          <p>A função exponencial que ilustra a evolução da computação não falha em comprovar a veracidade das previsões de Gordon Moore:</p>
          
          <div class="responsive-image center">
            <img src="https://cdn.technologyreview.com/i/legacy/supercomputer_performance.jpg?sw=600" alt="">
          </div>
          
          <p>Quanto à Inteligência Artificial, se encararmos nossos neurônios como transistores, não é de todo estranho pensar que um cérebro biológico possa vir a ser replicado por um cérebro feito de componentes eletrônicos e, no lugar de sangue, eletricidade. Alguns estudos já foram feitos ao se replicar partes de cérebros de roedores pequenos, com o projeto <a href="https://bluebrain.epfl.ch/">Blue Brain</a>.</p>

          <p>Os seres humanos têm demonstrado a tendência de simular situações e organismos reais de forma digital ou eletrônica. No jogo The Sims, você controla personagens para viverem suas vidas como se fossem pessoas de verdade e, para a realidade dos pequenos avatares do jogo, eles são. Porque foi assim que foram programados. Algumas questões foram levantadas:</p>
          
          <p>Será que um dia a computação evoluirá a ponto de replicar uma mente humana por completo virtualmente?</p>
          
          <p>Será que algum dia será possível modelar uma simulação em que não haja uma diferença notável entre a nossa humanidade e a deles?</p>
          
          <p>E se essa realidade na verdade se aplica a nós e alguma forma de vida mais avançada que nós nos criou para efeitos de estudo?</p>
          
          <p>O filme 13º andar, de 1999 trata exatamente disso, onde o personagem principal se vê no dilema de ser ou não ser uma simulação assim como a feita por ele e seus colegas em ambiente de pesquisa, além de indagar o que é, de fato a consciência.</p>
          
          <p>Caso a utilização de inteligência artificial passe a ser implementada em nossos robôs no futuro, é possível que eles aprendam a criar novas inteligências? Essas inteligências podem vir a ser superiores à nossa?</p>

          <div class="section">
            <div class="responsive-image center-align">
              <img class="circle" src="images/posts/Vinge-Vernor.png" alt="">
            </div>
          </div>
          
          <p>Vernor Vinge, um estudioso do ramo da ciência da computação, previu 3 possíveis cenários para uma dominação completa da existência humana pelas máquinas:</p>

          <ul>
            <li>
              Dominação Total
              <ul>
                <li>Neste cenário, as máquinas avançam sua inteligência até o ponto de que elas se tornam completamente autosuficientes, identificando o ser humano, bem como suas falhas, como um potencial perigo para o bem estar de todo esse novo ecossistema humano-máquina e decidem coletivamente por exterminação da forma de vida inferior.</li>
              </ul>
            </li>
            <li>
              Exploração Total
              <ul>
                <li>Neste cenário, as máquinas utilizam os seres humanos e seus corpos como fonte de energia; nos procriando e conservando como bem entenderem.</li>
              </ul>
            </li>
            <li>
              Desconsideração Total
              <ul>
                <li>No último caso, a inteligência dos seres humanos seria tão inferior à das máquinas que, para elas, não faz nenhuma diferença para eles a existência dos seres humanos ou a falta dela.</li>
              </ul>
            </li>
          </ul>
          
          <div class="divider"></div>

          <div class="section">
            Fontes:
            <ul>
              <li><a href="https://web.archive.org/web/20090126170054/http://download.intel.com:80/museum/Moores_Law/Articles-Press_Releases/Gordon_Moore_1965_Article.pdf">https://web.archive.org/web/20090126170054/http://download.intel.com:80/museum/Moores_Law/Articles-Press_Releases/Gordon_Moore_1965_Article.pdf</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal8" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Revolução Móvel</h4>
          
          <p>Um dos maiores exemplos da evolução da tecnologia nos últimos anos é a evolução da rede de telefonia celular. As diferentes “gerações” de rede de celular são divididas em velocidades. A cada novo patamar de velocidade, uma nova denominação de geração de redes móveis é criada.</p>
          
          <p>Desde a primeira geração de telefonia celular, criada nos anos 1970 por Martin Cooper,
          a preocupação da telefonia era pura e simplesmente atingir seu mais básico objetivo: levar a voz sem fio para outro dispositivo. Nesse momento a telefonia celular só podia transmitir o sinal analógico da voz, o que gerava muito ruído, interrupções, interceptações e muitos outros problemas.</p>
          
          <p>Ao se digitalizar a voz, na segunda geração, foi possível ter uma maior confiabilidade na reprodutibilidade da voz humana em ligações, uma vez que só existiriam informações binárias na conexão, tornando mais simples a amplificação da mesma.</p>
          
          <p>A partir daí, características como SMS, vídeo e música, internet e outras comodidades foram chegando e novos paradigmas da comunicação sem fio iam aparecendo. Até a geração 4, em que não se faz mais a separação entre dados e voz.</p>
          
          <p>A última grande mudança foi com a geração 5. Com uma latência muito baixa, os equipamentos vão poder se conectar e enviar as informações de forma muito mais rápida. Além, claro, do aumento significativo de velocidade de banda.</p>
          
          <p>Com o advento da Indústria 4.0, a tecnologia de rede 5G se mostra cada vez mais importante, pois possibilita que exista um número muito superior de dispositivos conectados entre si e um leque de possibilidades ampliado. É muito importante que os designers começarem a pensar neste tipo de tecnologia, que proporciona que hajam conexões para uso no campo, no ambiente fabril e no ambiente domiciliar para otimizar processos e ter um maior controle sobre pontos específicos de uma localidade.</p>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal9" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Ubiquidade Computacional</h4>

          <p>Na evolução da computação, temos 3 eras distintas. A primeira, a era do mainframe: onde uma máquina servia como detentora de todo o poder de processamento, sendo acessada por terminais de consulta; a segunda, a era da computação pessoal: aqui, temos um computador para cada usuário; e finalmente, a era da computação ubíqua: onde temos vários dispositivos para servir a vários usuários.</p>
          
          <p>Essa evolução não tomou conta apenas no âmbito técnico. Para que uma tecnologia se torne verdadeiramente ubíqua, ela deve ser de natureza de fácil entendimento e uso, alta resiliência a erros e deve entregar resultados consistentes e confiáveis.</p>

          <div class="responsive-image center">
            <img class="circle" src="images/posts/mark_weiser.png" alt="">
          </div>
          
          <p>Mark Weiser, mesmo que não tenha vivido para experienciar as tecnologias vigentes hoje, teve um vislumbre de protótipos com a tecnologia da época e primeiros testes e pode teorizar o que seriam algumas delas no futuro.</p>
          
          <p>Mark elencou o que, para ele, seriam as formas de interação para a computação ubíqua:</p>
          
          <ul>
            <li>Tab - consumo de informação</li>
            <li>Pad - entrada de informação com uma caneta</li>
            <li>Board - entrada colaborativa de dados</li>
          </ul>

          <p>Fazendo um paralelo com as tecnologias disponíveis hoje, o modo “Tab” teve grande uso com os Pagers. Hoje em dia, os e-readers são, na minha opinião, o mais perto disso.</p>
          
          <p>Em relação ao modo “Pad”, temo tablets e phablets com entrada de dados via paneta, mas acredito que os smartphones com a entrada por toque já são até uma evolução disso.</p>
          
          <p>O board ainda não teve uma expressividade no mercado. Já passou por algumas experimentações e, hoje, o melhor exemplo é o Microsoft Surface.</p>

          <div class="section">
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/YVlL9yCxpLw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          
          <p>Uma das empresas que mais contribuiu para que o uso de computadores pessoais ficasse com formas de interação mais intuitiva é a XEROX, com o XEROX PARC (Palo Alto Research Center). Lá foram desenvolvidos o processamento de dados de forma gráfica WYSIWYG (“What You See Is What You Get”, ou “O que você vê é o que você tem” em tradução livre) e o mouse. Ambas tecnologias incorporadas no XEROX Alto e, posteriormente, no Apple Macintosh.</p>
          
          <p>A cada passo da evolução das interações Humano-computador, vamos ficando mais perto de uma computação pessoal mais pervasiva, em que não se percebe o sistema por trás da tecnologia.</p>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal10" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Biohacking</h4>
          
          <p>Com o aumento das tecnologias de interação, o ser humano vem se completando ou se complementando com partes que não pertencem ao seu corpo. Desde um celular ser a extensão do seu sistema nervoso, até próteses para pessoas com membros amputados ou um marcapasso para organismos que tem dificuldades em manter um batimento cardíaco constante.</p>
          
          <p>As extensões do nosso corpo são parte do nosso cotidiano. óculos como extensão se nossos olhos, roupas como extensões da nossa pele. Remédios como uma forma de alterar nossa percepção ou nossas capacidades de trabalhar, dormir ou se relacionar com outros seres humanos.</p>
          
          <p>Na tecnologia, uma comunidade se formou em torno da ideia de expandir as capacidades do corpo humano utilizando implantes. Sejam eles chips eletrônicos que possuem alguma forma de processamento de dados ou até imãs nas pontas dos dedos. A ideia é criar novos sentidos para os que acreditam que nossos corpos já estão obsoletos ao mundo moderno contemporâneo.</p>
          
          <p>Os Biohackers, ou a comunidade Grinder, são um grupo de pessoas que colocam em prática a implantação desses novos sentidos. Sejam com procedimentos cirúrgicos realizados em casa ou por um bodypiercer profissional.</p>
          
          <p>No LIFE, Laboratório de Interfaces Físicas Experimentais, onde realizo estágio, por exemplo, tenho um colega chamado Levy Fernandes que possui uma prótede de imã na lateral do dedo anelar direito. Até o momento isso não o rendeu algum super poder(a não ser que levantar pequenos parafusos seja considerado um super poder), mas a ideia é que, ao longo do tempo, os nervos do local crescam em volta do imã e façam com que ele tenha um “sexto sentido” ligado a magnetismo.</p>
          
          <p>Em um primeiro momento, parece muito estranho alguém querer passar por esse tipo de intervenção no corpo, até por ela ser potencialmente permanente e danosa ao bem estar corporal do cidadão. Mas acredito que essas experimentações sirvam no futuro como uma oportunidade para alguém melhorar sua qualidade de vida, mesmo que a um nível bem baixo.</p>
          
          <p>Os humanos sentem a necessidade de serem expandidos, a comunidade Grinder assume isso como algo positivo e simplesmente resolve colocar o conceito na prática.</p>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal11" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Laboratório de Interfaces Físicas Experimentais</h4>
          
          <p>A visita ao laboratório LIFE para mim não foi tanto uma visita, uma vez que eu sou estagiário e pesquisador lá. Por conta disso, eu passei a primeira parte das visitas fazendo demonstrações dos exemplos de projetos desenvolvidos no laboratório para os outros alunos.</p>
          
          <p>O professor João Bonelli conseguiu cativar o interesse dos alunos e fazer com que a narrativa da palestra fosse colaborativa a maior parte do tempo. Exemplos, demonstrações ao vivo de codificação e de geração de interações físicas, explicações sobre sensores e o uso de eletrônica para captar sinais do universo a nossa volta e uma série de atividades que buscaram elucidar o que se trata a área de atuação de Design de Interação.</p>
          
          <p>Por trabalhar no laboratório, fui muito estimulante poder exibir os trabalhos que realizo por lá e, a partir das perguntas dos meus colegas de classe, ter uma nova visão sobre tudo que estava envolvido ali.</p>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal12" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Mundo VUCA</h4>
          
          <p>A professora Claudia Kayat fez uma palestra muito instigadora do ponto de vista das mídias digitais e do consumo de produtos. Para onde esses recursos vão depois? qual será a próxima invenção e quando ela se tornará obsoleta? qual o impacto disso no ecossistema terrestre?</p>
          
          <p>Vivemos em um mundo VUCA (Volátil, Incerto, Complexo e Ambíguo), em que o uso de recursos naturais e de densidade demográfica se tornam cada vez mais questões a serem tratadas pelos profissionais de design.</p>
          
          <p>Colocar um produto no mundo exige uma tremenda responsabilidade, uma vez que, se não pensado o ciclo do mesmo, ele acaba fazendo mais mal por mais tempo do que o bem que fez enquanto não era obsoleto.</p>
          
          <p>E mais, a obsolescência não está só nos produtos. Profissões, serviços, produtos, tudo isso está conectado em uma delicada torre de cartas.</p>
          
          <p>Durante quantos anos os discos (LPs) foram utilizados? e os CDs? e os Blu-Rays?</p>
          
          <p>Até quando o ser humano vai conseguir retirar recursos do planeta?</p>
          
          <p>A resposta está no uso inteligente da metodologia do design. Usar novas formas de pensar e de agir perante os produtos. Pensar diferente. Unir as várias disciplinas que compõem o quadro geral e pensar em formas de produzir sem que haja o descarte de resíduos. Repensar o uso dos eletrodomésticos.</p>
          
          <p>Esta palestra me fez me questionar muito sobre como o design vai agir daqui a 20 anos e como o impacto dos novos paradigmas ecológicos vão afetar os processos de produção e de criação de novos conceitos em design.</p>
        </div>
      </div>

      <!-- Modal Structure 
      <div id="modal13" class="modal">
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-teal btn-flat"><span class="orange-text">X</span> FECHAR</a>
        </div>
        <div class="modal-content">
          <h4>Visualização de Dados</h4>
        </div>
      </div>-->

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