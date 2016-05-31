<?php
session_start();
?>
<body>
  <div id='page'>
    <div id='header'><header>
      <nav class='navbar navbar-default' id='navbar'>
        <div class='container-fluid'>
          <!-- After collapse -->
          <div class='navbar-header'>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
              <span class='sr-only'>Toggle navigation</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>

            </button>
              <a href='index.php'>
              <img id='logo' src='img/pluggtugg-logo.png'  style= "width: 220px">
              </a>
            <!--     <a class='navbar-brand' href='index.php'>PluggTugg</a> -->
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
            <ul class='nav navbar-nav'>
              <!-- <li id='active' class='active'><a href='index.php'>Hem<span class='sr-only'>(current)</span></a></li>      -->
              <li <?php echoActiveClass('index') ?> ><a href='index.php'>Hem</a></li>
              <li <?php echoActiveClass('recept') ?> ><a href='recept.php'>Recept</a></li>
              <li <?php echoActiveClass('forum') ?> ><a href='forum.php'>Forum</a></li>
            </ul>
            <form class='navbar-form navbar-left' method='post' action='search.php' role='search'>
              <div id='form-group' class='form-group'>
                <input type='text' id='form-control' class='form-control' placeholder='Sök i databasen..'onfocus='this.placeholder = '' onblur='this.placeholder ='Sök i databasen' name='input' required>
                <span class='glyphicon glyphicon-search'> </span>
                <button type='submit' id='btn-default' class='btn btn-default'>Sök</button>
              </div>

            </form>
            <ul class='nav navbar-nav navbar-right'>
                <?php if (accessAdmin()&&LoggedIn()) { echo "<li><a href='skyddad_admin.php'>Redigera webbplats</a></li>"; } ?>
              <?php if (LoggedIn()) { echo "<li><a href='publicera.php'>Publicera recept</a></li>"; } ?>
              <li <?php echoActiveClass('kontakt') ?> ><a href='kontakt.php'>Kontakt</a></li>
              <li class='dropdown' <?php echoActiveClass('profil') ?>>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><?php insertHTML(returnSessVar('username'),'Logga in'); ?><span class='caret'></span></a>
                <ul class='dropdown-menu'>
                  <li><a href=<?php insertHTML('profil.php','login.php'); ?>><?php insertHTML('Profil','Logga in'); ?></a></li>
                  <li><a style="background-color: #FFB441;" href=<?php insertHTML('phpscripts/logout.inc.php','registrering.php'); ?>><?php insertHTML('Logga ut','Registrera ett konto'); ?></a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
  </div>
  <div id='content'>


    <?php
    //Gör en php-länk till aktiv om man är inne på den sidan.
    function echoActiveClass($navItemUri)
    {
      $current_file_name = basename($_SERVER['PHP_SELF'], ".php");

      if ($current_file_name == $navItemUri)
      echo "class='active' id='active'";
    }

    //Kollar om man är inloggad
    function LoggedIn(){
      if (isset($_SESSION["username"])){
        return true;
      }
      else {
        return false;
      }
    }

//Kollar om man är inloggad som admin
function accessAdmin(){
    if(isset($_SESSION['access'])){
      if ($_SESSION['access']=='admin'){
        return true;
      }
      else {
        return false;
      }
    }
       else{
       return false;
       }
    }

    //Skriver ut en av två givna strängar baserat på om man är inloggad eller ej.
    function insertHTML($loggedIn, $loggedOut){
      if(LoggedIn()){
        echo $loggedIn;
      }
      else{
        echo $loggedOut;
      }
    }

    //Returnerar en given sträng som sessionsvariabel om man är inloggad, annars en tom sträng.
    function returnSessVar($sessVar){
      if(LoggedIn()){
        return $_SESSION[$sessVar];
      }
      else{
        return "";
      }
    }
    ?>
