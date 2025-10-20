<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 150px;
  background-color: #00BFFF;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: black;
  padding: 16px 36px;
  text-decoration: none;
}

li a.active {
  background-color: #00BFFF;
  color: white;
}

li a:hover:not(.active) {
  background-color: #000000;
  color: white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Noticías</a></li>
  <li><a href="#contact">Eventos</a></li>
  <li><a href="#about">Esportes</a></li>
  <li><a href="#about">Cursos</a></li>
  <li><a href="#about">Sugestões</a></li>
</ul>

<div style="margin-left:130px;padding:1px 16px;height:1000px;">
  
 
</div>

</body>
</html>