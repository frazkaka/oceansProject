<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ocean goes fruitbasket</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/index.css">


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <img id='logo' src='/img/logan.png'>

      <!--     <a class="navbar-brand" href="index.php">PluggTugg</a> -->
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li id='active' class="active"><a href="index.php">Hem<span class="sr-only">(current)</span></a></li>
              <li><a href="recept.php">Recept</a></li>
              <li><a href="forum.php">PluggTugg Forum</a></li>
            </ul>
            <form class='navbar-form navbar-left' role='search'>
              <div id='form-group' class='form-group'>
                <input type='text' id='form-control' class='form-control' placeholder='Sök i databasen..' onfocus="this.placeholder =''" onblur="this.placeholder = 'Sök i databasen'">
                <span class='glyphicon glyphicon-search'></span>
              </div>
              <button type='submit' class='btn btn-default'>Sök</button>

            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="kontakt.php">Kontakta oss</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logga in<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="login.php">Logga in här</a></li>
                  <li><a href="registrering.php">Registrera ett konto</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
        <!-- ----------------------------------------------- -->
        <div id="container">

          <div id='leftContainer'>
            Top 10
          </div>
          <div id='rightContainer'>
            Flöde av bilder
          </div>
        </div>

  </body>
</html>
