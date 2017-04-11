<?php
 	require_once('db.php');

	$theme_arr=array();

	$id=$_GET['id'];
	$sql_load_cat = "SELECT * FROM theme where category_id=$id";
	$result = $conn->query($sql_load_cat);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
       		// echo "id: " . $row['id'] . '<br>';
	        // echo "name: " . $row['name'] . '<br>';
	        // echo "description: " . $row['description'] . '<br>';
	        // echo "category_logo: " . $row['category_logo'] . '<br>';
	        // echo "date_created: " . $row['date_created'] . '<br><br>';

	        array_push($theme_arr, array('id' => $row['id'], 'name' => $row["name"],'theme_image' => $row['theme_image'],'url' => $row['url'],'category_id' => $row['category_id'],'user_name' => $row['user_name'],'description' => htmlentities($row['description']),'date_created' => $row['date_created']));
	        // 'description' => $row['description'],
	    }
	} else {
	    echo "0 results";
	}

	echo json_encode($theme_arr);
	$conn->close();

?>
