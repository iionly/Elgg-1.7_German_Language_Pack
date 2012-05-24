<?php

$german = array(

	/**
	 * Menu items and titles
	 */

	'messageboard:board' => "Nachrichten-Pinnwand",
	'messageboard:messageboard' => "Nachrichten-Pinnwand",
	'messageboard:viewall' => "Alle anzeigen",
	'messageboard:postit' => "Anheften",
	'messageboard:history:title' => "Überblick",
	'messageboard:none' => "Es gibt noch keine Nachrichten auf dieser Pinnwand",
	'messageboard:num_display' => "Anzahl der anzuzeigenden Nachrichten",
	'messageboard:desc' => "Dieses Widget ist eine Nachrichten-Pinnwand, die Du zu Deiner Profilseite hinzufügen kannst, damit andere Mitglieder Dir eine Nachricht hinterlassen können.",

	'messageboard:user' => "Nachrichten-Pinnwand von %s",

	'messageboard:replyon' => 'antworten auf',
	'messageboard:history' => "Überblick",

	/**
	 * Message board widget river
	 **/

	'messageboard:river:annotate' => "%s hat eine neue Pinnwand-Nachricht erhalten.",
	'messageboard:river:create' => "%s hat das Nachrichten-Pinnwand-Widget zur Profilseite hinzugefügt.",
	'messageboard:river:update' => "%s hat das Nachrichten-Pinnwand-Widget auf der Profilseite aktualisiert.",
	'messageboard:river:added' => "%s schrieb eine Nachricht auf",
	'messageboard:river:messageboard' => "Pinnwand",


	/**
	 * Status messages
	 */

	'messageboard:posted' => "Deine Nachricht wurde auf der Pinnwand hinzugefügt.",
	'messageboard:deleted' => "Die Nachricht wurde gelöscht.",

	/**
	 * Email messages
	 */

	'messageboard:email:subject' => 'Du hast eine neue Nachricht auf Deiner Pinnwand!',
	'messageboard:email:body' => "Du hast eine neue Nachricht von %s auf Deiner Pinnwand. Die Nachricht lautet:


%s


Um Deine Pinnwand aufzurufen, folge dem Link:

	%s

Um das Profil von %s aufzurufen, folge dem Link:

	%s

Du kannst auf diese Email NICHT antworten.",

	/**
	 * Error messages
	 */

	'messageboard:blank' => "Entschuldigung. Du mußt erst etwas im Nachrichtenfeld schreiben, bevor wir es abspeichern können.",
	'messageboard:notfound' => "Entschuldigung. Wir konnten den gesuchten Eintrag nicht finden.",
	'messageboard:notdeleted' => "Entschuldigung. Die Nachricht konnte nicht gelöscht werden.",
	'messageboard:somethingwentwrong' => "Beim Speichern Deiner Nachricht ist ein Fehler aufgetreten. Hattest Du einen Text eingegeben?",

	'messageboard:failure' => "Beim Speichern Deiner Nachricht ist ein unerwarteter Fehler aufgetreten. Bitte versuche es noch einmal.",

);

add_translation("de",$german);
