<?php include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';?>

<div class='container'>
  <h2>Registrera dig</h2>
  <p>Fyll i formuläret nedan för registrering hos PluggTugg:</p>
  <form method='POST' action='/phpscripts/registrering.inc.php' role='form'>
      <div class='form-group'>
      <label class='sr-only' for='username'>Namn:</label>
      <input type='text' class='form-control' name='username' id='username' placeholder='Välj användarnamn'>
    </div>
      <div class='form-group'>
  <label for='school'>Välj ditt lärosäte:</label>
  <select class='form-control' id='sel1' name='school'>
      <option>	---	</option>
      <option>	Jag är inte student	</option>
      <option><li role='separator' class='divider'></li></option>
    <option>	Beckmans designhögskola	</option>
<option>	Blekinge tekniska högskola	</option>
<option>	Chalmers tekniska högskola	</option>
<option>	Danshögskolan	</option>
<option>	Dramatiska institutet	</option>
<option>	Ericastiftelsen	</option>
<option>	Ersta Sköndal högskola	</option>
<option>	Försvarshögskolan	</option>
<option>	Gammelkroppa skogsskola	</option>
<option>	Gymnastik- och idrottshögskolan	</option>
<option>	Göteborgs universitet	</option>
<option>	Handelshögskolan i Stockholm	</option>
<option>	Högskolan Dalarna	</option>
<option>	Högskolan i Borås	</option>
<option>	Högskolan i Gävle	</option>
<option>	Högskolan i Halmstad	</option>
<option>	Högskolan i Jönköping	</option>
<option>	Högskolan i Kalmar	</option>
<option>	Högskolan i Skövde	</option>
<option>	Högskolan Kristianstad	</option>
<option>	Högskolan på Gotland	</option>
<option>	Högskolan Väst	</option>
<option>	Johannelunds teologiska högskola	</option>
<option>	Karlstads universitet	</option>
<option>	Karolinska institutet	</option>
<option>	Konstfack	</option>
<option>	Kungliga Konsthögskolan	</option>
<option>	Kungliga Musikhögskolan i Stockholm	</option>
<option>	Kungliga Tekniska högskolan	</option>
<option>	Linköpings universitet	</option>
<option>	Luleå tekniska universitet	</option>
<option>	Lunds universitet	</option>
<option>	Malmö högskola	</option>
<option>	Mittuniversitetet	</option>
<option>	Mälardalens högskola	</option>
<option>	Operahögskolan i Stockholm	</option>
<option>	Röda Korsets högskola	</option>
<option>	Sophiahemmet Högskola	</option>
<option>	Stockholms musikpedagogiska institut	</option>
<option>	Stockholms universitet	</option>
<option>	Sveriges lantbruksuniversitet	</option>
<option>	Södertörns högskola	</option>
<option>	Teaterhögskolan i Stockholm	</option>
<option>	Teologiska Högskolan, Stockholm	</option>
<option>	Umeå universitet	</option>
<option>	Uppsala universitet	</option>
<option>	Växjö universitet	</option>
<option>	Örebro teologiska högskola	</option>
<option>	Örebro universitet	</option>
<option>	Övr. enskilda anordn. psykoterapeututb.	</option>

  </select>
</div>
    <div class='form-group'>
      <label class='sr-only' for='userEmail'>Email:</label>
      <input type='email' class='form-control' name='userEmail' id='email' placeholder='Fyll i din Email'>
    </div>
    <div class='form-group'>
      <label class='sr-only' for='pwd'>Password:</label>
      <input type='password' name='password' class='form-control' id='pwd' placeholder='Fyll i lösenord'>
    </div>
    <div class='checkbox'>


      <label><input type='checkbox'> Jag accepterar <a href ='registrering.php' onclick='return conditions();'>användarvillkoren</href></a>.</label>
    </div>
    <button type='submit' name='regSubmit' class='btn btn-default'>Registrera</button>
  </form>
          <script>
function conditions() {
    var myWindow = window.open('', '', 'width=500,height=500');
    myWindow.document.write('<h1>PluggTuggs allmänna villkor</h1><h2>1.PluggTuggs tjänster</h2> För närvarande ingår följande tjänster efter registrering: Skriva i PluggTuggs forum, Spara recept, Prenumerera på PluggTuggs mejlutskick, Följa andra användare, Personifiera flödet på webbplatsens förstasida, Kommentera samt betygsätta recept.<h2> 2. Registrering </h2> Registrering skall göras på det registreringsformulär som finns på PluggTuggs webbplats. För att kunna bli registrerad som medlem måste du i registreringsformuläret bekräfta att du har läst igenom och accepterar de Allmänna villkoren. PluggTugg bekräftar att avtal har ingåtts och att du därmed registrerats som medlem på PluggTugg genom att skicka en bekräftelse till dig via e-post. Du kan själv välja att när som helst avsluta och ta bort kontot från PluggTugg.<h2>3. Användarnamn och lösenord</h2>Du måste ange användarnamn och lösenord när du skall logga in på PluggTuggs webbplats. <br>Användarnamn och lösenord får inte avslöjas för obehöriga. Du kan hållas ansvarig för eventuella konsekvenser på grund av att någon obehörig använder ditt användarnamn och lösenord. <h2>4.Användargenererat innehåll på PluggTugg</h2>Pluggtugg förbjuder användare att via deras tjänster göra något av följande: Förtala, smäda, trakassera, diskriminera, förfölja eller hota andra eller på något annat sätt kränka andras rättigheter.<br>Publicera, posta, överföra, distribuera eller sprida information eller material som innebär hets mot folkgrupp, förtal, barnpornografibrott, olaga våldsskildring, uppmaningar till brott eller liknande material.<br>Publicera vilseledande information vid publicering av recept, på forumet, eller på andra sätt agera på ett sätt som inte är förenligt med god sed.<br>PluggTugg förbåller sig rätten att omedelbart ta bort kommentarer, inlägg, meddelanden eller annat material som strider mot ovanstående punkter. Användaren kan förlora medlemsprivilegier och all form av grova överträdelser beivras och kan leda till polisanmälan.<br><h2>5. Länkar till samarbetspartners webbplatser</h2>På PluggTuggs webbplats finns länkar till samarbetspartners webbplatser. Dessa webbplatser kontrolleras inte av Pluggtugg och Pluggtugg ansvarar därför inte för innehållet på en länkad webbplats.<h2>6. Personuppgifter, PUL</h2>PluggTugg behandlar de personuppgifter du angett vid registrering i enlighet med PUL (Personuppgiftslagen). Uppgifterna som samlas in är bland annat namn, emailadress och lärosäte. PluggTugg använder de personuppgifter som användaren lämnat i syfte att erbjuda personifierade mailutskick, prenumerationer och andra tilläggstjänster utefter varje användares behov. Uppgifterna kommer inte säljas, ges ut, eller på andra sätt tillhandahållas en tredje part utan en medlems uttryckliga godkännande.<h2>7. Lagval och tvist</h2>Utöver våra uppställda villkor förväntas samtliga användare av tjänsten agera på ett sätt som är förenligt med svensk lagstiftning.')
myWindow.focus();
}
</script>
</div>
 <?php include'html-elements/html_footer.php';?>
