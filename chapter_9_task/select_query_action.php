<?php

	require_once("DBConnection.php");

	$search_word = trim($_POST['search_word']);
	//$query = "select * from coupon";
	if(empty($search_word) || strpos($search_word, " ") || strpos($search_word, "="))
	{
   		echo "please enter a valid search query. <br>";
	}
	else
	{
		$query = "select * from coupon where couponcode LIKE '%$search_word%'";
		//echo $query , "<br>";
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

?>
