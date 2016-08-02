<?php
/*
  doLogin.php
  Script en PHP que revisa los datos ingresados por el usuario
  Si el Login y el Password coinciden, redirige el navegador a
  "menu.html", de lo contrario lo redirige a "login.html"
*/

// si coincide el login y el password
if ($_POST['login'] == $_POST['password']) {
  // redirige el navegador al menu
  header('Location: menu.html');

// si no coincide
} else {
  // redirige el navegador al login
  header('Location: login.html');
}
