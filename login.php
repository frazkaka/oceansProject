<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';?>
        

<h2>Logga in</h2>
<form method='post' action='/phpscripts/login.inc.php' role='form'>
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



<?php include'html-elements/html_footer.php';?>
