<?php 
	include('config/db_connect.php');

    if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($connected, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM houses WHERE id = $id";
		// get the query result
		$result = mysqli_query($connected, $sql);

		// fetch result in array format
		$house = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($connected);
        // print_r($house);
	}
?>