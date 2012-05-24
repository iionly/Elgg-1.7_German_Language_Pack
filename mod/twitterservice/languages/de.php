<?php
/**
 * An english language definition file
 */

$german = array(
	'twitterservice' => 'Twitter-Service',

	'twitterservice:consumer_key' => 'Consumer Key',
	'twitterservice:consumer_secret' => 'Consumer Secret',

	'twitterservice:usersettings:description' => "Verbinde Deinen Account auf {$CONFIG->site->name} mit Twitter.",
	'twitterservice:usersettings:request' => "Du mußt zuerst {$CONFIG->site->name} <a href=\"%s\">authorisieren</a>, Zugriff auf Deinen Twitter-Account zu haben.",
	'twitterservice:authorize:error' => 'Twitter-Authorisierung fehlgeschlagen.',
	'twitterservice:authorize:success' => 'Twitter-Zugriff wurde authorisiert.',

	'twitterservice:usersettings:authorized' => "Du hast {$CONFIG->site->name} authorisiert, auf Deinen Twitter-Account @%s zuzugreifen. Wenn Tweets nicht angezeigt werden, mußt Du möglicherwese die Authorisierung wiederholen. In diesem Fall klicke unten auf Widerrufen, dann gehe zu <a href=\"http://twitter.com/settings/connections\">Twitter Connection Settings</a> und widerufe den Zugriff für for %s. Rufe dann diese Seite wieder auf und wiederhole die Authorisierung.",
	'twitterservice:usersettings:revoke' => '<a href="%s">Hier</a> klicken, um den Zugriff zu widerrufen.',
	'twitterservice:revoke:success' => 'Twitter-Zugriff wurde widerrufen.',

	'twitterservice:usersettings:allowed_plugins' => 'Erlaubte Plugins',
);

add_translation('de', $german);
