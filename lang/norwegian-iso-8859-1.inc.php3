<?php
/* $Id$ */

/**
 * Translated by Sven-Erik Andersen <sven_erik at andersen.as>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('S�n', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'L�r');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B, %Y klokka %H:%M %p';
$timespanfmt = '%s dager, %s timer, %s minutter og %s sekunder';

$strAbortedClients = 'Avbrutt';
$strAbsolutePathToDocSqlDir = 'Vennligst skriv inn den absolutte stien p� webtjeneren til docSQL katalogen';
$strAccessDenied = 'Ingen tilgang';
$strAction = 'Handling';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterierad';
$strAddedColumnComment = 'Lagt til kolonnekommentar';
$strAddedColumnRelation = 'Lagt til relasjon for kolonne';
$strAddNewField = 'Legg til felt';
$strAddPriv = 'Legg til nytt privilegium';
$strAddPrivilegesOnDb = 'Legg til privilegier til f�lgende database';
$strAddPrivilegesOnTbl = 'Legg til privilegier til f�lgende tabell';
$strAddPrivMessage = 'Du har lagt til ett nytt privilegium.';
$strAddSearchConditions = 'Legg til s�kekriterier (innhold i "where"-setningen):';
$strAddToIndex = 'Legg til indeks&nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAdministration = 'Administrasjon';
$strAffectedRows = 'Ber�rte rader:';
$strAfter = 'Etter %s';
$strAfterInsertBack = 'Returner';
$strAfterInsertNewInsert = 'Sett inn en ny post';
$strAll = 'Alle';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Endre tabellrekkef�lge ved';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'og';
$strAnIndex = 'En indeks har blitt lagt til %s';
$strAny = 'Alle';
$strAnyColumn = 'Alle kolonner';
$strAnyDatabase = 'Alle databaser';
$strAnyHost = 'Alle verter';
$strAnyTable = 'Alle tabeller';
$strAnyUser = 'Alle brukere';
$strAPrimaryKey = 'En prim�rn�kkel har blitt lagt til %s';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';

$strBack = 'Tilbake';
$strBeginCut = 'START KUTT';
$strBeginRaw = 'START UFORMATERT';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - m� ikke redigeres ';
$strBookmarkDeleted = 'Bokmerket har blitt slettet.';
$strBookmarkLabel = 'Navn';
$strBookmarkQuery = 'Lagret SQL-sp�rring';
$strBookmarkThis = 'Lagre denne SQL-sp�rringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se p�';
$strBzError = 'phpMyAdmin kunne ikke komprimere dumpede data fordi Bz2 tillegget til denne php versjonen er �delagt. Vi anbefaler p� det sterkeste at du setter <code>$cfg[\'BZipDump\']</code> direktivet i din phpMyAdmin konfigurasjonsfil til <code>FALSE</code>. Hvis du �nsker � bruke Bz2 komprimerings funksjonene, s� b�r du oppgradere til en nyere php versjon. Se php bug rapport %s for detaljer.';
$strBzip = 'Komprimert (bz2)';

$strCannotLogin = 'Kan ikke logge inn til MySQL tjeneren';
$strCantLoad = 'kan ikke starte %s tillegget,<br />vennligst kontroller PHP-konfigurasjonen';
$strCantLoadMySQL = 'kan ikke starte MySQL-modulen,<br />vennligst kontroller PHP-konfigureringen.';
$strCantLoadRecodeIconv = 'Kan ikke laste iconv- eller recode-modulen som trengs for tegnsett konvertering, konfigurer php slik at disse kan lastes eller sl� av tegnsettkonvertering i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke endre indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruke hverken iconv, libiconv eller recode_string funksjonene selv om modulene sier de er lastet. Sjekk din php-konfigurasjon.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Linjeskift (Mac): \\r';
$strChange = 'Endre';
$strChangeCopyMode = 'Opprett ny bruker med de samme privilegier og ...';
$strChangeCopyModeCopy = '... behold den gamle.';
$strChangeCopyModeDeleteAndReload = ' ... slett den gamle fra brukertabellene og deretter oppfrisk privilegiene.';
$strChangeCopyModeJustDelete = ' ... slett den gamle fra brukertabellene.';
$strChangeCopyModeRevoke = ' ... tilbakekall alle aktive privilegier fra den gamle og slett den etterp�.';
$strChangeCopyUser = 'Endre innloggingsinformasjon / kopiere bruker';
$strChangeDisplay = 'Velg felt for visning';
$strChangePassword = 'Endre passord';
$strCharsetOfFile = 'Filens tegnsett:';
$strCheckAll = 'Merk alle';
$strCheckDbPriv = 'Kontroller databaseprivilegier';
$strCheckPrivs = 'Kontroller privilegier';
$strCheckPrivsLong = 'Kontroller privilegier for databasen &quot;%s&quot;.';
$strCheckTable = 'Kontroller tabell';
$strChoosePage = 'Vennligst velg en side for redigering';
$strColComFeat = 'Vis kolonnekommentarer';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonnenavn';
$strColumnPrivileges = 'Kolonne-spesifikke privilegier';
$strCommand = 'Kommando';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Komplette innlegg';
$strCompression = 'Kompresjon';
$strConfigFileError = 'phpMyAdmin kunne ikke lese din konfigurasjonsfil!<br />Dette kan skje hvis PHP finner en syntaksfeil eller ikke kan finne filen.<br />Vennligst kall opp konfigurasjonsfilen direkte via linken under og les PHP feilmeldingen(e) som du vil f�. I de fleste tilfeller s� mangler det et anf�rselstegn eller et semikolon et sted.<br />Hvis du f�r en blank side s� er alt ok.';
$strConfigureTableCoord = 'Vennligst konfigurer koordinatene for tabell %s';
$strConfirm = '�nsker du virkelig � gj�re det?';
$strConnections = 'tilkoblinger';
$strCookiesRequired = 'Cookies m� v�re sl�tt p� forbi dette punkt.';
$strCopyTable = 'Kopier tabell til (database<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCouldNotKill = 'phpMyAdmin kunne ikke avslutte tr�d %s. Den er sansynligvis alt avsluttet.';
$strCreate = 'Opprett';
$strCreateIndex = 'Lag en indeks p�&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lag en ny indeks';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database %s';
$strCreatePage = 'Lag en ny side';
$strCreatePdfFeat = 'Lag PDF-dokumenter';
$strCriteria = 'Kriterier';

$strData = 'Data';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Databasen %s har blitt slettet';
$strDatabases = 'databaser';
$strDatabasesDropped = '%s databasene har blitt slettet.';
$strDatabasesStats = 'Statistikk for databaser';
$strDatabasesStatsDisable = 'Sl� av statistikk';
$strDatabasesStatsEnable = 'Sl� p� statistikk';
$strDatabasesStatsHeavyTraffic = 'OBS: N�r du sl�r p� Databasestatistikk s� kan det medf�re stor traffik mellom webtjeneren og MySQL-tjeneren.';
$strDatabaseWildcard = 'Database (jokertegn er tillatt):';
$strDataDict = 'Dataordbok';
$strDataOnly = 'Bare data';
$strDBGContext = 'Sammenheng';
$strDBGContextID = 'Sammenhengs-ID';
$strDBGHits = 'Treff';
$strDBGLine = 'Linje';
$strDBGMaxTimeMs = 'Max tid, ms';
$strDBGMinTimeMs = 'Min tid, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Tid/Treff, ms';
$strDBGTotalTimeMs = 'Total tid, ms';
$strDbPrivileges = 'Database-spesifikke privilegier';
$strDbSpecific = 'databasespesifikk';
$strDefault = 'Standard';
$strDefaultValueHelp = 'Sett inn en enkelt verdi for standard verdier uten skr�strek, anf�rselstegn eller annen &quot;escaping&quot; med dette formatet: a';
$strDelete = 'Slett';
$strDeleteAndFlush = 'Slett brukeren og oppfrisk privilegiene etterp�.';
$strDeleteAndFlushDescr = 'Dette er den beste m�ten, men oppfrisking av privilegiene kan ta litt tid.';
$strDeleted = 'Raden er slettet';
$strDeletedRows = 'Slettede rader:';
$strDeleteFailed = 'Slettingen mislyktes!';
$strDeleteUserMessage = 'Du har slettet brukeren %s.';
$strDeleting = 'Sletter %s';
$strDescending = 'Synkende';
$strDisabled = 'Avsl�tt';
$strDisplay = 'Vis';
$strDisplayFeat = 'Vis egenskaper';
$strDisplayOrder = 'Visningsrekkef�lge:';
$strDisplayPDF = 'Vis PDF-skjema';
$strDoAQuery = 'Utf�r en "sp�rring ved eksempel" (jokertegn: "%")';
$strDocu = 'Dokumentasjon';
$strDoYouReally = 'Vil du virkelig ';
$strDrop = 'Slett';
$strDropDB = 'Slett databasen %s';
$strDropSelectedDatabases = 'Slett valgte databaser';
$strDropTable = 'Slett tabell';
$strDropUsersDb = 'Slett databasene som har det samme navnet som brukerne.';
$strDumpingData = 'Dataark for tabell';
$strDumpXRows = 'Dumpe %s rader fra rad %s.';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPDFPages = 'Rediger PDF-sider';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL returnerte ett tomt resultat (m.a.o. ingen rader).';
$strEnabled = 'P�sl�tt';
$strEnd = 'Slutt';
$strEndCut = 'STOPP KUTT';
$strEndRaw = 'STOPP UFORMATERT';
$strEnglishPrivileges = 'OBS: MySQL privilegiumnavn er p� engelsk';
$strError = 'Feil';
$strExplain = 'Forklar SQL';
$strExport = 'Eksporter';
$strExportToXML = 'Eksporter til XML format';
$strExtendedInserts = 'Utvidete innlegg';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Feilede fors�k';
$strField = 'Felt';
$strFieldHasBeenDropped = 'Feltet %s har blitt slettet';
$strFields = 'Felter';
$strFieldsEmpty = ' Antall felter er tommt! ';
$strFieldsEnclosedBy = 'Felter omsluttet av';
$strFieldsEscapedBy = 'Felter "escaped" med';
$strFieldsTerminatedBy = 'Felter avsluttet med';
$strFileCouldNotBeRead = 'Fila kunne ikke leses';
$strFixed = 'statisk';
$strFlushPrivilegesNote = 'Merk: phpMyAdmin f�r brukerprivilegiene direkte fra MySQL privilegietabeller. Innholdet i disse tabellene kan v�re forskjellig fra de privilegiene tjeneren bruker hvis det er utf�rt manuelle endringer p� den. I s� fall b�r du %soppfriske privilegiene%s f�r du fortsetter.';
$strFlushTable = 'Oppfrisk tabellen ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFullText = 'Hele strenger';
$strFunction = 'Funksjon';

$strGenBy = 'Generert av';
$strGeneralRelationFeat = 'Generelle relasjonsegenskaper';
$strGenTime = 'Generert den';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale privilegier';
$strGlobalValue = 'Global verdi';
$strGo = 'Utf�r';
$strGrantOption = 'Rettighet';
$strGrants = 'Rettigheter';
$strGzip = 'Komprimert (gz)';

$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHaveToShow = 'Du m� velge minst en kolonne for visning';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin-hjemmeside';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin-nedlastingsside';
$strHost = 'Vert';
$strHostEmpty = 'Vertsnavnet er tomt!';

$strId = 'ID';
$strIdxFulltext = 'Fulltekst';
$strIfYouWish = 'Hvis du kun �nsker � lese inn enkelte av tabellens kolonner, angi en kommaseparert feltliste.';
$strIgnore = 'Ignorer';
$strIgnoringFile = 'Ignorerer fil %s';
$strImportDocSQL = 'Importer docSQL-filer';
$strImportFiles = 'Importer filer';
$strImportFinished = 'Importen er ferdig';
$strIndex = 'Indeks';
$strIndexes = 'Indekser';
$strIndexHasBeenDropped = 'Indeksen %s har blitt slettet';
$strIndexName = 'Indeksnavn&nbsp;:';
$strIndexType = 'Indekstype&nbsp;:';
$strInsecureMySQL = 'Din konfigurasjonsfil inneholder innstillinger (root uten passord) som korrensponderer med MySQLs standard priviligerte brukerkonto. Din MySQL-tjener kj�rer med denne standardinnstillingen, er �pen for misbruk, og du burde fikse dette sikkerhetshullet snarest.';
$strInsert = 'Sett inn';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertedRows = 'Innsatte rader:';
$strInsertNewRow = 'Sett inn ny rad';
$strInsertTextfiles = 'Les tekstfil inn i tabell';
$strInstructions = 'Instruksjoner';
$strInUse = 'i bruk';
$strInvalidName = '"%s" er ett reservert ord, du kan ikke bruke det som et database-, tabell- eller feltnavn.';

$strJumpToDB = 'Hopp til databasen &quot;%s&quot;.';
$strJustDelete = 'Bare slett brukerne fra privilegium tabellene.';
$strJustDeleteDescr = 'Den &quot;slettede&quot; brukeren vil fortsatt kunne bruke tjeneren som normalt inntill privilegiene er oppfrisket.';

$strKeepPass = 'Ikke endre passordet';
$strKeyname = 'N�kkel';
$strKill = 'Avslutt';

$strLandscape = 'Landskapsformat';
$strLaTeX = 'LaTeX';
$strLength = 'Lengde';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'Antall poster per side';
$strLineFeed = 'Linjeskift: \\n';
$strLines = 'Linjer';
$strLinesTerminatedBy = 'Linker avsluttet med';
$strLinkNotFound = 'Link ikke funnet';
$strLinksTo = 'Linker til';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Plassering av filen';
$strLogin = 'Logg inn';
$strLoginInformation = 'Innlogingsinformasjon';
$strLogout = 'Logg ut';
$strLogPassword = 'Passord:';
$strLogUsername = 'Brukernavn:';

$strMissingBracket = 'Manglende parantes';
$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strModifyIndexTopic = 'Endre en indeks';
$strMoreStatusVars = 'Flere status variabler';
$strMoveTable = 'Flytt tabell til (database<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har blitt flyttet til %s.';
$strMySQLCharset = 'MySQL-tegnsett';
$strMySQLReloaded = 'MySQL omstartet.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% som kj�rer p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL driftsstatus';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNext = 'Neste';
$strNo = 'Nei';
$strNoDatabases = 'Ingen databaser';
$strNoDatabasesSelected = 'Ingen databaser er valgt.';
$strNoDescription = 'ingen beskrivelse';
$strNoDropDatabases = '"DROP DATABASE"-uttrykk er avsl�tt.';
$strNoExplain = 'Ikke forklar SQL';
$strNoFrames = 'phpMyAdmin er mer brukervennlig med en <b>rammekapabel</b> nettleser.';
$strNoIndex = 'Ingen indeks definert!';
$strNoIndexPartsDefined = 'Ingen indeksdeler definert!';
$strNoModification = 'Ingen endring';
$strNone = 'Ingen';
$strNoPassword = 'Intet passord';
$strNoPhp = 'uten PHP kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL sp�rring!';
$strNoRights = 'Du har ikke nok rettigheter til � v�re her n�!';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotOK = 'ikke OK';
$strNotSet = '<b>%s</b> tabellen ble ikke funnet eller ikke konfigurert i %s';
$strNotValidNumber = ' er ikke et gyldig radnummer!';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNoUsersSelected = 'Ingen brukere valgt.';
$strNoValidateSQL = 'Ikke teste SQL';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s treff i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> treff';
$strNumTables = 'Tabeller';

$strOftenQuotation = 'Ofte anf�rselstegn. Valgfritt inneb�rer at kun tekstfelter ("char" og "varchar"-felter) er omfattet av tegnet.';
$strOK = 'OK';
$strOperations = 'Operasjoner';
$strOptimizeTable = 'Optimiser tabell';
$strOptionalControls = 'Valgfritt. Angir hvordan spesialtegn skrives eller leses.';
$strOptionally = 'Valgfritt';
$strOptions = 'Innstillinger';
$strOr = 'Eller';
$strOverhead = 'Overheng';

$strPageNumber = 'Sidenummer:';
$strPartialText = 'Delvis tekst';
$strPassword = 'Passord';
$strPasswordChanged = 'Passordet til %s er endret.';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPdfDbSchema = 'Skjema for "%s"-databasen - Side %s';
$strPdfInvalidPageNum = 'Undefinert PDF-sidenummer!';
$strPdfInvalidTblName = 'Tabellen "%s" eksisterer ikke!';
$strPdfNoTables = 'Ingen tabeller';
$strPerHour = 'per time';
$strPhp = 'Lag PHP kode';
$strPHP40203 = 'Du bruker PHP 4.2.3, som har en alvorlig feil med flerbyte-strenger (mbstring). Se PHP-feilrapport 19404. Denne versjonen av PHP er ikke anbefalt for bruk med phpMyAdmin.';
$strPHPVersion = 'PHP-Versjon';
$strPmaDocumentation = 'phpMyAdmin-Dokumentasjon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> variabelen M� v�re innstilt i din konfigurasjonsfil!';
$strPortrait = 'Portrettformat';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rn�kkel';
$strPrimaryKeyHasBeenDropped = 'Prim�rn�kkelen har blitt slettet';
$strPrimaryKeyName = 'Navnet til  prim�rn�kkelen m� v�re... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m�</b> v�re navnet til og <b>bare til</b> en prim�rn�kkel!)';
$strPrint = 'Skriv ut';
$strPrintView = 'Utskriftsvennlig forh�ndsvisning';
$strPrivDescAllPrivileges = 'Inkluder alle privilegier unntatt GRANT.';
$strPrivDescAlter = 'Tillater endring av struktur p� eksisterende tabeller.';
$strPrivDescCreateDb = 'Tillater oppretting av nye databaser og tabeller.';
$strPrivDescCreateTbl = 'Tillater oppretting av nye tabeller.';
$strPrivDescCreateTmpTable = 'Tillater oppretting av midlertidige tabeller.';
$strPrivDescDelete = 'Tillater sletting av data.';
$strPrivDescDropDb = 'Tillater sletting av databaser og tabeller.';
$strPrivDescDropTbl = 'Tillater sletting av tabeller.';
$strPrivDescExecute = 'Tillater kj�ring av lagrede prosedyrer; har ingen effekt p� denne versjonen av MySQL.';
$strPrivDescFile = 'Tillater import og eksport av data til og fra filer.';
$strPrivDescGrant = 'Tillater � legge til brukere og privilegier uten � oppfriske privilegietabellene.';
$strPrivDescIndex = 'Tillater oppretting og sletting av indekser.';
$strPrivDescInsert = 'Tillater � legge til og erstatte data.';
$strPrivDescLockTables = 'Tillater l�sing av tabeller for den kj�rende tr�den.';
$strPrivDescMaxConnections = 'Begrenser antall nye tilkoblinger brukeren kan �pne per time.';
$strPrivDescMaxQuestions = 'Begrenser antall sp�rringer brukeren kan sende til tjeneren per time.';
$strPrivDescMaxUpdates = 'Begrenser antall kommandoer som kan endre tabeller eller databaser brukeren kan utf�re per time.';
$strPrivDescProcess3 = 'Tillater avslutting av prosesser som tilh�rer andre brukere.';
$strPrivDescProcess4 = 'Tillater visning av komplette sp�rringer i prosesslisten.';
$strPrivDescReferences = 'har ingen effekt i denne versjonen av MySQL.';
$strPrivDescReload = 'Tillater oppfrisking av tjenerinnstillinger og oppfrisking av mellomlager.';
$strPrivDescReplClient = 'Gir tillatelse til brukeren til � sp�rre hvor replikasjonsslaver eller -tjenere er.';
$strPrivDescReplSlave = 'Trenges av replikasjonsslavene.';
$strPrivDescSelect = 'Tillater lesing av data.';
$strPrivDescShowDb = 'Gir adgang til komplett liste over databaser.';
$strPrivDescShutdown = 'Tillater avslutting av tjener.';
$strPrivDescSuper = 'Tillater tilkobling, selv om maksimum tilkoblinger er n�dd. Beh�ves for de fleste administrative operasjoner som � sette globale variabler eller avslutting av andre brukeres tr�der.';
$strPrivDescUpdate = 'Tillater endring av data.';
$strPrivDescUsage = 'Ingen privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Oppfriskingen av privilegiene lyktes.';
$strProcesslist = 'Prosess liste';
$strProperties = 'Egenskaper';
$strPutColNames = 'Sett inn feltnavn i f�rste rad';

$strQBE = 'Sp�rring ved eksempel (Query by Example)';
$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQueryOnDb = 'SQL-sp�rring i database <b>%s</b>:';
$strQueryStatistics = '<b>Sp�rrings statistikk</b>: Siden oppstart, har %s sp�rringer blitt sendt til tjeneren.';
$strQueryType = 'Sp�rringstype';

$strReceived = 'Mottatt';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Sjekk referanseintegritet:';
$strRelationalSchema = 'Relasjonsskjema';
$strRelationNotWorking = 'Tilleggsfunksjonene for � kunne jobbe med koblede tabeller er deaktivert. For � finne ut hvorfor, klikk %sher%s.';
$strRelationView = 'Relasjonsvisning';
$strReloadFailed = 'Omstart av MySQL feilet.';
$strReloadingThePrivileges = 'Oppfrisker privilegiene';
$strReloadMySQL = 'Omstart av MySQL';
$strRememberReload = 'Husk � restarte tjeneren.';
$strRemoveSelectedUsers = 'Fjern valgte brukere';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har f�tt nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplace = 'Erstatt';
$strReplaceTable = 'Erstatt tabell med filen';
$strReset = 'T�m skjema';
$strResourceLimits = 'Ressursbegrensninger';
$strReType = 'Gjenta';
$strRevoke = 'Tilbakekall';
$strRevokeAndDelete = 'Tilbakekall alle aktive privilegier fra brukerne og slett dem etterp�.';
$strRevokeAndDeleteDescr = 'Inntill privilegiene er oppfrisket vil brukerne fortsatt ha USAGE privilegiet.';
$strRevokeGrant = 'Tilbakekall Grant';
$strRevokeGrantMessage = 'Du har tilbakekalt Grant-privilegiet til %s';
$strRevokeMessage = 'Du har fjernet privilegiene til %s';
$strRevokePriv = 'Tibakekall privilegier';
$strRowLength = 'Radlengde';
$strRows = 'Rader';
$strRowsFrom = 'rader fra';
$strRowSize = ' Radst�relse ';
$strRowsModeHorizontal = 'vannrett';
$strRowsModeOptions = 'i %s modus og gjenta headers etter %s celler';
$strRowsModeVertical = 'loddrett';
$strRowsStatistic = 'Radstatistikk';
$strRunning = 'som kj�rer p� %s';
$strRunQuery = 'Kj�r sp�rring';
$strRunSQLQuery = 'Kj�r SQL sp�rring/sp�rringer mot databasen %s';

$strSave = 'Lagre';
$strScaleFactorSmall = 'Skaleringsfaktoren er for liten til � romme alt p� en side';
$strSearch = 'S�k';
$strSearchFormTitle = 'S�k i database';
$strSearchInTables = 'I tabell(ene):';
$strSearchNeedle = 'Ord eller verdi(er) � s�ke etter (jokertegn: "%"):';
$strSearchOption1 = 'minst ett av ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'med den n�yaktige setningen';
$strSearchOption4 = 'som "regular expression"';
$strSearchResultsFor = 'S�keresultat for "<i>%s</i>" %s:';
$strSearchType = 'Finn:';
$strSelect = 'Sp�rring';
$strSelectADb = 'Vennligst velg en database';
$strSelectAll = 'Velg alle';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectNumRows = 'i sp�rring';
$strSelectTables = 'Velg tabeller';
$strSend = 'Last ned som fil';
$strSent = 'Sendt';
$strServer = 'Tjener %s';
$strServerChoice = 'Tjenervalg';
$strServerStatus = 'Kj�ringsinformasjon';
$strServerStatusUptime = 'Denne MySQL tjeneren har kj�rt i %s. Den startet opp den %s.';
$strServerTabProcesslist = 'Prosesser';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Tjenertraffikk</b>: Disse tabellene viser statistikk over nettverkstrafikken for denne MySQL-tjeneren siden dens oppstart.';
$strServerVars = 'Tjenervariabler og -innstillinger';
$strServerVersion = 'Tjenerversjon';
$strSessionValue = '�kts verdi';
$strSetEnumVal = 'Hvis felttypen er "enum" eller "set", skriv inn verdien med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du skulle trenge � ha en skr�strek ("\") eller en enkel apostrof ("\'") blant disse verdiene, skriv en skr�strek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farger';
$strShowCols = 'Vis kolonner';
$strShowDatadictAs = 'Data Ordbok Format';
$strShowGrid = 'Vis rutenett';
$strShowingRecords = 'Viser rader ';
$strShowPHPInfo = 'Vis PHP-informasjon';
$strShowTableDimension = 'Vis tabelldimensjoner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis denne sp�rring her igjen ';
$strSingly = '(enkeltvis)';
$strSize = 'St�rrelse';
$strSort = 'Sorter';
$strSpaceUsage = 'Plassbruk';
$strSplitWordsWithSpace = 'Ord er separert med et mellomrom (" ").';
$strSQL = 'SQL';
$strSQLParserBugMessage = 'Det er en mulighet for at du har funnet en feil i SQL-parseren. Vennligst kontroller din sp�rring n�ye og kontroller at anf�rselstegn er korrekte og matsjer hverandre. En annen mulig feil�rsak kan v�re at du overf�rer en fil med bin�rkode som ikke ligger innenfor anf�rselstegn. Du kan ogs� teste din sp�rring i MYSQLs kommandolinjegrensesnitt. Feilmeldingen fra MySQL-tjeneren nedenfor, hvis det var en, kan ogs� hjelpe deg med � analysere problemet. Hvis du fortsatt har problemer eller parseren feiler hvor kommandolinjegrensesnittet lyktes, vennligst reduser din SQL-sp�rring til den sp�rringen som for�rsaker problemet og send en feilrapport med datastykket i CUT-seksjonen nedenfor:';
$strSQLParserUserError = 'Det ser ut til � v�re en feil i din SQL-sp�rring. En eventuell feilmelding fra MySQL-tjeneren er skrevet ut nedenfor, kan kanskje hjelpe deg med � finne feilen.';
$strSQLQuery = 'SQL-sp�rring';
$strSQLResult = 'SQL-resultat';
$strSQPBugInvalidIdentifer = 'Ugyldig identifikator';
$strSQPBugUnclosedQuote = 'Anf�rselstegnet er ikke lukket';
$strSQPBugUnknownPunctuation = 'Ukjent tegnsettingsstreng';
$strStatement = 'Oversikt';
$strStatus = 'Status';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur og data';
$strStrucDrop = 'Legg til \'drop table\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Kun struktur';
$strStructPropose = 'Foresl� tabellstruktur';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/sp�rringen er utf�rt';
$strSum = 'Sum';

$strTable = 'Tabell';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableHasBeenDropped = 'Tabellen %s har blitt slettet';
$strTableHasBeenEmptied = 'Tabellen %s har blitt t�mt';
$strTableHasBeenFlushed = 'Tabelen %s har blitt oppfrisket';
$strTableMaintenance = 'Tabellvedlikehold';
$strTableOfContents = 'Innholdsfortegnelse';
$strTables = '%s tabell(er)';
$strTableStructure = 'Tabellstruktur for tabell';
$strTableType = 'Tabelltype';
$strTblPrivileges = 'Tabell-spesifikke privilegier';
$strTextAreaLength = ' P� grunn av sin lengde,<br /> s� vil muligens dette feltet ikke v�re redigerbart ';
$strTheContent = 'Innholdet av filen er lagt inn.';
$strTheContents = 'Innholdet av filen erstatter valgt tabell for rader med lik identifikator eller unikt felt';
$strTheTerminator = 'Tegn som angir slutt p� felt.';
$strThisHost = 'Denne vert';
$strThisNotDirectory = 'Dette var ikke en katalog';
$strThreadSuccessfullyKilled = 'Tr�d %s ble avsluttet med suksess.';
$strTime = 'Tid';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraffic = 'Trafikk';
$strType = 'Type';

$strUncheckAll = 'Fjern merking';
$strUnique = 'Unik';
$strUnselectAll = 'Fjern alle valgte';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til %s.';
$strUpdateProfile = 'Oppdater profil:';
$strUpdateProfileMessage = 'Profilen har blitt oppdatert.';
$strUpdateQuery = 'Oppdater sp�rring';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anf�rselstegn med tabell og feltnavn';
$strUser = 'Bruker';
$strUserAlreadyExists = 'Brukeren %s finnes fra f�r!';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUserNotFound = 'Den valgte brukeren ble ikke funnet i privilegietabellen.';
$strUserOverview = 'Brukeroversikt';
$strUsers = 'Brukere';
$strUsersDeleted = 'De valgte brukerne har blitt slettet.';
$strUsersHavingAccessToDb = 'Brukere som har adgang til &quot;%s&quot;';
$strUseTables = 'Bruk tabeller';
$strUseTextField = 'Bruk tekstfelt';

$strValidateSQL = 'Test SQL';
$strValidatorError = 'SQL-kontrolleren kunne ikke startes. Vennligst sjekk at du har installert de n�dvendige php-tilleggene som beskrevet i %sdokumentasjonen%s.';
$strValue = 'Verdi';
$strVar = 'Variabler';
$strViewDump = 'Vis dump (skjema) av tabell';
$strViewDumpDB = 'Vis dump (skjema) av database';

$strWebServerUploadDirectory = 'webtjener opplastingskatalog';
$strWebServerUploadDirectoryError = 'Katalogen du anga for opplasting kan ikke n�es';
$strWelcome = 'Velkommen til %s';
$strWildcard = 'jokertegn';
$strWithChecked = 'Med avkrysset:';
$strWritingCommentNotPossible = 'Skriving av kommentar er ikke mulig';
$strWritingRelationNotPossible = 'Skriving av relasjon er ikke mulig';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Merk: Ved � sette disse til 0 (null) fjerner begrensningen.';
$strZip = 'Komprimert (zip)';
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_image_jpeg__plain = 'Takes an imagefile and outputs a link for it. First options argument is a possible prepended string like http://...';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
?>
