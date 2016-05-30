<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';?>
<div class='container col-md-8-offset-2'>
  <h2 class='page-header'>Kontakta oss</h2>
  <div class='container well'>
    <div class='contact-container'>
      <div ='contactDiv'>

      </div>
      <div id='telefonDiv'>
        <span class='glyphicon glyphicon-earphone'></span>
      </div>
      <div id='contact-phone'>
        0765822826
      </div>
      <div id='emailDiv'>
        <span class='glyphicon glyphicon-envelope'></span>
      </div>
      <div id='contact-email'>
        oceansProject@gpros.com
      </div>
    </div>
    <div id='contactTextarea'>
      <textarea name='textarea' id='textarea' placeholder ='Skicka meddelande direkt till oss'></textarea><br>
      <input type='submit' name='contactSubmit'>
    </div>

    <div id='contactLogo'>
      <img id='contactImg' src='img/contactus1.png'>
    </div>
  </div>
</div>
<!-- ----------------------------------------------- -->



<?php include'html-elements/html_footer.php';?>
