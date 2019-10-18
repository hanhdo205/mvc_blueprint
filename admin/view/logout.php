<?php
    if($logged)
    {
		unset($_SESSION["username"]);
		unset($_SESSION["start"]);
		unset($_SESSION["expire"]);
        header('Location: login');
    } 
?>