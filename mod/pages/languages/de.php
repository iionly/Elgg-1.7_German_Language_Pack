<?php
	/**
	 * Elgg pages plugin language pack
	 *
	 * @package ElggPages
	 */

	$german = array(

		/**
		 * Menu items and titles
		 */

			'pages' => "Coop-Seiten",
			'pages:yours' => "Deine Coop-Seiten",
			'pages:user' => "Startpunkt Coop-Seiten",
			'pages:group' => "Gruppen-Coop-Seiten",
			'pages:all' => "Alle Coop-Seiten der Community",
			'pages:new' => "Neue Coop-Seite",
			'pages:groupprofile' => "Gruppen-Coop-Seiten",
			'pages:edit' => "Diese Coop-Seite bearbeiten",
			'pages:delete' => "Diese Coop-Seite löschen",
			'pages:history' => "Bearbeitungsverlauf der Coop-Seite",
			'pages:view' => "Coop-Seite anzeigen",
			'pages:welcome' => "Begrüßungsnachricht bearbeiten",
			'pages:welcomemessage' => "Willkommen im Coop-Seiten-Bereich. Hier kannst Du Beiträge erstellen, die Du auch zusammen mit anderen Mitgliedern bearbeiten kannst. Für jede Coop-Seite kannst Du festlegen, wer sie sehen und bearbeiten kann.",
			'pages:welcomeerror' => "Beim Abspeichern Deiner Begrüßungsnachricht ist ein Problem aufgetreten",
			'pages:welcomeposted' => "Deine Begrüßungsnachricht wurde gespeichert",
			'pages:navigation' => "Coop-Seiten-Navigation",
	                'pages:via' => "via Coop-Seiten",
			'item:object:page_top' => 'Haupt-Coop-Seiten',
			'item:object:page' => 'Coop-Seiten',
			'item:object:pages_welcome' => 'Coop-Seiten Begrüßungsabschnitt',
			'pages:nogroup' => 'Diese Gruppe hat noch keine Coop-Seiten.',
			'pages:more' => 'Weitere Coop-Seiten',

		/**
		* River
		**/

		    'pages:river:annotate' => "einen Kommentar zu dieser Coop-Seite",
		    'pages:river:created' => "%s schrieb",
	        'pages:river:updated' => "%s aktualisierte",
	        'pages:river:posted' => "%s schrieb",
			'pages:river:create' => "eine neue Coop-Seite mit dem Titel",
	        'pages:river:update' => "eine Coop-Seite mit dem Titel",
	        'page:river:annotate' => "einen Kommentar zu dieser Coop-Seite",
	        'page_top:river:annotate' => "einen Kommentar zu dieser Coop-Seite",

		/**
		 * Form fields
		 */

			'pages:title' => 'Titel der Coop-Seite',
			'pages:description' => 'Seitentext',
			'pages:tags' => 'Tags',
			'pages:access_id' => 'Zugangslevel',
			'pages:write_access_id' => 'Schreibberechtigung',

		/**
		 * Status and error messages
		 */
			'pages:noaccess' => 'Keine Zugangsberechtigung für diese Coop-Seite',
			'pages:cantedit' => 'Du kannst diese Coop-Seite nicht bearbeiten',
			'pages:saved' => 'Coop-Seite wurde gespeichert',
			'pages:notsaved' => 'Coop-Seite konnte nicht gespeichert werden',
			'pages:notitle' => 'Du mußt einen Titel für Deine Coop-Seite angeben.',
			'pages:delete:success' => 'Die Coop-Seite wurde gelöscht.',
			'pages:delete:failure' => 'Die Coop-Seite konnte nicht gelöscht werden.',

		/**
		 * Page
		 */
			'pages:strapline' => '%s zuletzt aktualisiert von %s',

		/**
		 * History
		 */
			'pages:revision' => '%s wurde geändert von %s',

		/**
		 * Widget
		 **/

		    'pages:num' => 'Anzahl der anzuzeigenden Coop-Seiten',
			'pages:widget:description' => "Dies ist eine Liste Deiner Coop-Seiten.",

		/**
		 * Submenu items
		 */
			'pages:label:view' => "Coop-Seite anzeigen",
			'pages:label:edit' => "Coop-Seite bearbeiten",
			'pages:label:history' => "Bearbeitungsverlauf der Coop-Seite",

		/**
		 * Sidebar items
		 */
			'pages:sidebar:this' => "Diese Coop-Seite",
			'pages:sidebar:children' => "Unter-Coop-Seiten",
			'pages:sidebar:parent' => "Übergeordnete Coop-Seite",

			'pages:newchild' => "Eine Unter-Coop-Seite erstellen",
			'pages:backtoparent' => "Zurück zu '%s'",
	);

	add_translation("de",$german);
?>