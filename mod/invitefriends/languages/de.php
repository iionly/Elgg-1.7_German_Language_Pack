<?php

/**
 * Elgg invite language file
 *
 * @package ElggInviteFriends
 */

$german = array(

	'friends:invite' => 'Freunde einladen',
	'invitefriends:introduction' => 'Um Deine Freunde einzuladen, dieser Community-Seite beizutreten, geben im Folgenden deren Email-Adressen ein (eine Adresse pro Zeile):',
	'invitefriends:message' => 'Gebe eine Nachricht ein, die mit der Einladung zusammen versendet wird:',
	'invitefriends:subject' => 'Einladung für die Community-Webseite %s',

	'invitefriends:success' => 'Die Einladungen an Deine Freunde wurden versendet.',
	'invitefriends:invitations_sent' => 'Versendete Einladungen: %s. Es traten folgende Probleme auf:',
	'invitefriends:email_error' => 'Die folgenden Email-Adressen sind ungültig: %s',
	'invitefriends:already_members' => 'Die folgenden Leute sind bereits Mitglied der Community: %s',
	'invitefriends:noemails' => 'Es wurden keine Email-Adressen eingegeben.',

	'invitefriends:message:default' => '
Hallo,

Ich möchte Dich einladen, meiner Community-Seite %s beizutreten.',

	'invitefriends:email' => '
Durch wurdest eingeladen, der Community-Seite %s beizutreten. Die Einladung wurde von %s versendet. Die folgende Nachricht wurde der Einladung beigefügt:

%s

Um der Community-Seite beizutreten, folge dem folgenden Link:

%s

Nachdem Du einen Account auf der Community-Seite erstellt hast, wirst das Mitglied, das Dich eingeladen hat, automatisch in Deine Freundesliste aufgenommen.',

	);

add_translation("de", $german);
