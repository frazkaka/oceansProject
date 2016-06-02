<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';?>





<div class='col-md-8 col-md-offset-2 well'>
    
    
         <?php 
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$searchreg = strrpos($actual_link,'new');

if(!empty($searchreg)){
echo '<div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>';
echo $_GET['new'];
echo '</div>';
}

$searchemail = strrpos($actual_link,'email');

if(!empty($searchemail)){
echo '<div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>';
echo $_GET['email'];
echo '</div>';
}

$searchpass = strrpos($actual_link,'pass');

if(!empty($searchpass)){
echo '<div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>';
echo $_GET['pass'];
echo '</div>';
}
?>
      
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
