<?php
/*
	ce script permet de dire bonjour au personnes list�es dans le tableau $tableNames
**/

$tableNames = array("Marc", "St�phane", "tous les autres");

foreach($tableNames as $name) :
	// afficher bonjour
	echo "bonjour " . $name . "<br />";

endforeach;
?>