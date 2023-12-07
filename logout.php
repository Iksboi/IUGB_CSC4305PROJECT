<?php

session_start();
session_unset();
session_destroy();

header("Location:/IUGB_CSC4305PROJECT/");
exit;

?>