<?php
	/**
	 * Elgg file plugin language pack
	 *
	 * @package ElggFile
	 */

	$german = array(

		/**
		 * Menu items and titles
		 */

			'file' => "Dateien",
			'files' => "Dateien",
			'file:yours' => "Deine Dateien",
			'file:yours:friends' => "Dateien Deiner Freunde",
			'file:user' => "Dateien von %s",
			'file:friends' => "Dateien der Freunde von %s",
			'file:all' => "Alle Dateien der Community",
			'file:edit' => "Datei-Eintrag editieren",
			'file:list' => "Listenansicht",
			'file:gallery' => "Gallerieansicht",
			'file:gallery_list' => "Gallerie- oder Listenansicht",
			'file:num_files' => "Anzahl der anzuzeigenden Dateien",
			'file:user:gallery'=>'Anzeigen von %s Gallerie',
	                'file:via' => 'via Dateien',
			'file:upload' => "Eine Datei hochladen",
			'file:replace' => 'Ersetzen der Datei (leer lassen, um Datei nicht zu ändern)',

			'file:group' => "Gruppen-Dateien",
			'groups:enablefiles' => 'Gruppen-Dateien aktivieren',
			'file:newupload' => 'Neue Datei hochgeladen',
			'file:more' => "Weitere Dateien",

			'file:nogroup' => 'Diese Gruppe hat noch keine Dateien.',

			'file:file' => "Datei",
			'file:title' => "Titel",
			'file:desc' => "Beschreibung",
			'file:tags' => "Tags",

			'file:types' => "Hochgeladene Dateitypen",

			'file:type:all' => "Alle Dateien",
			'file:type:video' => "Videos",
			'file:type:document' => "Dokumente",
			'file:type:audio' => "Audio-Dateien",
			'file:type:image' => "Bilder",
			'file:type:general' => "Unbestimmte Dateien",

			'file:user:type:video' => "Videos von %s",
			'file:user:type:document' => "Dokumente von %s",
			'file:user:type:audio' => "Audio-Dateien von %s",
			'file:user:type:image' => "Bilder von %s",
			'file:user:type:general' => "Unbestimmte Dateien von %s",

			'file:friends:type:video' => "Videos Deiner Freunde",
			'file:friends:type:document' => "Dokumente Deiner Freunde",
			'file:friends:type:audio' => "Audio-Dateien Deiner Freunde",
			'file:friends:type:image' => "Bilder Deiner Freunde",
			'file:friends:type:general' => "Unbestimmte Dateien Deiner Freunde",

			'file:widget' => "Datei-Widget",
			'file:widget:description' => "Auflistung Deiner neuesten Dateien",

			'file:download' => "Download",

			'file:delete:confirm' => "Bist Du sicher, dass Du diese Datei löschen willst?",

			'file:tagcloud' => "Tagcloud",

			'file:display:number' => "Anzahl der anzuzeigenden Dateien",

			'file:river:created' => "%s hat",
			'file:river:item' => "eine Datei hochgeladen: ",
			'file:river:annotate' => "einen Kommentar zu dieser Datei",

			'item:object:file' => 'Dateien',

	    /**
		 * Embed media
		 **/

		    'file:embed' => "Medien einbetten",
		    'file:embedall' => "Alle",

		/**
		 * Status messages
		 */

			'file:saved' => "Deine Datei wurde gespeichert.",
			'file:deleted' => "Deine Datei wurde gelöscht.",

		/**
		 * Error messages
		 */

			'file:none' => "Keine Dateien hochgeladen.",
			'file:uploadfailed' => "Entschuldigung, wir konnten Deine Datei nicht speichern.",
			'file:downloadfailed' => "Entschuldigung, diese Datei ist derzeit nicht verfügbar.",
			'file:deletefailed' => "Deine Datei konnte zu diesem Zeitpunkt nicht gelöscht werden.",
			'file:noaccess' => "Du hast keine Berechtigung, um diesen Datei-Eintrag zu ändern",
			'file:cannotload' => "Beim Hochladen dieser Datei ist ein Fehler aufgetreten",
			'file:nofile' => "Du mußt eine Datei auswählen",
	);

	add_translation("de",$german);
?>