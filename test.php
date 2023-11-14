<?php
require "seeder.php";
header('Content-type: application/json');
var_dump(Seeder::seed());
if(isset($_GET['ost'])) {
    foreach($ost as $soundtrack){
        /* @var $soundtrack ost */
        if($soundtrack->getId()==$_GET['ost']){
            echo json_encode($ost);
        }
    }
}
