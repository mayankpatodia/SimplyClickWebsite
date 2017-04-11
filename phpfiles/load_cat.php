<?php
 	require_once('db.php');

	$cat_arr=array();

	if(!isset($_GET['id']))
		$sql_load_cat = "SELECT * FROM category";
	else{
		$id=$_GET['id'];
		$sql_load_cat = "SELECT * FROM category where id=$id";
	}
		$result = $conn->query($sql_load_cat);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        // echo "id: " . $row['id'] . '<br>';
	        // echo "name: " . $row['name'] . '<br>';
	        // echo "description: " . $row['description'] . '<br>';
	        // echo "category_logo: " . $row['category_logo'] . '<br>';
	        // echo "date_created: " . $row['date_created'] . '<br><br>';

	        array_push($cat_arr, array('id' => $row['id'], 'name' => $row["name"], 'description' => htmlentities($row['description']),'src' => $row["category_logo"]));
	    }
	} else {
	    echo "0 results";
	}

	echo json_encode($cat_arr);
	$conn->close();

?>
