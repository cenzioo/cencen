<?php
    session_start();
    session_destroy();

    header("Location: ../Layout/login.php");
?>