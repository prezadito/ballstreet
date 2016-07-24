<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Ball Academy | Level the playing field</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,700|Baloo+Da" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rakkas" rel="stylesheet">

    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/responsive.css">
  </head>

  <body>

    <header>
      <h1>Ball Academy</h1>
      <h3>Level the playing field</h3>
      <section id="body" style="overflow:hidden">
        <div id="abc">
          <div id="popupEmail">
            <form action="#" id="form" method="post" name="form">
              <img id="close" src="img/exit.png" height="32" width="32" onclick="div_hide()">
              <h2>Sign up for early access</h2>
              <hr>
              <input id="name" name="name" placeholder="Name" type="text">
              <input id="email" name="email" placeholder="Email" type="text">
              <a href="javascript:%20check_empty()" id="submit">Submit</a>
            </form>
          </div>
        </div>
        <button id="popup" onclick="div_show()">SIGN UP FREE</button>
      </section>
    </header>


    <article class='main'>
        <h2>Here's how it works:</h2>
        <ul class='row'>
          <li class='col-md-4'>
            <img src='img/Soccer.png' class='tile-icon'>
            <h4>Get rewarded for using our platform</h4>
          </li>
          <li class='col-md-4'>
            <img src='img/Football.png' class='tile-icon'>
            <h4>Use your coins to invest in best players</h4>
          </li>
          <li class='col-md-4'>
            <img src='img/Baseball.png' class='tile-icon'>
            <h4>Become a master and take on the pros!</h4>
          </li>
      </ul>
    </article>
    <section class='leagues'>
      <h3>We cover your favorite sport leagues!</h3>
      <ul>
        <li><img src='img/nfl.png' alt='NFL' class='league-icon'></li>
        <li><img src='img/nba.png' alt='NBA' class='league-icon'></li>
        <li><img src='img/nhl.png' alt='NHL' class='league-icon'></li>
        <li><img src='img/mlb-logo.png' alt='MLB' class='league-icon-mlb'></li>
        <li><img src='img/mls.png' alt='MLS' class='league-icon'></li>
      </ul>
    </section>
    <section class='last'>
      <h3>What are you waiting for?</h3>
      <button id="popup" onclick="div_show()">SIGN UP FREE</button>
    </section>
    <footer>
      <p>&copy Aditya + Douglas</p>
      <ul>
        <li><a href="https://www.facebook.com/" target='_blank'><img src='img/facebook.png' alt='Facebook' class='social-icon'></a></li>
        <li><a href="https://www.instagram.com/" target='_blank'><img src='img/instagram.png' alt='Instagram' class='social-icon'></a></li>
        <li><a href="https://twitter.com/" target='_blank'><img src='img/twitter.png' alt='Twitter' class='social-icon'></a></li>
      </ul>
      <script src="js/index.js"></script>
    </footer>
      

  </body>
</html>
