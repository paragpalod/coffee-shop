<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['fName']);
unset($_SESSION['lName']);

header("location:index.php?logout=true");
?>
