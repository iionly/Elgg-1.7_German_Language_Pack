<?php
	/**
	 * Elgg diagnostics language pack.
	 *
	 * @package ElggDiagnostics
	 */

	$german = array(

			'diagnostics' => 'Systemdiagnose',
			'diagnostics:unittester' => 'Unit-Tests',

			'diagnostics:description' => 'Der folgende Diagnosereport kann zur Lösung bei allen mit Elgg auftretenden Problemen hilfreich sein und sollte zu allen gemeldeten Bugs beigefügt werden.',
			'diagnostics:unittester:description' => 'Folgende Diagnosetests wurden von Plugins registriert und können für die Fehlersuche in Teilbereichen des Elgg-Frameworks ausgeführt werden.',

			'diagnostics:unittester:description' => 'Unit-Tests überprüfen den Elgg Core auf nicht funktionierende oder fehlerhafte APIs.',
			'diagnostics:unittester:debug' => 'Zur Durchführung der Unit-Tests muss die Seite im Debug-Mode sein.',
			'diagnostics:unittester:warning' => 'WARNUNG: Diese Tests können Debugging-Einträge in Deiner Datenbank hinterlassen. BITTE NICHT AUF DEINER HAUPTINSTALLATION SONDERN NUR IN EINER TESTINSTALLATION VERWENDEN!',

			'diagnostics:test:executetest' => 'Test ausführen',
			'diagnostics:test:executeall' => 'Alle Tests ausführen',
			'diagnostics:unittester:notests' => 'Entschuldigung, derzeit sind keine Unit-Tests installiert.',
			'diagnostics:unittester:testnotfound' => 'Entschuldigung, der Report konnte nicht erzeugt werden, da der Test nicht gefunden werden konnte',

			'diagnostics:unittester:testresult:nottestclass' => 'KEIN ERFOLG - das Ergebnis ist keine Test-Klasse',
			'diagnostics:unittester:testresult:fail' => 'KEIN ERFOLG',
			'diagnostics:unittester:testresult:success' => 'ERFOLG',

			'diagnostics:unittest:example' => 'Beispiel-Unit-Test, nur im Debug-Mode verfügbar.',

			'diagnostics:unittester:report' => 'Testreport für %s',

			'diagnostics:download' => 'Report herunterladen',


			'diagnostics:header' => '========================================================================
Elgg-Diagnose-Report
Generiert %s von %s
========================================================================

',
			'diagnostics:report:basic' => '
Elgg-Release %s, Version %s

------------------------------------------------------------------------',
			'diagnostics:report:php' => '
PHP-Info:
%s
------------------------------------------------------------------------',
			'diagnostics:report:plugins' => '
Einzelheiten zu den installierten Plugins:

%s
------------------------------------------------------------------------',
			'diagnostics:report:md5' => '
Installierte Dateien und Prüfsummen:

%s
------------------------------------------------------------------------',
			'diagnostics:report:globals' => '
Globale Variablen:

%s
------------------------------------------------------------------------',

	);

	add_translation("de",$german);
?>