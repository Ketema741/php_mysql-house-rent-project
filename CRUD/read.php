<?php 
    include('config/db_connect.php');

    //query for all houses
    $sql = 'SELECT * FROM houses';

    //make quert and get a result
    $result = mysqli_query($connected, $sql);

    // fetch resulting rows as an array
    $houses = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close the connection
    mysqli_close($connected);
?>