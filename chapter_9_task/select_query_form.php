<body>

	<form id='select_query_form' action='select_query_action.php' method='post' accept-charset='UTF-8'>
	Search Keyword:  <input type='text' name='search_word' id='search_word'/>
	<input type='Submit' name='Search'/>
	<?php 
		require_once("select_query_action.php");
	?> 

</body>
