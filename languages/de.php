<?php
/**
 * Core language file
 *
 * @package Elgg
 * @subpackage Core
 */

/**
 * German Language File - Elgg 1.7.5
 * Deutsche Sprachdatei - Elgg 1.7.5
 * übersetzt von iionly (iionly@gmx.de)
 */

$german = array(

/**
 * Sites
 */

	'item:site' => 'Seiten',

/**
 * Sessions
 */

	'login' => "Anmelden",
	'loginok' => "Du bist nun angemeldet.",
	'loginerror' => "Wir konnten Dich nicht anmelden. Die möglichen Gründe dafür sind, dass Du Deinen Account noch nicht validiert hast, die von Dir eingegebenen Anmelde-Daten nicht korrekt waren oder dass Du die Anmeldung zu oft mit falschen Eingaben versucht hast. Vergewissere Dich, dass die Eingaben richtig sind und versuche es noch einmal.",

	'logout' => "Abmelden",
	'logoutok' => "Du bist nun abgemeldet.",
	'logouterror' => "Wir konnten Dich nicht abmelden. Bitte versuche es noch einmal.",

	'loggedinrequired' => "Du mußt angemeldet sein, um diese Seite aufrufen zu können.",
	'adminrequired' => "Du mußt ein Administrator sein, um diese Seite aufrufen zu können.",
	'membershiprequired' => "Du mußt Mitglied dieser Gruppe sein, um diese Seite aufrufen zu können.",


/**
 * Errors
 */
	'exception:title' => "Willkommen zu Elgg.",

	'InstallationException:CantCreateSite' => "Die Elgg-Seite mit Namen %s und URL %s konnte nicht erzeugt werden",

	'actionundefined' => "Die angeforderte Aktion (%s) ist im System nicht definiert.",
	'actionloggedout' => "Entschuldigung, Du kannst diese Aktion nicht ausführen während Du nicht angemeldet bist.",
	'actionunauthorized' => 'Du bist nicht authorisiert, diese Aktion auszuführen',

	'SecurityException:Codeblock' => "Zugriff auf die Ausführung des privilegierten Codeabschnittes verweigert",
	'DatabaseException:WrongCredentials' => "Elgg konnte mit den gegebenen Verbindungsparametern keine Verbindung zur Datenbank herstellen.",
	'DatabaseException:NoConnect' => "Elgg konnte keine Verbindung mit der Datenbank '%s' herstellen. Bitte prüfe, ob die Datenbank erzeugt wurde und Du die Rechte hast, um auf sie zuzugreifen.",
	'SecurityException:FunctionDenied' => "Zugriff auf die privilegierte Funktion '%s' verweigert.",
	'DatabaseException:DBSetupIssues' => "Einige Probleme sind aufgetreten: ",
	'DatabaseException:ScriptNotFound' => "Elgg konnte das angeforderte Datenbankskript %s nicht finden.",

	'IOException:FailedToLoadGUID' => "Das Laden der neuen Form %s von GUID ist gescheitert:%d",
	'InvalidParameterException:NonElggObject' => "Übergabe eines unzulässigen ElggObjects an einen ElggObject-Konstruktor!",
	'InvalidParameterException:UnrecognisedValue' => "Unbekannter Wert einen einen Konstruktor übergeben.",

	'InvalidClassException:NotValidElggStar' => "GUID:%d ist kein zulässiger %s",

	'PluginException:MisconfiguredPlugin' => "%s ist ein falsch konfiguriertes Plugin. Es wurde deaktiviert. Im Elgg-Wiki sind einige mögliche Ursachen für das Problem beschrieben (http://docs.elgg.org/wiki/).",

	'InvalidParameterException:NonElggUser' => "Übergabe eines unzulässigen ElggUsers-Objekts an einen ElggUser-Konstruktor!",

	'InvalidParameterException:NonElggSite' => "Übergabe einer unzulässigen ElggSite-Objekts an einen ElggSite-Konstruktor!",

	'InvalidParameterException:NonElggGroup' => "Übergabe einer unzulässigen ElggGroup-Objekts an einen ElggGroup-Konstruktor!",

	'IOException:UnableToSaveNew' => "Speichern der neuen %s war nicht erfolgreich",

	'InvalidParameterException:GUIDNotForExport' => "GUID wurde beim Exportieren nicht spezifiziert. Das sollte normalerweise nicht passieren.",
	'InvalidParameterException:NonArrayReturnValue' => "Der Entitäts-Serialisierungs-Funktion wurde ein Rückgabewert übergeben, der nicht als Feld definiert ist",

	'ConfigurationException:NoCachePath' => "Der Pfad des Cache ist nicht gesetzt!",
	'IOException:NotDirectory' => "%s ist kein Verzeichnis.",

	'IOException:BaseEntitySaveFailed' => "Das Speichern der Basis-Entitäts-Informationen für das neue Objekt ist gescheitert!",
	'InvalidParameterException:UnexpectedODDClass' => "Eine nicht erwartete ODD Klasse wurde von import() verarbeitet",
	'InvalidParameterException:EntityTypeNotSet' => "Der Typ der Entität muß gesetzt sein.",

	'ClassException:ClassnameNotClass' => "%s ist kein %s.",
	'ClassNotFoundException:MissingClass' => "Die Klasse '%s' wurde nicht gefunden. Fehlendes Plugin?",
	'InstallationException:TypeNotSupported' => "Typ %s wird nicht unterstützt. Dies weist auf ein Problem in Deiner Installation hin, höchst wahrscheinlich verursacht durch ein unvollständig durchgeführtes Upgrade.",

	'ImportException:ImportFailed' => "Element %d konnte nicht importiert werden",
	'ImportException:ProblemSaving' => "Beim Speichern von %s ist ein Problem aufgetreten",
	'ImportException:NoGUID' => "Es wurde eine neue Entität erzeugt, aber sie hat keine GUID. Das sollte nicht passieren.",

	'ImportException:GUIDNotFound' => "Entität '%d' konnte nicht gefunden werden.",
	'ImportException:ProblemUpdatingMeta' => "Beim Updaten von '%s' von Entität '%d' ist ein Problem aufgetreten",

	'ExportException:NoSuchEntity' => "Die Entität GUID:%d ist nicht vorhanden",

	'ImportException:NoODDElements' => "Keine OpenDD Elemente in den Importdaten gefunden. Das Importieren ist gescheitert.",
	'ImportException:NotAllImported' => "Es konnten nicht alle Elemente importiert werden.",

	'InvalidParameterException:UnrecognisedFileMode' => "Unbekannter Dateimodus '%s'",
	'InvalidParameterException:MissingOwner' => "Datei %s (Datei-GUID:%d) (Besitzer-GUID:%d) hat keinen Besitzer!",
	'IOException:CouldNotMake' => "%s war nicht möglich",
	'IOException:MissingFileName' => "Du mußt einen Namen angeben bevor Du eine Datei öffnen kannst.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Filestore-Klasse %s für Datei %u konnte nicht geladen werden",
	'NotificationException:NoNotificationMethod' => "Es wurde keine Benachrichtigungsmethode festgelegt.",
	'NotificationException:NoHandlerFound' => "Es wurde kein Handler für '%s' gefunden oder der Handler konnte nicht aufgerufen werden.",
	'NotificationException:ErrorNotifyingGuid' => "Bei der Benachrichtigung von %d ist ein Fehler aufgetreten",
	'NotificationException:NoEmailAddress' => "Für GUID:%d konnte keine Email-Adresse gefunden werden",
	'NotificationException:MissingParameter' => "Notwendiger Parameter fehlt, '%s'",

	'DatabaseException:WhereSetNonQuery' => "Der Where-Satz enthält eine ungültige Where-Query-Komponente",
	'DatabaseException:SelectFieldsMissing' => "Fehlende Felder bei einer Select Style-Query",
	'DatabaseException:UnspecifiedQueryType' => "Unbekannter oder unspezifizierter Query-Typ.",
	'DatabaseException:NoTablesSpecified' => "Es wurden keine Tablellen für die Query angegeben.",
	'DatabaseException:NoACL' => "Für die Query wurde keine Zugangskontrolle definiert",

	'InvalidParameterException:NoEntityFound' => "Die Entität konnte nicht gefunden werden. Entweder existiert sie nicht oder Du darfst auf sie nicht zugreifen.",

	'InvalidParameterException:GUIDNotFound' => "GUID:%s konnte nicht gefunden werden oder Du darfst darauf nicht zugreifen.",
	'InvalidParameterException:IdNotExistForGUID' => "Entschuldigung, '%s' ist für GUID:%d nicht vorhanden",
	'InvalidParameterException:CanNotExportType' => "Entschuldigung, wir wissen nicht wie '%s' exportiert werden kann",
	'InvalidParameterException:NoDataFound' => "Es konnten keine Daten gefunden werden.",
	'InvalidParameterException:DoesNotBelong' => "Gehört nicht zur Entität.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "Gehört nicht zur Entität oder zum Verweis auf die Entität.",
	'InvalidParameterException:MissingParameter' => "Fehlender Parameter. Du mußt eine GUID angeben.",

	'APIException:ApiResultUnknown' => "Der Typ der API-Rückgabe ist unbekannt. Das sollte nicht passieren.",
	'ConfigurationException:NoSiteID' => "Es wurde keine Site-ID angegeben.",
	'SecurityException:APIAccessDenied' => "Entschuldigung, der API-Zugriff wurde durch den Administrator deaktiviert.",
	'SecurityException:NoAuthMethods' => "Eine konnte keine Authentifizierungs-Methode gefunden werden, um diesen API-Zugriff zu authentifizieren.",
	'SecurityException:UnexpectedOutputInGatekeeper' => 'Unerwartete Rückgabe bei einem Gatekeeper-Aufruf. Die Ausführung wurde zur Sicherheit gestoppt. Bitte gehe zu http://docs.elgg.org/, um detailliertere Informationen zu diesem Problem zu erhalten.',
        'InvalidParameterException:APIMethodOrFunctionNotSet' => "Die Methode oder Funktion wurde im Aufruf in expose_method() nicht gesetzt",
	'InvalidParameterException:APIParametersArrayStructure' => "Die Parameter-Feldstruktur im Aufruf von Expose-Methode '%s' ist falsch",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Unbekannte Http-Methode %s für API-Mmethode '%s'",
	'APIException:MissingParameterInMethod' => "Fehlender Parameter %s in Methode %s",
	'APIException:ParameterNotArray' => "%s scheint kein Feld zu sein.",
	'APIException:UnrecognisedTypeCast' => "Unbekannter Typ in Cast %s für Variable '%s' in Methode '%s'",
	'APIException:InvalidParameter' => "Ungültiger Parameter für '%s' in Methode '%s' gefunden.",
	'APIException:FunctionParseError' => "%s(%s) ergab einen Parsing-Fehler.",
	'APIException:FunctionNoReturn' => "%s(%s) lieferte keinen Rückgabewert.",
	'APIException:APIAuthenticationFailed' => "Beim Aufruf der Methode schlug die API-Authentifizierung fehl",
	'APIException:UserAuthenticationFailed' => "Beim Aufruf der Methode schlug die Benutzer-Authentifizierung fehl",
	'SecurityException:AuthTokenExpired' => "Entweder fehlt das Authentifizierungs-Token, es ist ungültig oder abgelaufen.",
	'CallException:InvalidCallMethod' => "%s muß unter Verwendung von '%s' aufgerufen werden",
	'APIException:MethodCallNotImplemented' => "Der Methoden-Aufruf '%s' ist nicht implementiert.",
	'APIException:FunctionDoesNotExist' => "Die Funktion für die Methode '%s' kann nicht aufgerufen werden",
	'APIException:AlgorithmNotSupported' => "Algorithmus '%s' wird nicht unterstützt oder wurde deaktiviert.",
	'ConfigurationException:CacheDirNotSet' => "Das Cache-Verzeichnis 'cache_path' wurde nicht gesetzt.",
	'APIException:NotGetOrPost' => "Die Anfrage-Methode muß GET oder POST sein",
	'APIException:MissingAPIKey' => "Fehlender API-Schlüssel",
	'APIException:BadAPIKey' => "Ungültiger API-Schlüssel",
	'APIException:MissingHmac' => "Fehlender X-Elgg-hmac Header",
	'APIException:MissingHmacAlgo' => "Fehlender X-Elgg-hmac-algo Header",
	'APIException:MissingTime' => "Fehlender X-Elgg-time Header",
	'APIException:MissingNonce' => "Fehlender X-Elgg-nonce Header",
	'APIException:TemporalDrift' => "Epoch-Fehler: X-Elgg-time liegt zu weit in der Vergangenheit oder Zukunft.",
	'APIException:NoQueryString' => "Fehlende Daten im Query-String",
	'APIException:MissingPOSTHash' => "Fehlender X-Elgg-posthash Header",
	'APIException:MissingPOSTAlgo' => "Fehlender X-Elgg-posthash_algo Header",
	'APIException:MissingContentType' => "Content Typ für POST-Daten fehlt",
	'SecurityException:InvalidPostHash' => "POST-Daten-Hash ist ungültig - Erwartet wurde %s aber %s erhalten.",
	'SecurityException:DupePacket' => "Packet-Signatur ist schon von früher bekannt.",
	'SecurityException:InvalidAPIKey' => "Ungültiger oder fehlender API-Schlüssel.",
	'NotImplementedException:CallMethodNotImplemented' => "Der Methoden-Aufruf '%s' wird derzeit nicht unterstützt.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "Der XML-RPC Methoden-Aufruf '%s' ist nicht implementiert.",
	'InvalidParameterException:UnexpectedReturnFormat' => "Der Aufruf der Methode '%s' lieferte eine unerwartete Rückgabe.",
	'CallException:NotRPCCall' => "Der Aufruf scheint kein zulässiger XML-RPC Aufruf zu sein",

	'PluginException:NoPluginName' => "Der Name des Plugins wurde nicht gefunden",

	'ConfigurationException:BadDatabaseVersion' => "Das Datenbank-Backend, das Du installiert hast erfüllt leider nicht die notwendigen Anforderungen, um Elgg verwenden zu können. Lese bitte die Anleitung.",
	'ConfigurationException:BadPHPVersion' => "Es wird mindestens PHP Version 5.2 benötigt, um Elgg verwenden zu können.",
	'configurationwarning:phpversion' => "Elgg benötigt mindestens PHP Version 5.2. Du kannst es unter 5.1.6 betreiben, aber einige Funktionen werden dann möglicherweise nicht funktionieren. Verwendung ohne Gewähr.",


	'InstallationException:DatarootNotWritable' => "Dein Datenverzeichnis %s ist schreibgeschützt.",
	'InstallationException:DatarootUnderPath' => "Dein Datenverzeichnis %s muß außerhalb des Installtionspfads liegen.",
	'InstallationException:DatarootBlank' => "Du hast kein Datenverzeichnis angegeben.",

	'SecurityException:authenticationfailed' => "Der Benutzer konnte nicht authentifiziert werden",

	'CronException:unknownperiod' => '%s ist ein unbekanntes Zeitintervall.',

	'SecurityException:deletedisablecurrentsite' => 'Du kannst die Site-Installation nicht löschen oder deaktivieren, während Du Dich darauf befindest!',

	'RegistrationException:EmptyPassword' => 'Die Passwort-Felder dürfen nicht leer sein',
	'RegistrationException:PasswordMismatch' => 'Die Passwörter müssen übereinstimmen',

	'memcache:notinstalled' => 'Das PHP-Memcache-Modul ist nicht installiert. Due mußt php5-memcache installieren',
	'memcache:noservers' => 'Es wurden keine Memcache-Server definiert. Weise der Variablen $CONFIG->memcache_servers bitte etwas zu',
	'memcache:versiontoolow' => 'Memcache setzt zum Betrieb mindestens Version %s voraus. Du benutzt Version %s',
	'memcache:noaddserver' => 'Mehr-Server-Unterstützung ist deaktiviert. Du mußt möglicherweise Deine PECL-Memcache-Library upgraden',

	'deprecatedfunction' => 'Warnung: Dieser Code verwendet die veraltete Funktion \'%s\' und ist mit dieser Version von Elgg nicht kompatibel',

	'pageownerunavailable' => 'Warnung: Der Seiten-Eigentümer %d ist nicht erreichbar!',
        'changebookmark' => 'Bitte ändere Dein Lesezeichen für diese Seite',
/**
 * API
 */
	'system.api.list' => "Liste alle im System verfügbaren API-Aufrufe auf.",
	'auth.gettoken' => "Dieser API-Aufruf ermöglicht es einem Benutzer ein Authetifizierungs-Token zu beziehen, das für die Authentifizierung nachfolgender API-Aufrufe verwendet werden kann. Übergebe es als Parameter auth_token",

/**
 * User details
 */

	'name' => "Name",
	'email' => "Email-Adresse",
	'username' => "Benutzername",
	'password' => "Passwort",
	'passwordagain' => "Passwort (wiederholen für Verifikation)",
	'admin_option' => "Diesen Benutzer zum Admin machen?",

/**
 * Access
 */

	'PRIVATE' => "Privat",
	'LOGGED_IN' => "Angemeldete Benutzer",
	'PUBLIC' => "Öffentlich",
	'access:friends:label' => "Freunde",
	'access' => "Zugangslevel",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Dashboard",
	'dashboard:configure' => "Seite konfigurieren",
	'dashboard:nowidgets' => "Dein Dashboard ist Dein persönliches Portal zur dieser Community-Seite. Wähle 'Seite konfigurieren', um Widgets hinzuzufügen mit denen Du einen schnellen Zugriff auf die Seiteninhalte bekommen kannst und über Neuigkeiten auf dem Laufenden zu bleiben.",

	'widgets:add' => 'Füge Widgets zu Deiner Seite hinzu',
	'widgets:add:description' => "Wähle die Widgets, die Du zu Deiner Seite hinzufügen willst, aus der <b>Widget-Gallerie</b> auf der rechten Seite aus. Durch Drag+Drop kannst Du ein Widget in eine der drei unten dargestellten Widget-Bereiche aufnehmen und auch die Anordnung der Widgets konfigurieren.

Um ein Widget wieder zu entfernen, ziehe es einfach zurück in den Bereich der <b>Widget-Gallerie</b>.",
	'widgets:position:fixed' => '(Feste Position auf der Seite)',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'layout:customise' => "Benutzerdefiniertes Layout",
	'widgets:gallery' => "Widget-Gallerie",
	'widgets:leftcolumn' => "Linke Spalte",
	'widgets:fixed' => "Feste Position",
	'widgets:middlecolumn' => "Mittlere Spalte",
	'widgets:rightcolumn' => "Rechte Spalte",
	'widgets:profilebox' => "Profil-Box",
	'widgets:panel:save:success' => "Deine Widgets-Konfiguration wurde gespeichert.",
	'widgets:panel:save:failure' => "Beim Speichern Deiner Widgets-Konfiguration ist ein Problem aufgetreten. Stelle sicher, dass Du angemeldet bist, und versuche es noch einmal.",
	'widgets:save:success' => "Das Widget wurde hinzugefügt.",
	'widgets:save:failure' => "Das Widget konnte nicht hinzugefügt werden. Stelle sicher, dass Du angemeldet bist, und versuche es noch einmal.",
	'widgets:handlernotfound' => 'Dieses Widget ist entweder fehlerhaft oder das zugehörige Plugin wurde durch den Administrator deaktiviert.',

/**
 * Groups
 */

	'group' => "Gruppe",
	'item:group' => "Gruppen",

/**
 * Users
 */

	'user' => "Benutzer",
	'item:user' => "Benutzer",

/**
 * Friends
 */

	'friends' => "Freunde",
	'friends:yours' => "Deine Freunde",
	'friends:owned' => "Freunde von %s",
	'friend:add' => "Zu Freundesliste hinzufügen",
	'friend:remove' => "Aus Freundesliste entfernen",

	'friends:add:successful' => "%s wurde zu Deiner Freundesliste hinzugefügt.",
	'friends:add:failure' => "%s konnte nicht zu Deiner Freundesliste hinzugefügt werden. Bitte versuche es noch einmal.",

	'friends:remove:successful' => "%s wurde aus Deiner Freundesliste entfernt.",
	'friends:remove:failure' => "%s konnte nicht aus Deiner Freundesliste entfernt werden. Bitte versuche es noch einmal.",

	'friends:none' => "Dieser Benutzer hat noch niemand in seine Freundesliste aufgenommen.",
	'friends:none:you' => "Du hast noch niemanden in Deine Freundenliste aufgenommen! Schau Dich ein wenig in der Community um und Du wirst sicher Leute finden, die Deine Interessen teilen.",

	'friends:none:found' => "Es wurden keine Freunde gefunden.",

	'friends:of:none' => "Bisher hat diesen Benutzer noch niemand in die Freundesliste aufgenommen.",
	'friends:of:none:you' => "Bisher hat Dich noch niemand in seine Freundesliste aufgenomen. Werde aktiv und trage etwas zur Community bei, fülle Dein Profil, damit Dich die anderen Mitglieder finden können!",

	'friends:of:owned' => "Mitglieder, die mit %s befreundet sind",

	'friends:of' => "Befreundet mit",
	'friends:collections' => "Freundeslisten",
	'friends:collections:add' => "Neue Freundesliste erstellen",
	'friends:addfriends' => "Freunde hinzufügen",
	'friends:collectionname' => "Name der Freundesliste",
	'friends:collectionfriends' => "Freunde in dieser Liste",
	'friends:collectionedit' => "Bearbeite diese Liste",
	'friends:nocollections' => "Du hast noch keine Freundesliste erstellt.",
	'friends:collectiondeleted' => "Deine Freundesliste wurde gelöscht.",
	'friends:collectiondeletefailed' => "Wir konnten die Freundesliste nicht löschen. Entweder hast Du dafür keine Berechtigung oder ein anderes Problem ist aufgetreten.",
	'friends:collectionadded' => "Die Freundesliste wurde erstellt",
	'friends:nocollectionname' => "Du mußt Deiner Freundesliste einen Namen geben, bevor sie abgespeichert werden kann.",
	'friends:collections:members' => "Mitglieder in der Freundesliste",
	'friends:collections:edit' => "Freundesliste bearbeiten",
        'friends:collections:edited' => "Die Freundesliste wurde gespeichert.",
        'friends:collection:edit_failed' => 'Die Freundesliste konnte nicht gespeichert werden.',

	'friends:river:add' => "%s ist jetzt befreundet mit",

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

/**
 * Feeds
 */
	'feed:rss' => 'Feed abonnieren',
	'feed:odd' => 'OpenDD beitreten',

/**
 * links
 **/

	'link:view' => 'Link aufrufen',


/**
 * River
 */
	'river' => "River",
	'river:relationship:friend' => 'ist jetzt ein befreundet mit',
	'river:noaccess' => 'Du hast keine Berechtigung um diesen Eintrag anzuzeigen.',
	'river:posted:generic' => '%s schrieb',
	'riveritem:single:user' => 'ein Mitglied',
	'riveritem:plural:user' => 'einige Mitglieder',

/**
 * Plugins
 */
	'plugins:settings:save:ok' => "Die Einstellungen für das %s Plugin wurden gespeichert.",
	'plugins:settings:save:fail' => "Beim Speichern der Einstellungen für das %s Plugin ist ein Problem aufgetreten.",
	'plugins:usersettings:save:ok' => "Die Benutzereinstellungen für das %s Plugin wurden gespeichert.",
	'plugins:usersettings:save:fail' => "Beim Speichern der Benutzereinstellungen für das %s Plugin ist ein Problem aufgetreten.",
	'admin:plugins:label:version' => "Version",
	'item:object:plugin' => 'Plugin-Konfigurationen',

/**
 * Notifications
 */
	'notifications:usersettings' => "Benachrichtigungs-Einstellungen",
	'notifications:methods' => "Wähle bitte die Benachrichtigungsmethoden aus, die Du zulassen willst.",

	'notifications:usersettings:save:ok' => "Deine Benachrichtigungs-Einstellungen wurden gespeichert.",
	'notifications:usersettings:save:fail' => "Beim Speichern Deiner Benachrichtigungs-Einstellungen ist ein Problem aufgetreten.",

	'user.notification.get' => 'Ausgabe der Benachrichtigungs-Einstellungen für einen bestimmten Benutzer.',
	'user.notification.set' => 'Setze die Benachrichtigungs-Einstellungen für einen bestimmten Benutzer.',
/**
 * Search
 */

	'search' => "Suche",
	'searchtitle' => "Suche: %s",
	'users:searchtitle' => "Suche nach Mitgliedern: %s",
	'groups:searchtitle' => "Suche nach Gruppen: %s",
	'advancedsearchtitle' => "%s mit Treffern passend zu %s",
	'notfound' => "Keine Treffer.",
	'next' => "Weiter",
	'previous' => "Zurück",

	'viewtype:change' => "Ansicht wechseln",
	'viewtype:list' => "Listen-Ansicht",
	'viewtype:gallery' => "Gallerie-Ansicht",

	'tag:search:startblurb' => "Einträge mit Tags passend zu '%s':",

	'user:search:startblurb' => "Mitglieder passend zu '%s':",
	'user:search:finishblurb' => "Für weitere Treffer hier klicken.",

	'group:search:startblurb' => "Gruppen passend zu '%s':",
	'group:search:finishblurb' => "Für weitere Treffer hier klicken.",
	'search:go' => 'Los',
	'userpicker:only_friends' => 'Nur Freunde',

/**
 * Account
 */

	'account' => "Account",
	'settings' => "Einstellungen",
	'tools' => "Tools",
	'tools:yours' => "Deine Tools",

	'register' => "Registrieren",
	'registerok' => "Du hast Dich erfolgreich auf %s registriert.",
	'registerbad' => "Deine Registrierung ist fehlgeschlagen. Vielleicht ist Dein Benutzername schon belegt, die eingegebenen Passwörter stimmen nicht überein oder Dein Benutzername oder Passwort sind zu kurz.",
	'registerdisabled' => "Die Registrierung wurde durch den Administrator deaktiviert",

	'firstadminlogininstructions' => 'Deine neue Elgg-Seite wurde erfolgreich installiert und Dein Administrator-Account wurde erstellt. Du kannst die Konfiguration Deiner Seite nun fortsetzen, indem Du beispielsweise die verfügbaren Plugins aktivierst.',

	'registration:notemail' => 'Die von Dir angegebene Email-Adresse scheint keine gültige Email-Adresse zu sein.',
	'registration:userexists' => 'Dieser Benutzername ist schon belegt',
	'registration:usernametooshort' => 'Dein Benutzername muss mindestens 4 Zeichen lang sein.',
	'registration:passwordtooshort' => 'Das Passwort muss mindestens 6 Zeichen lang sein.',
	'registration:dupeemail' => 'Diese Email-Adresse ist schon bei einer früheren Registrierung verwendet worden.',
	'registration:invalidchars' => 'Entschuldigung, Dein Benutzername enthält ein unzulässiges Zeichen: %s. Folgende Zeichen sind nicht zulässig: %s',
	'registration:emailnotvalid' => 'Entschuldigung, die angegebene Email-Adresse ist auf dieser Seite nicht zulässig',
	'registration:passwordnotvalid' => 'Entschuldigung, das angegebene Passwort ist auf dieser Seite nicht zulässig',
	'registration:usernamenotvalid' => 'Entschuldigung, der angegebene Benutzername ist auf dieser Seite nicht zulässig',

	'adduser' => "Benutzer hinzufügen",
	'adduser:ok' => "Es wurde ein neuer Benutzer hinzugefügt.",
	'adduser:bad' => "Der neue Benutzeraccount konnte nicht erzeugt werden.",

	'item:object:reported_content' => "Gemeldete Einträge",

	'user:set:name' => "Angezeigter Name (dies ist nicht der Benutzername für die Anmeldung)",
	'user:name:label' => "Dein Name",
	'user:name:success' => "Dein auf der Seite angezeigter Name wurde geändert.",
	'user:name:fail' => "Dein Name konnte nicht geändert werden. Stelle sicher, dass der Name nicht zu lang ist und versuche es noch einmal.",

	'user:set:password' => "Account-Passwort ändern",
        'user:current_password:label' => 'Dein derzeitiges Passwort',
	'user:password:label' => "Dein neues Passwort",
	'user:password2:label' => "Neues Passwort noch einmal eingeben",
	'user:password:success' => "Dein Passwort wurde geändert",
	'user:password:fail' => "Dein Passwort wurde geändert.",
	'user:password:fail:notsame' => "Die zwei eingegebenen Passwörter stimmen nicht überein!",
	'user:password:fail:tooshort' => "Das angegebene Passwort ist zu kurz!",
        'user:password:fail:incorrect_current_password' => 'Deine Eingabe stimmt nicht mit Deinem derzeitigen Passwort überein.',
	'user:resetpassword:unknown_user' => 'Unbekannter Benutzername.',
	'user:resetpassword:reset_password_confirm' => 'Beim Zurücksetzen des Passworts wird eine Email mit dem neuen Passwort an Deine bei der Accountregistrierung angegebene Email-Adresse versendet.',

	'user:set:language' => "Sprache der Community-Seite",
	'user:language:label' => "Deine Sprache",
	'user:language:success' => "Deine Spracheinstellungen wurden aktualisiert.",
	'user:language:fail' => "Deine Spracheinstellungen konnten nicht gespeichert werden.",

	'user:username:notfound' => 'Benutzername %s unbekannt.',

	'user:password:lost' => 'Neues Passwort',
	'user:password:resetreq:success' => 'Die Anforderung eines neuen Passworts war erfolgreich. Die Email mit dem neuen Passwort wurde gesendet',
	'user:password:resetreq:fail' => 'Die Anforderung eines neuen Passworts ist fehlgeschlagen.',

	'user:password:text' => 'Um ein neues Passwort anzufordern, gebe im folgenden Textfeld Deinen Benutzernamen ein. Wir werden Dir dann eine Email zur Bestätigung der Anfrage zusenden. Folge dem Link in dieser Email, um Deine Passwort-Anfrage zu bestätigen. Dann wird Dir ein neues Passwort zugesandt.',

	'user:persistent' => 'Merken',
/**
 * Administration
 */

	'admin:configuration:success' => "Deine Einstellungen wurden gespeichert.",
	'admin:configuration:fail' => "Deine Einstellungen konnten nicht gespeichert werden.",

	'admin' => "Admin",
	'admin:description' => "Der Admin-Bereich ermöglicht es Dir, Systemeinstellungen vorzunehmen. Du hast Zugriff beispielsweise auf die Benutzerverwaltung und die Konfiguration von Plugins. Bitte wähle eine der unten angebotenen Optionen.",

	'admin:user' => "Benutzerverwaltung",
	'admin:user:description' => "Hier kannst Du die Accounts der Mitglieder Deiner Community-Seite verwalten.",
	'admin:user:adduser:label' => "Einen neuen Benutzeraccount hinzufügen...",
	'admin:user:opt:linktext' => "Einstellungen der Benutzeraccounts konfigurieren...",
	'admin:user:opt:description' => "Acountinformationen und Benutzeraccounts bearbeiten.",

	'admin:site' => "Administation Deiner Community-Seite",
	'admin:site:description' => "Hier kannst Du einige globale Einstellungen für Deine Community-Seite vornehmen.",
	'admin:site:opt:linktext' => "Community-Seite konfigurieren...",
	'admin:site:opt:description' => "Konfigurieren von technisch- und nicht-technisch-spezifischen Einstellungen der Community-Seite.",
	'admin:site:access:warning' => "Eine Änderung des Zugangslevels betrifft nur die Seiteninhalte, die nach der Änderung erstellt werden.",

	'admin:plugins' => "Tool-Verwaltung",
	'admin:plugins:description' => "Hier kannst Du die auf Deiner Community-Seite installierten Tools (Plugins) verwalten und hast Zugriff auf die von ihnen angebotenen Konfigurationsoptionen.",
	'admin:plugins:opt:linktext' => "Tools konfigurieren...",
	'admin:plugins:opt:description' => "Konfigurieren der installierten Tools der Community-Seite.",
	'admin:plugins:label:author' => "Author",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:licence' => "Lizenz",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:moreinfo' => 'Weitere Informationen',
	'admin:plugins:label:version' => 'Version',
	'admin:plugins:warning:elggversionunknown' => 'Warnung: Dieses Plugin gibt keine Rückmeldung bezüglich der Versions-Kompatibilität zu Elgg.',
	'admin:plugins:warning:elggtoolow' => 'Warnung: Dieses Plugin benötigt eine neuere Version von Elgg!',
	'admin:plugins:reorder:yes' => "Plugin %s wurde neu eingeordnet.",
	'admin:plugins:reorder:no' => "Plugin %s konnte nicht neu eingeordnet werden.",
	'admin:plugins:disable:yes' => "Plugin %s wurde deaktiviert.",
	'admin:plugins:disable:no' => "Plugin %s konnte nicht deaktiviert werden.",
	'admin:plugins:enable:yes' => "Plugin %s wurde aktiviert.",
	'admin:plugins:enable:no' => "Plugin %s konnte nicht aktiviert werden.",

	'admin:statistics' => "Statistik",
	'admin:statistics:description' => "Dies ist ein Überblick über die Seiten-Statistik Deiner Community. Falls Du detailiertere Statistiken benötigst, ist ein ausführlicheres, professionelles Administations-Tool verfügbar.",
	'admin:statistics:opt:description' => "Überblick über Statistiken zu Benutzern und Objekten Deiner Community-Seite.",
	'admin:statistics:opt:linktext' => "Statistiken anzeigen...",
	'admin:statistics:label:basic' => "Kurzstatistik Deiner Community-Seite",
	'admin:statistics:label:numentities' => "Entitäten Deiner Community-Seite",
	'admin:statistics:label:numusers' => "Anzahl der Mitglieder",
	'admin:statistics:label:numonline' => "Anzahl der angemeldeten Mitglieder",
	'admin:statistics:label:onlineusers' => "Momentan angemeldete Mitglieder",
	'admin:statistics:label:version' => "Elgg-Version",
	'admin:statistics:label:version:release' => "Release",
	'admin:statistics:label:version:version' => "Version",

	'admin:user:label:search' => "Suche Benutzeraccount:",
	'admin:user:label:searchbutton' => "Suche",

	'admin:user:ban:no' => "Benutzeraccount sperren",
	'admin:user:ban:yes' => "Benutzeraccount gesperrt.",
	'admin:user:unban:no' => "Sperrung des Benutzeraccounts kann nicht aufgehoben werden",
	'admin:user:unban:yes' => "Sperrung des Benutzeraccounts aufgehoben.",
	'admin:user:delete:no' => "Benutzeraccount kann nicht gelöscht werden",
	'admin:user:delete:yes' => "Der Benutzeraccount %s wurde gelöscht",

	'admin:user:resetpassword:yes' => "Das Passwort wurde zurückgesetzt und der Benutzer benachrichtigt.",
	'admin:user:resetpassword:no' => "Das Passwort konnte nicht zurückgesetzt werden.",

	'admin:user:makeadmin:yes' => "Der Benutzer ist nun ein Administrator.",
	'admin:user:makeadmin:no' => "Die Zuweisung von Administratorrechten für den Benutzer ist fehlgeschlagen.",

	'admin:user:removeadmin:yes' => "Der Benutzer ist nicht länger ein Administrator.",
	'admin:user:removeadmin:no' => "Die Rücknahme von Administratorrechten für den Benutzer ist fehlgeschlagen.",

/**
 * User settings
 */
	'usersettings:description' => "Hier kannst Du alle Deine persönlichen Einstellungen vornehmen, beispielsweise Einstellungen der Benutzeraccounts order Konfiguration von Plugins.",

	'usersettings:statistics' => "Deine persönliche Statistik",
	'usersettings:statistics:opt:description' => "Überblick über Statistiken zu Benutzern und Objekten Deiner Community-Seite.",
	'usersettings:statistics:opt:linktext' => "Account-Statistik",

	'usersettings:user' => "Deine Einstellungen",
	'usersettings:user:opt:description' => "Hier kannst Du Benutzereinstellungen konfigurieren.",
	'usersettings:user:opt:linktext' => "Account konfigurieren",

	'usersettings:plugins' => "Tools",
	'usersettings:plugins:opt:description' => "Einstellungen (falls vorhanden) der aktivierten Tools konfigurieren.",
	'usersettings:plugins:opt:linktext' => "Konfiguriere Deine Tools",

	'usersettings:plugins:description' => "Hier kannst Du Deine persönlichen Einstellungen für die vom Administrator installierten Tools konfigurieren.",
	'usersettings:statistics:label:numentities' => "Deine Beiträge",

	'usersettings:statistics:yourdetails' => "Deine Accountdetails",
	'usersettings:statistics:label:name' => "Vollständiger Name",
	'usersettings:statistics:label:email' => "Email-Adresse",
	'usersettings:statistics:label:membersince' => "Mitglied seit",
	'usersettings:statistics:label:lastlogin' => "Zuletzt angemeldet",



/**
 * Generic action words
 */

	'save' => "Speichern",
	'publish' => "Veröffentlichen",
	'cancel' => "Abbrechen",
	'saving' => "Wird gespeichert...",
	'update' => "Aktualisieren",
	'edit' => "Bearbeiten",
	'delete' => "Löschen",
	'accept' => "Zustimmen",
	'load' => "Laden",
	'upload' => "Hochladen",
	'ban' => "Sperren",
	'unban' => "Sperrung aufheben",
	'enable' => "Aktivieren",
	'disable' => "Deaktivieren",
	'request' => "Anfordern",
	'complete' => "vollständig",
	'open' => 'Öffnen',
	'close' => 'Schließen',
	'reply' => "Antworten",
	'more' => 'Weitere',
	'comments' => 'Kommentare',
	'import' => 'Importieren',
	'export' => 'Exportieren',
	'untitled' => 'Ohne Titel',
	'help' => 'Hilfe',
	'send' => 'Absenden',
	'post' => 'Schreiben',
	'submit' => 'Abschicken',
	'site' => 'Webseite',

	'up' => 'Höher',
	'down' => 'Tiefer',
	'top' => 'Anfang',
	'bottom' => 'Ende',

	'invite' => "Einladen",

	'resetpassword' => "Passwort zurücksetzen",
	'makeadmin' => "Zum Admin machen",
	'removeadmin' => "Admin entlassen",

	'option:yes' => "Ja",
	'option:no' => "Nein",

	'unknown' => 'Unbekannt',

	'active' => 'Aktiv',
	'total' => 'Gesamt',

	'learnmore' => "Hier klicken um mehr zu erfahren.",

	'content' => "Beiträge",
	'content:latest' => 'Letzte Aktivitäten',
	'content:latest:blurb' => 'Oder hier klicken, um die neuesten Beiträge dieser Community-Seite zu sehen.',

	'link:text' => 'Link besuchen',

	'enableall' => 'Alle aktivieren',
	'disableall' => 'Alle deaktivieren',

/**
 * Generic questions
 */

	'question:areyousure' => 'Bist Du sicher?',

/**
 * Generic data words
 */

	'title' => "Titel",
	'description' => "Beschreibung",
	'tags' => "Tags",
	'spotlight' => "Spotlight",
	'all' => "Alle",

	'by' => 'von',

	'annotations' => "Kommentare",
	'relationships' => "Beziehungen",
	'metadata' => "Metadaten",

/**
 * Input / output strings
 */

	'deleteconfirm' => "Bist Du sicher, dass Du diesen Eintrag löschen willst?",
	'fileexists' => "Es wurde bereits eine Datei hochgeladen. Um sie zu ersetzen, unten auswählen:",

/**
 * User add
 */

	'useradd:subject' => 'Benutzeraccount erstellt',
	'useradd:body' => '
%s,

Auf der Community-Seite %s wurde ein Benutzeraccount für Dich erstellt %s. Um Dich anzumelden, gehe zu:

%s

und melde Dich mit diesen Zugangsdaten an:

Benutzername (Username): %s
Passwort: %s

Nachdem Du Dich angemeldet hast, solltest Du Dein Passwort ändern.
',

/**
 * System messages
 **/

	'systemmessages:dismiss' => "Hier klicken, um die Statusmeldung auszublenden",


/**
 * Import / export
 */
	'importsuccess' => "Das Importieren der Daten war erfolgreich",
	'importfail' => "Das Importieren der OpenDD-Daten ist fehlgeschlagen.",

/**
 * Time
 */

	'friendlytime:justnow' => "soeben",
	'friendlytime:minutes' => "vor %s Minuten",
	'friendlytime:minutes:singular' => "vor einer Minute",
	'friendlytime:hours' => "vor %s Stunden",
	'friendlytime:hours:singular' => "vor einer Stunde",
	'friendlytime:days' => "vor %s Tagen",
	'friendlytime:days:singular' => "gestern",
	'friendlytime:date_format' => 'j F Y @ g:ia',

	'date:month:01' => '%s Januar',
	'date:month:02' => '%s Februar',
	'date:month:03' => '%s März',
	'date:month:04' => '%s April',
	'date:month:05' => '%s Mai',
	'date:month:06' => '%s Juni',
	'date:month:07' => '%s Juli',
	'date:month:08' => '%s August',
	'date:month:09' => '%s September',
	'date:month:10' => '%s Oktober',
	'date:month:11' => '%s November',
	'date:month:12' => '%s Dezember',


/**
 * Installation and system settings
 */

	'installation:error:htaccess' => "Elgg benötigt eine Datei namens .htaccess, die im Root-Verzeichnis der Installation gespeichert werden muss. Wir haben versucht, diese Datei zu erzeugen, aber Elgg hat keine Schreibberechtigung für dieses Verzeichnis.

Die Datei .htaccess zu erzeugen ist ganz einfach. Kopiere den unten dargestellten Inhalt der Textbox in einen Texteditor und speichere die Datei als .htaccess

",
	'installation:error:settings' => "Elgg konnte keine Konfigurationsdatei finden. Die meisten Einstellungen können automatisch festgelegt werden, aber wir benötigen von Dir die Zugangsinformationen für Deine Elgg-Datenbank. Bitte mache folgendes:

1. Benenne die Datei engine/settings.example.php in engine/settings.php um.

2. Öffne settings.php mit einem Texteditor und gebe die Zugangsinformationen für Deine MySQL-Datenbank ein. Wenn Du die Zugangsinformationen nicht kennst, wende Dich bitte an Deinen Systemadministrator oder den Support Deines Webhosters.

Oder Du kannst die Zugangsinformationen für Deine Elgg-Datenbank im Folgenden eingeben und wir werden versuchen, die Konfigurationsdatei für Dich zu erzeugen...",

	'installation:error:db:title' => "Fehler in den Zugangsinformationen der Datenbank",
	'installation:error:db:text' => "Bitte überprüfe die eingegebenen Zugangsdaten für die Datenbank, da Elgg keine Verbindung zur Datenbank herstellen konnte bzw. keine Zugangsberechtigung hat.",
	'installation:error:configuration' => "Lade diese Seite erneut, nachdem Du die aufgetretenen Konfigurationsprobleme beseitigt hast.",

	'installation' => "Installation",
	'installation:success' => "Die Elgg-Datenbank wurde installiert.",
	'installation:configuration:success' => "Deine Erstkonfiguration wurde gespeichert. Lege nun einen ersten Benutzeraccount an. Dieser Benutzer wird zugleich auch der erste Administrator Deiner Community-Seite sein.",

	'installation:settings' => "Systemeinstellungen",
	'installation:settings:description' => "Nachdem nun die Elgg-Datenbank installiert wurde, mußt Du noch einige Einstellungen treffen, um Deine Community-Seite vollständig lauffähig zu machen. Wir haben versucht, die Einstellungen automatisch zu setzen, aber <b>Du solltest diese Einstellungen genau überprüfen.</b>",

	'installation:settings:dbwizard:prompt' => "Gebe im Folgenden die Zugangsinformationen zu Deiner Datenbank ein und dann wähle 'Speichern':",
	'installation:settings:dbwizard:label:user' => "Datenbank-Benutzername",
	'installation:settings:dbwizard:label:pass' => "Datenbank-Passwort",
	'installation:settings:dbwizard:label:dbname' => "Name der Elgg-Datenbank",
	'installation:settings:dbwizard:label:host' => "Name des Hosts der Datenbank (normalerweise 'localhost')",
	'installation:settings:dbwizard:label:prefix' => "Tabellen-Prefix der Datenbank (normalerweise 'elgg_')",

	'installation:settings:dbwizard:savefail' => "Wir konnten die Datei settings.php nicht anlegen bzw. die getroffenen Änderungen abspeichern. Bitte speichere das Folgende in der Datei engine/settings.php mit Hilfe eines Texteditors.",

	'installation:sitename' => "Der Name Deiner Community-Seite (z.B. \"Meine Community-Seite\"):",
	'installation:sitedescription' => "Kurzbeschreibung Deiner Community-Seite (optional):",
	'installation:wwwroot' => "Die URL Deiner Community-Seite mit einem Slash-Zeichen (\"/\") am Ende:",
	'installation:path' => "Der vollständige Pfad zum Root-Verzeichnis Deiner Installation auf dem Server mit einem Slash-Zeichen (\"/\") am Ende:",
	'installation:dataroot' => "Der vollständige Pfad zum Daten-Verzeichnis Deiner Installation auf dem Server mit einem Slash-Zeichen (\"/\") am Ende (in diesem Verzeichnis werden die hochgeladenen Dateien gespeichert):",
	'installation:dataroot:warning' => "Du mußt dieses Verzeichnis selbst anlegen. Es sollte außerhalb des Elgg-Installationsordners auf dem Server sein.",
	'installation:sitepermissions' => "Der standardmäßige Zugangslevel: ",
	'installation:language' => "Die Standardsprache Deiner Community-Seite: ",
	'installation:debug' => "Der Debug-Modus liefert detailiertere Rückmeldungen, die bei der Fehlersuche hilfreich sein können. Allerdings kann dadurch das Laden der Seiten verlangsamt werden, daher sollte er nur aktiviert werden, falls Probleme auftreten: ",
	'installation:debug:none' => 'Debug-Modus deaktivieren (empfohlen)',
	'installation:debug:error' => 'Nur kritische Fehler anzeigen',
	'installation:debug:warning' => 'Kritische Fehler und Warnungen anzeigen',
	'installation:debug:notice' => 'Alle Fehler, Warnungen und Benachrichtigungen protokollieren',
	'installation:httpslogin' => "Aktivieren, um den Benutzern die Anmeldung via HTTPS zu ermöglichen. Dafür ist es notwendig, dass Dein Server das https-Protokoll unterstützt.",
	'installation:httpslogin:label' => "HTTPS-Anmeldungen zulassen",
	'installation:view' => "Gebe den Ansichtsmodus an, der für Deine Community-Seite verwendet werden soll. Wenn Du nicht sicher bist was Du eingeben sollst, lass das Textfeld leer oder verwende \"default\", um den Standardmodus zu verwenden:",

	'installation:siteemail' => "Email-Adresse Deiner Community-Seite (wird vom System verwendet, um Benachrichtigungen zu versenden):",

	'installation:disableapi' => "Die RESTful-API ist ein flexibles und erweiterbares Interface, das externen Applikationen Zugriff auf einige Funktionen von Elgg ermöglicht.",
	'installation:disableapi:label' => "RESTful-API aktivieren",

	'installation:allow_user_default_access:description' => "Falls diese Option aktiviert ist, dürfen Benutzer einen individuellen Zuganglevel für ihre Inhalte festlegen, wodurch der systemweite Zugangslevel außer Kraft gesetzt wird.",
	'installation:allow_user_default_access:label' => "Indivuellen benutzerdefinierten Zugangslevel erlauben",

	'installation:simplecache:description' => "Simple Cache verbessert die Systemleistung durch Caching von statischen Seiteninhalten inklusive einiger CSS- und JavaScript-Dateien. Normalerweise wirst Du Simple Cache verwenden wollen.",
	'installation:simplecache:label' => "Simple Cache aktivieren (empfohlen)",

	'installation:viewpathcache:description' => "Der View Filepath-Cache verringert die Ladezeit von Plugins durch Caching der Dateisystempfade ihrer Views.",
	'installation:viewpathcache:label' => "View Filepath-Cache aktivieren (empfohlen)",

	'upgrading' => 'Aktualisieren...',
	'upgrade:db' => 'Deine Datenbank wurde aktualisiert.',
	'upgrade:core' => 'Deine Elgg-Installation wurde aktualisiert.',

/**
 * Welcome
 */

	'welcome' => "Willkommen",
	'welcome:user' => 'Willkommen %s',
	'welcome_message' => "Willkommen auf dieser Installation von Elgg.",

/**
 * Emails
 */
	'email:settings' => "Email",
	'email:address:label' => "Deine Email-Adresse",

	'email:save:success' => "Neue Email-Adresse gespeichert. Eine Verifizierung-Anfrage wurde versandt.",
	'email:save:fail' => "Deine neue Email-Adresse konnte nicht gespeichert werden.",

	'friend:newfriend:subject' => "Du bist nun mit %s befreundet!",
	'friend:newfriend:body' => "Du bist nun mit %s befreundet!

Klicke auf den folgenden Link um ihr/sein Profil zu besuchen:

%s

Du kannst auf diese Email NICHT antworten.",



	'email:resetpassword:subject' => "Passwort wurde zurückgesetzt!",
	'email:resetpassword:body' => "Hallo %s,

Dein Passwort wurde zurückgesetzt. Dein neues Passwort ist: %s",


	'email:resetreq:subject' => "Anfrage zum Zurücksetzen Deines Passworts.",
	'email:resetreq:body' => "Hallo %s,

es wurde eine Anfrage zum Zurücksetzen des Passworts Deines Accounts gestellt (von der IP-Adresse %s).

Falls Du diese Anfrage gestellt hast, klicke bitte auf den folgenden Link, um die Anfrage zu bestätigen:

%s

Andernfalls ignoriere bitte diese Email.
",

/**
 * user default access
 */

'default_access:settings' => "Standard-Zugangslevel für Deine Inhalte",
'default_access:label' => "Standard-Zugangslevel",
'user:default_access:success' => "Dein neuer Standard-Zugangslevel wurde gespeichert.",
'user:default_access:failure' => "Dein neuer Standard-Zugangslevel konnte nicht gespeichert werden.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"Fehlende Eingabedaten",

/**
 * Comments
 */

	'comments:count' => "Kommentare von %s",

	'riveraction:annotation:generic_comment' => '%s kommentierte %s',

	'generic_comments:add' => "Einen Kommentar schreiben",
	'generic_comments:text' => "Kommentar",
	'generic_comment:posted' => "Dein Kommentar wurde gespeichert.",
	'generic_comment:deleted' => "Dein Kommentar wurde gelöscht.",
	'generic_comment:blank' => "Entschuldigung, aber Du mußt zuerst etwas schreiben bevor wir Deinen Kommentar abspeichern können.",
	'generic_comment:notfound' => "Entschuldigung, aber wird konnten den gesuchten Eintrag nicht finden.",
	'generic_comment:notdeleted' => "Entschuldigung, dieser Kommentar konnte nicht gelöscht werden.",
	'generic_comment:failure' => "Beim Speichern Deines Kommentars ist ein Fehler aufgetreten. Bitte versuche es noch einmal.",

	'generic_comment:email:subject' => 'Du hast einen neuen Kommentar erhalten!',
	'generic_comment:email:body' => "Zu Deinem Eintrag \"%s\" wurde von %s ein neuer Kommentar geschrieben. Der Kommentar lautet:


%s


Um zu antworten oder Deinen ursprünglichen Eintrag aufzurufen, folge diesem Link:

%s

Um das Profil von %s aufzurufen, folge diesem Link:

%s

Du kannst auf diese Email NICHT antworten.",

/**
 * Entities
 */
	'entity:default:strapline' => '%s erzeugt von %s',
	'entity:default:missingsupport:popup' => 'Diese Entität kann nicht richtig angezeigt werden. Dies kann daran liegen, dass dafür ein Plugin benötigt wird, das nicht mehr installiert ist.',

	'entity:delete:success' => 'Die Entität %s wurde gelöscht',
	'entity:delete:fail' => 'Die Entität %s konnte nicht gelöscht werden',


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => 'Der Form fehlt der __token und/oder __ts Eintrag',
	'actiongatekeeper:tokeninvalid' => "Es ist ein Fehler aufgetreten (Token mismatch - ungültiges Token). Ursache dafür ist wahrscheinlich, dass das Authentifizierungs-Token für die Seite, die Du betrachtet hast, abgelaufen ist. Bitte lade die Seite neu und versuche es noch einmal.",
	'actiongatekeeper:timeerror' => 'Das Authentifizierungs-Token für die die Seite, die Du betrachtet hast, ist abgelaufen. Bitte lade die Seite neu und versuche es noch einmal.',
	'actiongatekeeper:pluginprevents' => 'Durch eine installierte Erweiterung wurde die Übertragung dieser Form verhindert.',

/**
 * Word blacklists
 */
	'word:blacklist' => 'und, der, die, das, den, dem, des, ein, eine, eines, einen, einem, einer, dann, aber, sie, er, es, ihr, ihm, ihres, ihrer, ihrem, ihren, sein, seiner, seines, seinem, seinen, nicht, also, über, jetzt, deshalb, daher, darum, demzufolge, deswegen, folglich, somit, allerdings, immer, noch, ebenso, andernfalls, umgekehrt, eher, infolgedessen, darüberhinaus, darüber, hinaus, trotzdem, dennoch, anstatt, stattdessen, inzwischen, mittlerweile, unterdessen, dementsprechend, dies, dieser, dieses, diesem, diesen, was, wem, wessen, deren, dessen',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Tags',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abchasisch",
	"af" => "Afrikaans",
	"am" => "Amharisch",
	"ar" => "Arabisch",
	"as" => "Assamesisch",
	"ay" => "Aymara",
	"az" => "Aserbaidschanisch",
	"ba" => "Baschkirisch",
	"be" => "Weissrussisch",
	"bg" => "Bulgarisch",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengalisch",
	"bo" => "Tibetisch",
	"br" => "Bretonisch",
	"ca" => "Katalanisch",
	"co" => "Korsisch",
	"cs" => "Tschechisch",
	"cy" => "Walisisch",
	"da" => "Dänisch",
	"de" => "Deutsch",
	"dz" => "hutanisch",
	"el" => "Griechisch",
	"en" => "Englisch",
	"eo" => "Esperanto",
	"es" => "Spanisch",
	"et" => "Estnisch",
	"eu" => "Baskisch",
	"fa" => "Persisch",
	"fi" => "Finnisch",
	"fj" => "Fidschi",
	"fo" => "Färöisch",
	"fr" => "Französisch",
	"fy" => "Friesisch",
	"ga" => "Irisch",
	"gd" => "Schottisch / Gälisch",
	"gl" => "Galizisch",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebräisch",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Kroatisch",
	"hu" => "Ungarisch",
	"hy" => "Armenisch",
	"ia" => "Interlingua",
	"id" => "Indonesisch",
	"ie" => "Interlingue",
	"ik" => "Inupiaq",
	//"in" => "Indonesisch",
	"is" => "Isländisch",
	"it" => "Italienisch",
	"iu" => "Inuit",
	"iw" => "Hebräisch (obsolet)",
	"ja" => "Japanisch",
	"ji" => "Yiddish (obsolet)",
	"jw" => "Javanisch",
	"ka" => "Georgisch",
	"kk" => "Kasachisch",
	"kl" => "Grönländisch",
	"km" => "Kambodschanisch",
	"kn" => "Kanadisch",
	"ko" => "Koreanisch",
	"ks" => "Kashmiri",
	"ku" => "Kurdisch",
	"ky" => "Kirgisisch",
	"la" => "Latein",
        "ln" => "Lingala",
	"lo" => "Laotisch",
	"lt" => "Litauisch",
	"lv" => "Lettisch",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Mazedonisch",
	"ml" => "Malayalam",
	"mn" => "Mongolisch",
	"mo" => "Moldawisch",
	"mr" => "Marathi",
	"ms" => "Malaiisch",
	"mt" => "Maltesisch",
	"my" => "Burmanisch",
	"na" => "Nauruisch",
	"ne" => "Nepalesisch",
	"nl" => "Niederländisch",
	"no" => "Norwegisch",
	"oc" => "Ossetisch",
	"om" => "Oromo",
	"or" => "Oriya",
	"pa" => "Panjabi",
	"pl" => "Polnisch",
	"ps" => "Paschtunisch",
	"pt" => "Portugiesisch",
	"qu" => "Quechua",
	"rm" => "Rätoromanisch",
	"rn" => "Kirundi",
	"ro" => "Rumänisch",
	"ru" => "Russisch",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbokroatisch",
	"si" => "Singhalesisch",
	"sk" => "Slowakisch",
	"sl" => "Slowenisch",
	"sm" => "Samoisch",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanisch",
	"sr" => "Serbisch",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sudanesisch",
	"sv" => "Schwedisch",
	"sw" => "Swahili",
	"ta" => "Tamilisch",
	"te" => "Tegulu",
	"tg" => "Tadschikisch",
	"th" => "Thailändisch",
	"ti" => "Tigrinya",
	"tk" => "Turkmenisch",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tongaisch",
	"tr" => "Türkisch",
	"ts" => "Tsonga",
	"tt" => "Tatarisch",
	"tw" => "Twi",
	"ug" => "Uigurisch",
	"uk" => "Ukrainisch",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamesisch",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chinesisch",
	"zu" => "Zulu",
);

add_translation("de",$german);
