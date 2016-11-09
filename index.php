<!DOCTYPE html>
<html>
<head>

<!-- Font Awsome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" media="all" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/myjs.js"></script>

</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a class="ea" id="editme" href="#">Edit</a>


</div>


<div id="main">

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<div id="ec1">

    <i id="s1" class="fa fa-pencil buttons" aria-hidden="true"></i>
    <p class="content" id="ps1"></p>

    <i id="s2" class="fa fa-pencil buttons" aria-hidden="true"></i>
    <p class="content" id="ps2"></p>

    <i id="s3" class="fa fa-pencil buttons" aria-hidden="true"></i>
    <p class="content" id="ps3"></p>

    <i id="s4" class="fa fa-pencil buttons" aria-hidden="true"></i>
    <p class="content" id="ps4"></p>
   

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
