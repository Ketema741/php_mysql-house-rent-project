<?php 
  	include('config/db_connect.php');

	// escape sql chars
	if(isset($_POST['add'])){
		$house_title 	= mysqli_real_escape_string($connected, $_POST['title']);
		$house_location = mysqli_real_escape_string($connected, $_POST['location']);
		$house_rooms 	= mysqli_real_escape_string($connected, $_POST['rooms']);
		$house_area 	= mysqli_real_escape_string($connected, $_POST['area']);
		$house_price 	= mysqli_real_escape_string($connected, $_POST['price']);
		$house_image 	= mysqli_real_escape_string($connected, $_POST['image']);

		// create sql
		$sql = "INSERT INTO houses(house_image,house_title,house_location,house_rooms,house_area,house_price) VALUES('$house_image','$house_title','$house_location','$house_rooms','$house_area','$house_price')";

		// save to db and check
		if(mysqli_query($connected, $sql)){
			// success
			header('Location: ../admin.php');
		} else {
			echo 'query error: '. mysqli_error($connected);
		}
	}

?>



