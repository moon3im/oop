<?php 
require_once 'app.php';

$session->set_admin_id(null);
$session->set_admin_email(null);
session_destroy();
header("Location: login.php");
exit;