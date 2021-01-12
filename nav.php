<!DOCTYPE html>
<html lang="en">
<?php
include_once 'db_sql.php';
?>

<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="animals.php">Pets</a>
  <a class="active" href="location.php">Locations</a>
  <a class="active" href="owner.php">Owners</a>
  
</div>
<style>
/* Add a black background color to the top navigation */
.topnav {
  background-color: goldenrod;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a:active {
  background-color: black;
  color: white;
}
</style>
</body>
</html>