<?php

if(isset($_POST['id'])){
    $delete= new VolController();
    $delete->deleteVol();
}

?>