<?php

    //connect config

    include_once "../../includes/config.php";

    //connect html structure and header

    require_once "../struct.php";

    require_once "../header.php";

?>

<main id="panel" class="panel admin-panel-main ">
    <div>  
        <?php include ("../navigation.php"); // navigation.php generates the menu ?>
    </div>
    <div id="content">
        <?php include 'home.php';?>
    </div>


</main>