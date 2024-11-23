<?php
    session_start();

    session_destroy();

    header ("Location:login.php?mensaje=2");
    exit();

?>