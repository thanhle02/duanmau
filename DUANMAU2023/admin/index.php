<?php 
include "header.php";
// controller 
if (isset($_GET['act'])){
    $act= $_GET['act'];
    switch ($act) {
        case 'adddm':
            # code...
            break;
        
        default:
            # code...
            break;
    }
}
include "home.php";

include "footer.php";
?>