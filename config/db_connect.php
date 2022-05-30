<?php 
    $connected = mysqli_connect('localhost','ofi','kg123','house_rent');

    //check connection
    if(!$connected){
        echo 'error '. mysqli_connect_error();
    }

?>