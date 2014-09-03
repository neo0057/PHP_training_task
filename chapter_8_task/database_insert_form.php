<body>

	<form id='database_insert_form' action='database_insert.php' method='post' accept-charset='UTF-8'>
	CouponCode:  <input type='text' name='couponcode'/>
	Percentage Off: <input type='text' name='percentageoff'/>
	<input type='Submit' name='Insert'/>
	<?php
		require_once("database_insert.php");
	?> 

</body>
