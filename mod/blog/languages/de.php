<?php

	$german = array(

		/**
		 * Menu items and titles
		 */

			'blog' => "Blog",
			'blogs' => "Blogs",
			'blog:user' => "Blog von %s",
			'blog:user:friends' => "Blogs der Freunde von %s",
			'blog:your' => "Dein Blog",
			'blog:posttitle' => "Blog von %s: %s",
			'blog:friends' => "Blogs Deiner Freunde",
			'blog:yourfriends' => "Blogs Deiner Freunde",
			'blog:everyone' => "Alle Blogs der Community",
			'blog:newpost' => "Neuer Blog-Eintrag",
			'blog:via' => "via Blog",
			'blog:read' => "Lese den Blog",

			'blog:addpost' => "Schreibe einen Blog-Eintrag",
			'blog:editpost' => "Editiere einen Blog-Eintrag",

			'blog:text' => "Blogtext",

			'blog:strapline' => "%s",

			'item:object:blog' => 'Blogs',

			'blog:never' => 'niemals',
			'blog:preview' => 'Vorschau',

			'blog:draft:save' => 'Speichere Entwurf',
			'blog:draft:saved' => 'Entwurf letztmalig gespeichert',
			'blog:comments:allow' => 'Erlaube Kommentare',
                        'blog:conversation' => 'Kommentare',

			'blog:preview:description' => 'Dies ist eine noch nicht gespeicherte Vorschau Deines Blog-Eintrags.',
			'blog:preview:description:link' => 'Um Deinen Eintrag weiter zu bearbeiten oder zu speichern, hier klicken.',

			'groups:enableblog' => 'Gruppen-Blog aktivieren',
			'blog:group' => 'Gruppen-Blog',
			'blog:nogroup' => 'Diese Gruppe hat noch keine Blogs.',
			'blog:more' => 'Weitere Blogs',

			'blog:read_more' => 'Vollständigen Eintrag anzeigen',

		/**
		 * Blog widget
		 */
		'blog:widget:description' => 'Dieses Widget zeigt Deine neuesten Blogs an.',
		'blog:moreblogs' => 'Weitere Blogs',
		'blog:numbertodisplay' => 'Anzahl der anzuzeigenden Blogs',

         /**
	     * Blog river
	     **/

	        //generic terms to use
	        'blog:river:created' => "%s schrieb",
	        'blog:river:updated' => "%s aktualisierte",
	        'blog:river:posted' => "%s schrieb",

	        //these get inserted into the river links to take the user to the entity
	        'blog:river:create' => "einen neuen Blog-Eintrag mit dem Titel",
	        'blog:river:update' => "einen Blog-Eintrag mit dem Titel",
	        'blog:river:annotate' => "einen Kommentar zu dem Blog-Eintrag",


		/**
		 * Status messages
		 */

			'blog:posted' => "Dein Blog-Eintrag wurde hinzugefügt.",
			'blog:deleted' => "Dein Blog-Eintrag wurde gelöscht.",

		/**
		 * Error messages
		 */

			'blog:error' => 'Irgendetwas ging schief. Versuche es bitte noch einmal.',
			'blog:save:failure' => "Dein Blog-Eintrag konnte nicht gespeichert werden. Versuche es bitte noch einmal.",
			'blog:blank' => "Entschuldigung, Du must einen Titel und Text im Hauptteil eingeben bevor Du den Blog-Eintrag veröffentlichen kannst.",
			'blog:notfound' => "Entschuldigung, wir konnten den gesuchten Blog-Eintrag nicht finden.",
			'blog:notdeleted' => "Entschuldigung, wir konnten diesen Blog-Eintrag nicht löschen.",

	);

	add_translation("de",$german);

?>