<?php
  $faq = [
    [
    "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
    "answer" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde
    conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno
    il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi
    a chiavi di ricerca che includono il proprio nome."
    ],
    [
    "question" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    "answer" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi.
    Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro
    e accessibili quando ne hai bisogno."
    ],
    [
    "question" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
    "answer" => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web.
    I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati
    di ricerca da Google non consente di rimuovere i contenuti dal Web."
    ]
  ]
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google Faq</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <!-- Navigation bar -->
      <nav class="nav-bar">
        <div class="top">
          <div class="logo fl_left">
            <img id="google_logo" src="img/googlelogo.png" alt="" />
          </div>
          <div class="page_title fl_left">
            <h2>Privacy e termini</h2>
          </div>
          </div>
          <div class="bottom">
            <div class="menu">
              <ul>
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>Termini di servizio</li>
                <li>Tecnologie</li>
                <li class="active">Domande frequenti</li>
              </ul>
            </div>
            <div class="user">
              <img id="" src="" alt="" />
              <output></output>
            </div>
          </div>
      </nav>
      <!-- /Navigation bar -->
    </header>
    <main >
      <!-- FAQ -->
      <div class="faq">
        <ul>
          <?php
          $lista = "list";
          $bold = "bold";
          foreach ($faq as $key) {
          ?>
            <li class="<?php echo $list_bold ?>"><?php echo $key["question"]; ?></li>
            <li class="<?php echo $list ?>"><?php echo $key["answer"]; ?></li>
          <?php
          }
           ?>
        </ul>
      </div>
      <!-- /FAQ -->
    </main>

  </body>
</html>
