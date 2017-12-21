<?php
    include_once"../wub_php_class.php";
    $obj = new wub_php_class();
    $com_id = $_POST["comp_name"];
//echo $com_id;
    $obj->show_company_product($com_id);