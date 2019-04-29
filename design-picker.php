<!DOCTYPE html>
<html>
<head>
	<title>encyclopedia</title>
<link href="https://fonts.googleapis.com/css?family=Anton|Permanent+Marker" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<style type="text/css">
  .choose1{
    width: 75%;
    font-family: 'Open Sans', sans-serif;
    background-color: red;
    height: 100px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px grey;
    font-size: 70px;
    color: white;
    text-decoration: underline; 
  }
  .choose1:hover{
    box-shadow: 0px 0px 10px black;
  }
  .choose1 a{
    text-decoration: none;

  }
  .choose2{
    width: 75%;
    font-family: 'Open Sans', sans-serif;
    background-color: lightblue;
    height: 100px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px grey;
    font-size: 70px;
    color: white;
    text-decoration: underline; 
  }
  .choose2:hover{
    box-shadow: 0px 0px 10px black;
  }
  .choose2 a{
    text-decoration: none;

  }
  .choose3{
    width: 75%;
    font-family: 'Open Sans', sans-serif;
    background-color: black;
    height: 100px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px grey;
    font-size: 70px;
    color: white;
    text-decoration: underline; 
  }
  .choose3:hover{
    box-shadow: 0px 0px 10px black;
  }
  .choose3 a{
    text-decoration: none;

  }
  @media screen and (max-width: 900px) {
    .choose1{
      width: 90%;
      border-radius: 0px;
      height: auto;
    }
    .choose2{
      width: 90%;
      border-radius: 0px;
      height: auto;
    }
    .choose3{
      width: 90%;
      border-radius: 0px;
      height: auto;
    }
  }
</style>
<body>
	<div class="topnav" id="myTopnav">
  <a href="#home" class="logo">someone's encyclopedia</a>
  <a href="#contact">Github</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars">menu</i>
  </a>
</div>

<div style="padding-left:16px">
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
	<br>
  <a href="design1.php"><center><div class="choose1">red design</div></center></a>
  <br>
  <a href="design2.php"><center><div class="choose2">aqua blue design</div></center></a>
  <br>
  <a href="design3.php"><center><div class="choose3">dark design</div></center></a>
  