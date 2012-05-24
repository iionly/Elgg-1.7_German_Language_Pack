<?php
	/**
	 * Elgg log rotator language pack.
	 *
	 * @package ElggLogRotate
	 */

	$german = array(
		'logrotate:period' => 'Wie oft sollen die Einträge im Systemlog archiviert werden?',

		'logrotate:weekly' => 'Einmal pro Woche',
		'logrotate:monthly' => 'Einmal pro Monat',
		'logrotate:yearly' => 'Einmal pro Jahr',

		'logrotate:logrotated' => "Die alten Einträge im Logfile wurden archiviert\n",
		'logrotate:lognotrotated' => "Beim Archivieren der alten Einträge im Logfile ist ein Fehler aufgetreten\n",
	);

	add_translation("de",$german);
?>