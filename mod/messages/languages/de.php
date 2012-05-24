<?php

	$german = array(

		/**
		 * Menu items and titles
		 */

			'messages' => "Nachrichten",
            'messages:back' => "zurück zur Nachrichten-Übersicht",
			'messages:user' => "Deine Inbox",
			'messages:posttitle' => "Nachrichten von %s: %s",
			'messages:inbox' => "Inbox",
			'messages:send' => "Eine Nachricht senden",
			'messages:sent' => "Gesendete Nachrichten",
			'messages:message' => "Nachricht",
			'messages:title' => "Titel",
			'messages:to' => "An",
            'messages:from' => "Von",
			'messages:fly' => "Senden",
			'messages:replying' => "Antwort auf",
			'messages:inbox' => "Inbox",
			'messages:sendmessage' => "Eine Nachricht senden",
			'messages:compose' => "Eine Nachricht verfassen",
			'messages:sentmessages' => "Gesendete Nachrichten",
			'messages:recent' => "Neueste Nachrichten",
            'messages:original' => "Ursprüngliche Nachricht",
            'messages:yours' => "Deine Nachricht",
            'messages:answer' => "Antworten",
			'messages:toggle' => 'Alle auswählen',
			'messages:markread' => 'Als gelesen markieren',

			'messages:new' => 'Neue Nachricht',

			'notification:method:site' => 'Community-Seite',

			'messages:error' => 'Beim Speichern Deiner Nachricht ist ein Problem aufgetreten. Bitte versuche es noch einmal.',

			'item:object:messages' => 'Nachrichten',

		/**
		 * Status messages
		 */

			'messages:posted' => "Deine Nachricht wurde gesendet.",
			'messages:deleted' => "Die Nachrichten wurden gelöscht.",
			'messages:markedread' => "Die Nachrichten wurden als gelesen markiert.",

		/**
		 * Email messages
		 */

			'messages:email:subject' => 'Du hast eine neue Nachricht!',
			'messages:email:body' => "Du hast eine neue Nachricht von %s erhalten. Sie lautet:


%s


Um zu Deiner Inbox zu kommen, folge dem Link:

	%s

Um %s eine Nachricht zu schicken, folge dem Link:

	%s

Du kannst auf diese Email NICHT antworten.",

		/**
		 * Error messages
		 */

			'messages:blank' => "Entschuldigung, Du mußt erst einen im Hauptteil der Nachricht schreiben, bevor die Nachricht versendet werden kann.",
			'messages:notfound' => "Entschuldigung, wir konnten die gesuchte Nachricht nicht finden.",
			'messages:notdeleted' => "Entschuldigung, die Nachricht konnte nicht gelöscht werden.",
			'messages:nopermission' => "Du hast keine Berechtigung, um diese Nachricht zu bearbeiten.",
			'messages:nomessages' => "Es gibt keine Nachrichten, die angezeigt werden können.",
			'messages:user:nonexist' => "Wir konnten den Empfänger der Nachricht nicht in der Datenbank der Community-Seite finden.",
			'messages:user:blank' => "Du hast keinen Empfänger für Deine Nachricht ausgewählt.",

                        'messages:deleted_sender' => 'Ehemaliges Mitglied',

	);

	add_translation("de",$german);
