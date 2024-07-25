<?php
session_start();
if(session_id() != $_SESSION['sess_id']){
header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="register.php">All user</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right">
  <a class="active" href="logout.php">Logout</a>
</li>
</ul>

</body>
</html>
