<?php
session_start();
session_unset();
header('location:admin_form.php');
?>