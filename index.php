<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css/style.css" media="all" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/tempEdit.js"></script>

</head>

<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a class="ea" id="s1" href="#">Edit 1</a>
  <a class="ea" id="s2" href="#">Edit 2</a>
  <a class="ea" id="s3" href="#">Edit 3</a>
  <a class="ea" id="s4" href="#">Edit 4</a>
</div>


<div id="main">
  
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<div id="ec1">

    <div>
      <h1 id="ps1">Silly sausage . . .</h1>
      <p id="ps2"></p>
    </div>

    <div><p id="ps3"></p></div>
    <div><p id="ps4"></p></div>

</div>
</div>






<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
</body>
</html>

