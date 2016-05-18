<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ocean goes fruitbasket</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/forum.css">
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
        <li><a href="recept.php">Recept</a></li>
        <li id='active' class="active"><a href="#">PluggTugg Forum</a></li>
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

 <div class="container" style="margin-top: 35px">
  <div class="page-header page-heading">
    <h1 class="pull-left">Forums</h1>
    <ol class="breadcrumb pull-right where-am-i">
      <li><a href="#">Forums</a></li>
      <li class="active">List of topics</li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <p class="lead">This is the right place to discuss any ideas, critics, feature requests and all the ideas regarding our website. Please follow the forum rules and always check FAQ before posting to prevent duplicate posts.</p>
  <table class="table forum table-striped">
    <thead>
      <tr>
        <th class="cell-stat"></th>
        <th>
          <h3>Important</h3>
        </th>
        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
        <td>
          <h4><a href="#">Frequently Asked Questions</a><br><small>Some description</small></h4>
        </td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
        <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
      </tr>
      <tr>
        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
        <td>
          <h4><a href="#">Important changes</a><br><small>Category description</small></h4>
        </td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
      </tr>
    </tbody>
  </table>
  <table class="table forum table-striped">
    <thead>
      <tr>
        <th class="cell-stat"></th>
        <th>
          <h3>Suggestions</h3>
        </th>
        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center"><i class="fa fa-heart fa-2x text-primary"></i></td>
        <td>
          <h4><a href="#">More more more</a><br><small>Category description</small></h4>
        </td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
      </tr>
      <tr>
        <td class="text-center"><i class="fa fa-magic fa-2x text-primary"></i></td>
        <td>
          <h4><a href="#">Haha</a><br><small>Category description</small></h4>
        </td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
      </tr>
    </tbody>
  </table>
  <table class="table forum table-striped">
    <thead>
      <tr>
        <th class="cell-stat"></th>
        <th>
          <h3>Open discussion</h3>
        </th>
        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td colspan="4" class="center">No topics have been added yet.</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
  </body>
</html>
