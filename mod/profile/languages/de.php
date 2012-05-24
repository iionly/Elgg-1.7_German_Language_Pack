<?php
	/**
	 * Elgg profile plugin language pack
	 *
	 * @package ElggProfile
	 */

	$german = array(

	/**
	 * Profile
	 */

		'profile' => "Profil",
		'profile:edit:default' => 'Profilfelder ersetzen',
		'profile:preview' => 'Vorschau',

	/**
	 * Profile menu items and titles
	 */

		'profile:yours' => "Dein Profil",
		'profile:user' => "Profil von %s",

		'profile:edit' => "Profil bearbeiten",
		'profile:profilepictureinstructions' => "Das Profilbild ist das Bild, das auf Deiner Profilseite angezeigt wird. <br /> Du kannst es so oft ändern wie Du willst. (Mögliche Dateiformate: GIF, JPG oder PNG)",
		'profile:icon' => "Profilbild",
		'profile:createicon' => "Profilbild erstellen",
		'profile:currentavatar' => "Derzeitiges Profilbild",
		'profile:createicon:header' => "Profilbild",
		'profile:profilepicturecroppingtool' => "Tool zum Zuschneiden des Profilbildes",
		'profile:createicon:instructions' => "Um Dein Profilbild nach Deinen Wünschen zuzuschneiden (optional), klicke es an und markiere einen quadratischen Ausschnitt während Du die Maustaste gedrückt hältst. Du kannst den Ausschnitt anschließend auch verschieben und in der Größe anpassen. Eine Vorschau Deines Profilbildes wird in der Box rechts daneben dargestellt. Wenn Du zufrieden mit dem Zuschneiden bist, klicke auf 'Profilbild erstellen', um das Profilbild zu übernehmen. Das zugeschnittene Bild wird dann auf der ganzen Community-Seite als Dein Profilbild verwendet.",

		'profile:editdetails' => "Details bearbeiten",
		'profile:editicon' => "Profilbild auswählen",

		'profile:aboutme' => "Über mich",
		'profile:description' => "Über mich",
		'profile:briefdescription' => "Kurzbeschreibung",
		'profile:location' => "Heimatort",
		'profile:skills' => "Fähigkeiten",
		'profile:interests' => "Interessen",
		'profile:contactemail' => "Email-Kontaktadresse",
		'profile:phone' => "Telefon",
		'profile:mobile' => "Handy",
		'profile:website' => "Webseite",

		'profile:banned' => 'Dieser Benutzeraccount wurde gesperrt.',
		'profile:deleteduser' => 'Benutzeraccount gelöscht',

		'profile:river:update' => "%s hat ihr/sein Profil aktualisiert",
		'profile:river:iconupdate' => "%s hat ihr/sein Profilbild aktualisiert",

		'profile:label' => "Name des Profilfeldes",
		'profile:type' => "Feldtyp",

		'profile:editdefault:fail' => 'Die Änderung der Profilfelder konnte nicht gespeichert werden',
		'profile:editdefault:success' => 'Das Feld wurde zum verwendeten Profil hinzugefügt',


		'profile:editdefault:delete:fail' => 'Das Entfernen des Feldes aus dem Profil ist fehlgeschlagen',
		'profile:editdefault:delete:success' => 'Das Feld wurde aus dem Profil entfernt!',

		'profile:defaultprofile:reset' => 'Das Standard-Profil wurde wiederhergestellt',

		'profile:resetdefault' => 'Standard-Profil wiederherstellen',
		'profile:explainchangefields' => 'Hier kannst Du die existierenden Profilfelder durch eigene Felder ersetzen. Zuerst mußt Du einen Namen für das neue Feld eingeben, z.B. \'Lieblingsteam\'. Dann mußt Du den Typ des Feldes auswählen. Du kannst jederzeit das ursprüngliche Standard-Profil wiederherstellen.',


	/**
	 * Profile status messages
	 */

		'profile:saved' => "Die Änderungen an Deinem Profil wurden gespeichert.",
		'profile:icon:uploaded' => "Dein Profilbild wurde hochgeladen.",

	/**
	 * Profile error messages
	 */

		'profile:noaccess' => "Du hast keine Berechtigung, um dieses Profil zu bearbeiten.",
		'profile:notfound' => "Entschuldigung, wir konnten das gesuchte Profil nicht finden.",
		'profile:icon:notfound' => "Entschuldigung, das Hochladen Deines Profilbildes ist fehlgeschlagen.",
		'profile:icon:noaccess' => 'Du hast keine Berechtigung, um dieses Profilbild zu ändern',
		'profile:field_too_long' => 'Die Änderungen an Deinem Profil können nicht gespeichert werden, da der Inhalt von Feld "%s" zu lang ist.',

	);

	add_translation("de",$german);