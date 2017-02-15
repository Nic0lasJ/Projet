<?php


	$link = mysql_connect("localhost", "nicolas", "nicolas");

	mysql_select_db("givebox", $link) or die(mysql_error());

	$query = "SELECT * FROM `users`";
	$result = mysql_query($query, $link) or die($query . " - " . mysql_error());

	$nbResults = mysql_num_rows($result);
	echo $nbResults;
	echo "<br /><br />";

	while ($tab = mysql_fetch_array($result)) {
		echo $tab['prenom'] . " : " .  $tab['email'];
		echo "<br />";
	}

	echo "<br />";

	$result = mysql_query($query, $link) or die($query . " - " . mysql_error());

	while ($tab = mysql_fetch_object($result)) {
		echo $tab->username . " : " .  $tab->password;
		echo "<br />";
	}

	mysql_close($link);
?>
