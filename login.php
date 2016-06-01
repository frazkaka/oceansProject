<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';?>





<div class='col-md-8 col-md-offset-2 well'>
    <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-coffee"></i>
        <?php 
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
utf8_encode($actual_link);
$search = strrpos($actual_link,'reg');

if(!empty($search)){
echo $_GET['reg'];
    urlencode(utf8_decode('åäö'));
}
?>
      </div>
<h2>Logga in</h2>
<form method='post' action='phpscripts/login.inc.php' role='form'>
    <div class='form-group'>
      <label class='sr-only' for='email'>Email:</label>
      <input type='email' name='userEmail' class='form-control' id='email' placeholder='Fyll i email'>
    </div>
    <div class='form-group'>
      <label class='sr-only' for='pwd'>Password:</label>
      <input type='password' name='password' class='form-control' id='pwd' placeholder='Fyll i lösenord'>
    </div>
    <button type='submit' class='btn btn-default'>LOGGA IN</button>
  </form>

</div>

<?php include'html-elements/html_footer.php';?>
