<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ocean goes fruitbasket</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/recept.css">
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
            <img id='logo' src='img/logan.png'>

       <!--     <a class="navbar-brand" href="index.php">PluggTugg</a> -->
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Hem<span class="sr-only">(current)</span></a></li>
              <li id='active' class="active"><a href="#">Recept</a></li>
              <li><a href="forum.php">PluggTugg Forum</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
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
    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Recept
                    <small>Alla</small>
                </h1>
            </div>
        </div>
          <!-- /.navbar-collapse -->
        <div class="col-lg-12" class="collapse navbar-collapse" id="categories">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Alla</a></li>
            <li><a href="#">Kött</a></li>
            <li><a href="#">Fågel</a></li>
            <li><a href="#">Fisk/Skaldjur</a></li>
            <li><a href="#">Pasta</a></li>
            <li><a href="#">Soppa/pajer</a></li>
            <li><a href="#">Vegetariskt</a></li>
            <li><a href="#">Mackor/wraps</a></li>
            <li><a href="#">Pannkakor/omelett</a></li>
            <li><a href="#">Mellanmål</a></li>
            <li><a href="#">Övrigt</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <div class="btn-group btn-group-sm col-md-4" data-toggle="buttons" id="price">
          <h5>Filtrera pris</h5>
          <label class="btn btn-default">
            <input type="checkbox" checked> 1-5 kr
          </label>
          <label class="btn btn-default"> 6-10 kr
            <input type="checkbox">
          </label>
          <label class="btn btn-default"> 11-15 kr
            <input type="checkbox">
          </label>
          <label class="btn btn-default"> 16-20 kr
            <input type="checkbox">
          </label>
          <label class="btn btn-default"> 21-30 kr
            <input type="checkbox">
          </label>
        </div>
          <div class="col-md-8" id="custom-search-input">
                 <div class="input-group col-md-8">
                     <input type="text" class="  search-query form-control" placeholder="Search" />
                     <span class="input-group-btn">
                         <button class="btn btn-warning" type="button">
                             <span class=" glyphicon glyphicon-search"></span>
                         </button>
                     </span>
                 </div>
            </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="#">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; PluggTugg 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
