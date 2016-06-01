function hover(stars) {
  for (var i = 1; i <= stars; i++) {
    document.getElementById("star"+ i).src = 'img/star.png';
  }
}
function leave() {
  for (var i = 1; i <= 5; i++) {
    document.getElementById("star"+ i).src = 'img/no-star.png';
  }
}

function ratings(elem){
  var x =  new XMLHttpRequest();
  var url = "phpscripts/db_rate.php";
  var a = document.getElementById("star"+elem).value;
  var vars = "choice="+a;

  x.open("POST", url, true);
  x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  x.onreadystatechange = function(){
    if(x.readyState==4 && x.status ==200){

      var return_data = x.responseText;

      document.getElementById("status").innerHTML = return_data;

    }
  }
  x.send(vars);

  document.getElementById("status").innerHTML="processing...";
}
