<?php
session_start();
unset($_SESSION["telephone"]);

header("Location:start.php");
?>