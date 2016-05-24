<?php

function setComments($conn){
  if (isset($_POST['commentSubmit'])){
    // TO THE DATABASE
    $userid = $_POST['userid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    // nu har vi samlat upp all information i variablen $sql
    $sql = "INSERT INTO comments (userid, date, message) VALUES ('$userid', '$date', '$message')";
    // nu ska vi faktiskt sända det till databasen
    $result = $conn->query($sql);
  }
}
// COMMENTS FROM DATABASE
function getComments($conn){
  //write the sql we want to query from the databasen
  $sql = "SELECT * FROM comments";
  // creates a connection to database, run a method called query, on variabel $sql
  $result = $conn->query($sql);
  // below types out all userid, date, message in database table
  while ($row = $result->fetch_assoc()){
    echo "<div class='comment-box'>";
    echo $row['userid']."<br>";
    echo $row['date']."<br>";
    echo $row['message']."<br>";
    echo "</div>";
  }
  // variable $row gets all the different results from the database
  // fetch_assoc inserts them in to an array. $row is an array now in other words.

}
