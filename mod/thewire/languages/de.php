<?php

	$german = array(

		/**
		 * Menu items and titles
		 */

			'thewire' => "Der Heiße Draht",
			'thewire:user' => "Der Heiße Draht von %s",
			'thewire:posttitle' => "%s schrieb eine Nachricht im Heißen Draht: %s",
			'thewire:everyone' => "Alle Nachrichten im Heißen Draht",
                        'thewire:friends:title' => "Freunde von %s im Heißen Draht",
                        'thewire:friends' => 'Deine Freunde im Heißen Draht',

                        'thewire:yours' => "Deine Nachrichten im Heißen Draht",
                        'thewire:theirs' => "Nachrichten von %s im Heißen Draht",

			'thewire:strapline' => "%s",

			'thewire:add' => "Eine Nachricht im Heißen Draht schreiben",
			'thewire:text' => "Eine Nachricht im Heißen Draht",
			'thewire:reply' => "Antworten",
			'thewire:via_method' => "via %s",
			'thewire:wired' => "Zum Heißen Draht hinzugefügt",
			'thewire:charleft' => "Zeichen übrig",
			'item:object:thewire' => "Nachrichten im Heißen Draht",
			'thewire:notedeleted' => "Nachricht gelöscht",
			'thewire:doing' => "Was machst Du gerade? Teile es der Community über den Heißen Draht mit:",
			'thewire:newpost' => 'Neue Nachricht im Heißen Draht',
			'thewire:addpost' => 'Eine Nachricht zum Heißen Draht hinzufügen',
			'thewire:by' => "Nachricht von %s im Heißen Draht",
			'thewire:update' => 'Aktualisieren',


		/**
		 * The wire river
		 **/

			//generic terms to use
			'thewire:river:created' => "%s schrieb",

			//these get inserted into the river links to take the user to the entity
			'thewire:river:create' => "im Heißen Draht.",

		/**
		 * Wire widget
		 **/

			'thewire:sitedesc' => 'In diesem Widget werden die neuestes Nachrichten angezeigt, die zum Heißen Draht hinzugefügt wurden',
			'thewire:yourdesc' => 'In diesem Wiget werden Deine neuesten Nachrichten im Heißen Draht angezeigt',
			'thewire:friendsdesc' => 'In diesem Wiget werden die neuesten Nachrichten Deiner Freunde im Heißen Draht angezeigt',
			'thewire:num' => 'Anzahl der anzuzeigenden Einträge',
			'thewire:moreposts' => 'Weitere Nachrichten im Heißen Draht',


		/**
		 * Status messages
		 */

			'thewire:posted' => "Deine Nachricht wurde dem Heißen Draht hinzugefügt.",
			'thewire:deleted' => "Deine Nachricht wurde aus dem Heißen Draht gelöscht.",

		/**
		 * Error messages
		 */

			'thewire:blank' => "Entschuldigung, Du mußt erst etwas schreiben, bevor wir es abspeichern können.",
			'thewire:notfound' => "Entschuldigung, die gesuchte Nachricht aus dem Heißen Draht konnte nicht gefunden werden.",
			'thewire:notdeleted' => "Entschuldigung, wir konnten diese Nachricht nicht aus dem Heißen Draht löschen.",


		/**
		 * Settings
		 */
			'thewire:smsnumber' => "Deine SMS-Nummer ist anders als Deine Handy-Nummer (der Zugangslevel für die Handy-Nummer muss auf Öffentlich gesetzt sein, damit der Heiße Draht Zugriff darauf hat). Alle Telefonnummern müssen im internationalen Format angegeben werden.",
			'thewire:channelsms' => "Die Telefonnummer, um SMS-Nachrichten zu versenden, ist <b>%s</b>",

		// twitter
			'thewire:twitterservice:desc' => 'Veröffentlicht alle Nachrichten, die im Heißen Draht gemacht werden, auf Twitter.',

	);

	add_translation("de",$german);

?>