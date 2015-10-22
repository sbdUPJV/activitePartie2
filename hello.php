<?php
/*
	ce script permet de dire bonjour au personnes listées dans le tableau $tableNames
**/

$tableNames = array("Marc", "Stéphane", "tous les autres");

foreach($tableNames as $name) :
	// afficher bonjour
	echo "bonjour " . $name . "<br />";

endforeach;
?>