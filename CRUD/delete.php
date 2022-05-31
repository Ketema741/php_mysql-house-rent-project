<?php 
	$connected = mysqli_connect('localhost','ofi','kg123','house_rent');

    //check connection
    if(!$connected){
        print_r("not connected"); 
        echo 'error '. mysqli_connect_error();

    }

    
    if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($connected, $_POST['id_to_delete']);

		$sql = "DELETE FROM houses WHERE id = $id_to_delete";

		if(mysqli_query($connected, $sql)){
			header('Location: ../admin.php');
            
		} else {
			echo 'query error: '. mysqli_error($connected);
		}

	}
?>