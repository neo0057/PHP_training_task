<body>
	<form id='search' action='search_action.php' method='post' accept-charset='UTF-8'>
	Search Keyword:  <input type='text' name='search' id='search'/>
	<input type='Submit' name='Search'/>
	<?php
		require_once("search_action.php");
	?> 
</body>
