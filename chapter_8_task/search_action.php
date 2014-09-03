<?php

	require_once("DBConnection.php");
	if (!empty($_POST['search'])) {
		$search_word = trim($_POST['search']);
		$query = "select * from coupon where couponcode LIKE '%$search_word%'";
		$db_object = new DBConnection();
		$db = $db_object->connect();
		$results = mysqli_query($db, $query);
		while ($row = mysqli_fetch_array($results))
		{ 
			echo($row['couponcode'] . ' ' . 
			$row['percentageoff']); 
			echo "<br>";
		}
		$db_object->disconnect();
	}
	else{
		echo "search field can't be empty.";
	}

?>
