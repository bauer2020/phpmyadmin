<?php
/* $Id$ */

/**
 * Latvian language file by Sandis Jērics <sandisj at parks.lv>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sv', 'Pr', 'Ot', 'Tr', 'Ce', 'Pt', 'Se');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jūn', 'Jūl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d%m.%Y %H:%M';

$timespanfmt = '%s dienas, %s stundas, %s minūtes un %s sekundas';

$strAPrimaryKey = 'Primārā atslēga pievienota uz lauka %s';
$strAbortedClients = 'Abortēts';
$strAbsolutePathToDocSqlDir = 'Lūdzu ievadiet absolūto ceļu līdz docSQL direktorijai uz servera';
$strAccessDenied = 'Pieeja aizliegta';
$strAction = 'Darbība';
$strAddDeleteColumn = 'Pievienot/Dzēst laukus (kolonnas)';
$strAddDeleteRow = 'Pievienot/Dzēst ierakstu';
$strAddNewField = 'Pievienot jaunu lauku';
$strAddPriv = 'Pievienot jaunu privilēģiju';
$strAddPrivMessage = 'Jūs pievienojāt jaunu privilēģiju.';
$strAddPrivilegesOnDb = 'Pievienot privilēģijas uz sekojošo  datubāzi';
$strAddPrivilegesOnTbl = 'Pievienot privilēģijas uz sekojošo tabulu';
$strAddSearchConditions = 'Pievienot meklēšanas nosacījumus ("where" izteiksmes ķermenis):';
$strAddToIndex = 'Pievienot indeksam &nbsp;%s&nbsp;kolonn(u/as)';
$strAddUser = 'Pievienot jaunu lietotāju';
$strAddUserMessage = 'Jūs pievienojāt jaunu lietotāju.';
$strAddedColumnComment = 'Pievienots komentārs kolonnai';
$strAddedColumnRelation = 'Pievienota relācija kolonnai';
$strAdministration = 'Administrācija';
$strAffectedRows = 'Ietekmēto rindu skaits:';
$strAfter = 'Pēc %s';
$strAfterInsertBack = 'Atgriezties iepriekšējā lapā atpakaļ';
$strAfterInsertNewInsert = 'Ievietot vēl vienu rindu';
$strAll = 'Visi';
$strAllTableSameWidth = 'rādīt visas tabulas vienadā platumā?';
$strAlterOrderBy = 'Mainīt datu kārtošanas laukus';
$strAnIndex = 'Indekss tieka pievienots uz %s';
$strAnalyzeTable = 'Analizēt tabulu';
$strAnd = 'Un';
$strAny = 'Jebkurš';
$strAnyColumn = 'Jebkura kolonna';
$strAnyDatabase = 'Jebkura datubāze';
$strAnyHost = 'Jebkurš hosts';
$strAnyTable = 'Jebkura tabula';
$strAnyUser = 'Jebkurš lietotājs';
$strAscending = 'Augošā secībā';
$strAtBeginningOfTable = 'Tabulas sākumā';
$strAtEndOfTable = 'Tabulas beigās';
$strAttr = 'Atribūti';

$strBack = 'Atpakaļ';
$strBeginCut = 'IZGRIEZT NO ŠĪS VIETAS';
$strBeginRaw = 'RINDAS SĀKUMS';
$strBinary = 'Binārais';
$strBinaryDoNotEdit = 'Binārais - netiek labots';
$strBookmarkDeleted = 'Ieraksts tika dzēsts.';
$strBookmarkLabel = 'Nosaukums';
$strBookmarkQuery = 'Saglabātie SQL-vaicājumi';
$strBookmarkThis = 'Saglabāt šo SQL-vaicājumu';
$strBookmarkView = 'Tikai apskatīt';
$strBrowse = 'Apskatīt';
$strBzError = 'phpMyAdmin nevarēja saarhivēt failu dēļ bojāta Bz2 paplašinājuma šajā php versijā. Stingri rekomendējam uzstādīt <code>$cfg[\'BZipDump\']</code> direktīvu jūsu phpMyAdmin konfigurācijas failā uz <code>FALSE</code>. Ja vēlaties lietot Bz2 kompresijas iespējas, jums jāuzliek jaunāka php versija. Skatīt php bug report %s sīkākai informācijai.';
$strBzip = 'saarhivēts ar bzip';

$strCannotLogin = 'Nevar pieslēgties MySQL serverim';
$strCantLoad = 'nevar ielādēt paplašinājumu %s,<br />lūdzu pārbaudiet PHP konfigurāciju';
$strCantLoadMySQL = 'nevar ielādēt MySQL paplašinājumu,<br />lūdzu pārbaudiet PHP konfigurāciju.';
$strCantRenameIdxToPrimary = 'Nevar pārsaukt indeksu par PRIMARY!';
$strCardinality = 'Kardinalitāte';
$strCarriage = 'Rindas nobeiguma simbols: \\r';
$strChange = 'Labot';
$strChangeCopyMode = 'Izveidot jaunu lietotāju ar tādām pašām privilēģijām un ...';
$strChangeCopyModeCopy = '... paturēt veco lietotāju.';
$strChangeCopyModeDeleteAndReload = ' ... dzēst veco lietotāju no lietotāju tabulas, un pēc tam pārlādēt privilēģijas.';
$strChangeCopyModeJustDelete = ' ... dzēst veco lietotāju no lietotāju tabulas.';
$strChangeCopyModeRevoke = ' ... atņemt vecajam lietotājam visas aktīvās privilēģijas, un pēc tam dzēst viņu.';
$strChangeCopyUser = 'Mainīt piekļuves informāciju / Klonēt lietotāju';
$strChangeDisplay = 'Izvēlieties, kuru lauku rādīt';
$strChangePassword = 'Mainīt paroli';
$strCharsetOfFile = 'Tabulas kodējums:';
$strCheckAll = 'Iezīmēt visu';
$strCheckDbPriv = 'Pārbaudīt privilēģijas uz datubāzi';
$strCheckPrivs = 'Pārbaudīt privilēģijas';
$strCheckPrivsLong = 'Pārbaudīt privilēģijas uz datubāzi &quot;%s&quot;.';
$strCheckTable = 'Pārbaudīt tabulu';
$strChoosePage = 'Izvēlieties lapu redigēšanai';
$strColComFeat = 'Rādu kolonnu komentārus';
$strColumn = 'Kolonna';
$strColumnNames = 'Kolonnu nosaukumi';
$strColumnPrivileges = 'Kolonnu specifiskās privilēģijas';
$strCommand = 'Komanda';
$strComments = 'Komentāri';
$strCompleteInserts = 'Pilnas INSERT izteiksmes';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nevar nolasīt Jūsu konfigurācijas failu!<br />Tas var notikt, ja PHP atrod tajā kļūda, vai arī PHP nevar atrast so failu.<br />Mēginiet izsaukt konfigurācijas failu tieši, klikškinot linku zemāk un lasiet PHP pazinojumu par kļūdām. Vairākumā gadījumu kaut kur pietrukst pēdina vai semikols.<br />Ja Jūs redzat tukšu lapu, viss ir kārtībā.';
$strConfigureTableCoord = 'Lūdzu konfigurējiet koordinātes tabulai %s';
$strConfirm = 'Vai Jūs tiešām gribat to darīt?';
$strConnections = 'Konekcijas';
$strCookiesRequired = 'Šī lapa nestrādās korekti, ja \'Cookies\' ir atslēgtas jūsu pārlūkprogrammas konfigurācijā.';
$strCopyTable = 'Kopēt tabulu uz (datubāze<b>.</b>tabula):';
$strCopyTableOK = 'Tabula %s tika pārkopēta uz %s.';
$strCouldNotKill = 'phpMyAdmin nevarēja nogalināt procesu %s. Iespējams, ka tas jau agrāk tika izbeigts.';
$strCreate = 'Izveidot';
$strCreateIndex = 'Izveidot indeksu uz&nbsp;%s&nbsp;laukiem';
$strCreateIndexTopic = 'Izveidot jaunu indeksu';
$strCreateNewDatabase = 'Izveidot jaunu datubāzi';
$strCreateNewTable = 'Izveidot jaunu tabulu datubāzē %s';
$strCreatePage = 'Izveidot jaunu lapu';
$strCreatePdfFeat = 'PDF failu izveide';
$strCriteria = 'Kritērijs';

$strDBGContext = 'Conteksts';
$strDBGContextID = 'Conteksta ID';
$strDBGHits = 'Apmeklējumi';
$strDBGLine = 'Līnija';
$strDBGMaxTimeMs = 'Maks. laiks, ms';
$strDBGMinTimeMs = 'Min. laiks, ms';
$strDBGModule = 'Modulis';
$strDBGTimePerHitMs = 'Viena apmeklējuma laiks, ms';
$strDBGTotalTimeMs = 'Laiks kopā, ms';
$strData = 'Dati';
$strDataDict = 'Datu vārdnīca';
$strDataOnly = 'Tikai dati';
$strDatabase = 'Datubāze ';
$strDatabaseHasBeenDropped = 'Datubāze %s tika izdzēsta.';
$strDatabaseWildcard = 'Datubāze (var lietot aizstājējzīmes):';
$strDatabases = 'datubāzes';
$strDatabasesDropped = '%s datubāzes tika veiksmīgi dzēstas.';
$strDatabasesStats = 'Datubāzu statistika';
$strDatabasesStatsDisable = 'Izslēgt statistiku';
$strDatabasesStatsEnable = 'Ieslēgt statistiku';
$strDatabasesStatsHeavyTraffic = 'Piezīme: Datubāzes statistikas ieslēgšana šeit var izsaukt palielināto datu apmaiņu starp webserveri un MySQL serveri.';
$strDbPrivileges = 'Datubāžu specifiskās privilēģijas';
$strDbSpecific = 'datubāzei specifisks';
$strDefault = 'Noklusēts';
$strDefaultValueHelp = 'Noklusētajām vērtībām, lūdzu ievadiet tikai pašu vertību, bez izsargāšanās ar atpakaļējo slīpsvītru vai pēdiņām, lietojot šo formatu: a';
$strDelete = 'Dzēst';
$strDeleteAndFlush = 'Dzēst lietotājus, un pēc tam pārlādēt privilēģijas.';
$strDeleteAndFlushDescr = 'Tas ir labākais veids, bet privilēģiju pārlādēšana var paņemt zināmu laiku.';
$strDeleteFailed = 'Dzēšana nenotika!';
$strDeleteUserMessage = 'Jūs nodzēsāt lietotāju %s.';
$strDeleted = 'Ieraksts tika dzēsts';
$strDeletedRows = 'Ieraksti dzēsti:';
$strDeleting = 'Dzēšam %s';
$strDescending = 'Dilstošā secībā';
$strDisabled = 'Izslēgts';
$strDisplay = 'Attēlot';
$strDisplayFeat = 'Rādīt iespējas';
$strDisplayOrder = 'Attēlošanas secība:';
$strDisplayPDF = 'Rādīt PDF shēmu';
$strDoAQuery = 'Izpildīt "vaicājumu pēc parauga" (aizstājējzīme: "%")';
$strDoYouReally = 'Vai Jūs tiešām gribat ';
$strDocu = 'Dokumentācija';
$strDrop = 'Likvidēt';
$strDropDB = 'Likvidēt datubāzi %s';
$strDropSelectedDatabases = 'Dzēst iezīmētās datubāzes';
$strDropTable = 'Likvidēt tabulu';
$strDropUsersDb = 'Dzēst datubāzes, kurām ir tādi paši vārdi, kā lietotājiem.';
$strDumpXRows = 'Saglabāt %s rindas, sākot ar %s.';
$strDumpingData = 'Dati tabulai';
$strDynamic = 'dinamisks';

$strEdit = 'Labot';
$strEditPDFPages = 'Labot PDF lapas';
$strEditPrivileges = 'Mainīt privilēģijas';
$strEffective = 'Efektīvs';
$strEmpty = 'Iztukšot';
$strEmptyResultSet = 'MySQL atgrieza tukšo rezultātu (0 rindas).';
$strEnabled = 'Ieslēgts';
$strEnd = 'Beigas';
$strEndCut = 'IZGRIEZT LĪDZ ŠAI VIETAI';
$strEndRaw = 'RINDAS BEIGAS';
$strEnglishPrivileges = ' Piezīme: MySQL privilēģiju apzīmējumi tiek rakstīti angļu valodā ';
$strError = 'Kļūda';
$strExplain = 'Izskaidrot SQL';
$strExport = 'Eksports';
$strExportToXML = 'Eksports XML formatā';
$strExtendedInserts = 'Paplašinātās INSERT izteiksmes';
$strExtra = 'Ekstras';

$strFailedAttempts = 'Neveiksmīgi mēģinājumi';
$strField = 'Lauks';
$strFieldHasBeenDropped = 'Lauks %s tika izdzēsts';
$strFields = 'Lauku skaits';
$strFieldsEmpty = ' Lauku skaits ir nulle! ';
$strFieldsEnclosedBy = 'Lauki iekļauti iekš';
$strFieldsEscapedBy = 'Glābjošā (escape) rakstzīme ir';
$strFieldsTerminatedBy = 'Lauki atdalīti ar';
$strFileCouldNotBeRead = 'Nevar nolasīt failu';
$strFixed = 'fiksēts';
$strFlushPrivilegesNote = 'Piezīme: phpMyAdmin saņem lietotāju privilēģijas pa taisno no MySQL privilēģiju tabilām. Šo tabulu saturs var atšķirties no privilēģijām, ko lieto serveris, ja tur tika veikti labojumi. Šajā gadījumā ir nepieciešams %spārlādēt privilēģijas%s pirms jūs turpināt.';
$strFlushTable = 'Atsvaidzināt tabulu ("FLUSH")';
$strFormEmpty = 'Formā trūkst vērtību!';
$strFormat = 'Formats';
$strFullText = 'Pilni teksti';
$strFunction = 'Funkcija';

$strGenBy = 'Uzģenerēja';
$strGenTime = 'Izveidošanas laiks';
$strGeneralRelationFeat = 'Galvenās relāciju īpašības';
$strGlobal = 'globāls';
$strGlobalPrivileges = 'Globālās privilēģijas';
$strGlobalValue = 'Globālā vērtība';
$strGo = 'Aiziet!';
$strGrantOption = 'Piešķirt';
$strGrants = 'Tiesības';
$strGzip = 'saarhivēts ar gzip';

$strHasBeenAltered = 'tika modificēta.';
$strHasBeenCreated = 'tika izveidota.';
$strHaveToShow = 'Izvēlieties vismaz vienu kolonnu attēlošanai';
$strHome = 'Sākumlapa';
$strHomepageOfficial = 'Oficiālā phpMyAdmin mājaslapa';
$strHomepageSourceforge = 'phpMyAdmin lejuplādes lapa iekš Sourceforge';
$strHost = 'Hosts';
$strHostEmpty = 'Hosts nav norādīts!';

$strId = 'ID';
$strIdxFulltext = 'Pilni teksti';
$strIfYouWish = 'Ja Jūs vēlaties ielādēt tikai dažas tabulas kolonnas, norādiet to nosaukumus, atdalot tos ar komatu.';
$strIgnore = 'Ignorēt';
$strIgnoringFile = 'Ignorējam failu %s';
$strImportDocSQL = 'Importēt docSQL failus';
$strImportFiles = 'Importēt failus';
$strImportFinished = 'Imports pabeigts';
$strInUse = 'lietošanā';
$strIndex = 'Indekss';
$strIndexHasBeenDropped = 'Indekss %s tika izdzēsts';
$strIndexName = 'Indeksa nosaukums&nbsp;:';
$strIndexType = 'Indeksa tips&nbsp;:';
$strIndexes = 'Indeksi';
$strInsecureMySQL = 'Jūsu konfigurācijas fails satur iestādījumus (lietotājs "root" bez paroles), kas atbilst noklusētajam MySQL priviliģētajam lietotājam. Jūsu MySQL serveris strādā ar šo noklusēto variantu, ir atvērts uzbrukumiem, un Jums tiešām jāaiztaisa šis drošības caurums.';
$strInsert = 'Pievienot';
$strInsertAsNewRow = 'Ievietot kā jaunu rindu';
$strInsertNewRow = 'Pievienot jaunu rindu';
$strInsertTextfiles = 'Ievietot tabulā datus no teksta faila';
$strInsertedRows = 'Rindas pievienotas:';
$strInstructions = 'Instrukcijas';
$strInvalidName = '"%s" ir rezervēts vārds, Jūs nevarat lietot to kā datubāzes/tabulas/lauka nosaukumu.';

$strJumpToDB = 'pāriet pie datubāzes &quot;%s&quot;.';
$strJustDelete = 'Dzēst lietotājus no privilēģiju tabulām.';
$strJustDeleteDescr = '&quot;Dzēstie&quot; lietotāji saglabā spēju piekļūt serverim kā parasti, līdz privilēģijas tiek pārlādētas.';

$strKeepPass = 'Nemainīt paroli';
$strKeyname = 'Atslēgas nosaukums';
$strKill = 'Nogalināt';

$strLaTeX = 'LaTeX';
$strLandscape = 'Landscape';
$strLength = 'Garums';
$strLengthSet = 'Garums/Vērtības*';
$strLimitNumRows = 'Rindu skaits vienā lapā';
$strLineFeed = 'Rindas beigu simbols: \\n';
$strLines = 'Rindas';
$strLinesTerminatedBy = 'Rindas atdalītas ar';
$strLinkNotFound = 'Links nav atrasts';
$strLinksTo = 'Linki uz';
$strLocalhost = 'Locāls';
$strLocationTextfile = 'Teksta faila atrašanās vieta';
$strLogPassword = 'Parole:';
$strLogUsername = 'Lietotājvārds:';
$strLogin = 'Ieiet';
$strLoginInformation = 'Piekļuves informācija';
$strLogout = 'Iziet';

$strMissingBracket = 'Trūkst iekavas';
$strModifications = 'Grozījumi tika saglabāti';
$strModify = 'Modificēt';
$strModifyIndexTopic = 'Modificēt indeksu';
$strMoreStatusVars = 'Vairāk statusa mainīgie';
$strMoveTable = 'Pārvietot tabulu uz (datubāze<b>.</b>tabula):';
$strMoveTableOK = 'Tabula %s tika pārvietota uz %s.';
$strMySQLCharset = 'MySQL kodējums';
$strMySQLReloaded = 'MySQL serveris tika pārlādēts.';
$strMySQLSaid = 'MySQL teica: ';
$strMySQLServerProcess = 'MySQL %pma_s1% strādā uz %pma_s2% kā %pma_s3%';
$strMySQLShowProcess = 'Parādīt procesus';
$strMySQLShowStatus = 'Parādīt MySQL izpildes laika informāciju';
$strMySQLShowVars = 'Parādīt MySQL sistēmas mainīgos';

$strName = 'Nosaukums';
$strNext = 'Nākamais';
$strNo = 'Nē';
$strNoDatabases = 'Nav datubāzu';
$strNoDatabasesSelected = 'Datubāze nav izvēlēta.';
$strNoDescription = 'Bez apraksta';
$strNoDropDatabases = '"DROP DATABASE" komanda ir aizliegta.';
$strNoExplain = 'Neizskaidrot SQL';
$strNoFrames = 'phpMyAdmin ir vairāk draudzīgs <b>freimu atbalstošu</b> pārlūkprogrammu.';
$strNoIndex = 'Nav definēti indeksi!';
$strNoIndexPartsDefined = 'Nav definēto indeksa daļu!';
$strNoModification = 'Netika labots';
$strNoPassword = 'Nav paroles';
$strNoPhp = 'Bez PHP koda';
$strNoPrivileges = 'Nav privilēģiju';
$strNoQuery = 'Nav SQL vaicājuma!';
$strNoRights = 'Jums nav pietiekoši tiesību, lai atrastos šeit tagad!';
$strNoTablesFound = 'Tabulas nav atrastas šajā datubāzē.';
$strNoUsersFound = 'Lietotāji netika atrasti.';
$strNoUsersSelected = 'Lietotāji nav izvēlēti.';
$strNoValidateSQL = 'Nepārbaudīt SQL';
$strNone = 'Nekas';
$strNotNumber = 'Tas nav numurs!';
$strNotOK = 'nav OK';
$strNotSet = 'Tabula <b>%s</b> nav atrasta vai nav atzīmeta iekš %s';
$strNotValidNumber = ' nav derīgs lauku skaits!';
$strNull = 'Nulle';
$strNumSearchResultsInTable = '%s rezultāti tabulā <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kopumā:</b> <i>%s</i> rezultāti';
$strNumTables = 'Tabulas';

$strOK = 'Labi';
$strOftenQuotation = 'Parasti pēdiņas. NEOBLIGĀTS nozīmē, ka tikai \'char\' un \'varchar\' tipa lauki tiek norobežoti ar šo simbolu.';
$strOperations = 'Darbības';
$strOptimizeTable = 'Optimizēt tabulu';
$strOptionalControls = 'Neobligāts. Nosaka, kā rakstīt vai lasīt speciālās rakstzīmes.';
$strOptionally = 'NEOBLIGĀTS';
$strOptions = 'Opcijas';
$strOr = 'Vai';
$strOverhead = 'Pārtēriņš';

$strPHP40203 = 'Jūs lietojat PHP versiju 4.2.3, kurai ir nopietna kļūda daudzbaitu rindiņu funkcijās (mbstring). Skatīt PHP bug report 19404. Sī PHP versija nav rekomendējama lietošanai ar phpMyAdmin.';
$strPHPVersion = 'PHP Versija';
$strPageNumber = 'Lapas numurs:';
$strPartialText = 'Daļēji teksti';
$strPassword = 'Parole';
$strPasswordChanged = 'Lietotāja %s parole tika veiksmīgi mainīta.';
$strPasswordEmpty = 'Parole nav norādīta!';
$strPasswordNotSame = 'Paroles nesakrīt!';
$strPdfDbSchema = 'Datubāzes "%s" shēma, %s. lapa';
$strPdfInvalidPageNum = 'Nenoteikts PDF lapas numurs!';
$strPdfInvalidTblName = 'Tabula "%s" neeksistē!';
$strPdfNoTables = 'Nav tabulu';
$strPerHour = 'stundā';
$strPhp = 'Izveidot PHP kodu';
$strPmaDocumentation = 'phpMyAdmin dokumentācija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktīvai ir JĀBŪT nodefinētai Jūsu konfigurācijas failā!';
$strPortrait = 'Portrait';
$strPos1 = 'Sākums';
$strPrevious = 'Iepriekšējie';
$strPrimary = 'Primārā';
$strPrimaryKey = 'Primārā atslēga';
$strPrimaryKeyHasBeenDropped = 'Primārā atslēga tika izdzēsta';
$strPrimaryKeyName = 'Primārās atslēgas nosaukumam jābūt... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>jābūt</b> tikai un <b>vienīgi</b> primārās atslēgas indeksa nosaukumam!)';
$strPrint = 'Drukāt';
$strPrintView = 'Izdrukas versija';
$strPrivDescAllPrivileges = 'Iekļauj visas privilēģijas, izņemot GRANT.';
$strPrivDescAlter = 'Ļauj mainīt esošo tabulu struktūru.';
$strPrivDescCreateDb = 'Ļauj veidot jaunas datubāzes un tabulas.';
$strPrivDescCreateTbl = 'Ļauj veidot jaunas tabulas.';
$strPrivDescCreateTmpTable = 'Ļauj veidot pagaidu tabulas.';
$strPrivDescDelete = 'Ļauj dzēst datus.';
$strPrivDescDropDb = 'Ļauj dzēst datubāzes un tabulas.';
$strPrivDescDropTbl = 'Ļauj dzēst tabulas.';
$strPrivDescExecute = 'Ļauj palaist saglabātās procedūras; vēl nestrādā šajā MySQL versijā.';
$strPrivDescFile = 'Ļauj importēt/eksportēt datus no/uz failiem.';
$strPrivDescGrant = 'Ļauj pievienot lietotājus un privilēģijas bez privilēģiju tabulu pārlādēšanas.';
$strPrivDescIndex = 'Ļauj veidot un dzēst indeksus.';
$strPrivDescInsert = 'Ļauj ievietot un mainīt datus.';
$strPrivDescLockTables = 'Ļauj bloķēt tabulas tekošajai darbībai.';
$strPrivDescMaxConnections = 'Ierobežo jauno konekciju skaitu, ko lietotājs var atvērt stundas laikā.';
$strPrivDescMaxQuestions = 'Ierobežo vaicājumu skaitu, ko lietotājs var mosūtīt uz serveri stundas laikā.';
$strPrivDescMaxUpdates = 'Ierobežo komandu skaitu, kas maina kas maina tabulas vai datubāzes, ko lietotājs var izpildīt stundas laikā.';
$strPrivDescProcess3 = 'Ļauj nogalināt citu lietotāju procesus.';
$strPrivDescProcess4 = 'Ļauj apskatīt pieprasījumu un procesu sarakstus.';
$strPrivDescReferences = 'Nedarbojas šajā MySQL versijā.';
$strPrivDescReload = 'Ļauj prlādēt servera iestādījumus un iztukšot servera kešu.';
$strPrivDescReplClient = 'Dod lietotājam tiesības jautāt, kur ir replikācijas oriģināli / kopijas.';
$strPrivDescReplSlave = 'Nepieciešams replikāciju kopijām.';
$strPrivDescSelect = 'Ļauj lasīt datus.';
$strPrivDescShowDb = 'Dod pieeju pilnam datubāzu sarakstam.';
$strPrivDescShutdown = 'Ļauj apstādināt serveri.';
$strPrivDescSuper = 'Ļauj pieslēgties pat tad, ja ir sasniegts maksimālais konekciju skaits; Nepieciešams vairumam administratīvo operāciju, kā globālo mainīgo maiņa vai citu lietotāju procesu nogalināšana.';
$strPrivDescUpdate = 'Ļauj mainīt datus.';
$strPrivDescUsage = 'Nav privilēģiju.';
$strPrivileges = 'Privilēģijas';
$strPrivilegesReloaded = 'Privilēģijas tika veiksmīgi pārlādētas.';
$strProcesslist = 'Procesu saraksts';
$strProperties = 'Īpašības';
$strPutColNames = 'Likt kolonnu nosaukumus pirmajā rindā';

$strQBE = 'Vaicājums pēc parauga';
$strQBEDel = 'Dzēst';
$strQBEIns = 'Ielikt';
$strQueryOnDb = 'SQL-vaicājums uz datubāzes <b>%s</b>:';
$strQueryStatistics = '<b>Pieprasījumu statistika</b>: No tā palaišanas brīža, %s pieprasījumi tika nosūtīti uz serveri.';
$strQueryType = 'Vaicājuma tips';

$strReType = 'Atkārtojiet';
$strReceived = 'Saņemts';
$strRecords = 'Ieraksti';
$strReferentialIntegrity = 'Pārbaudīt referenciālo integritāti:';
$strRelationNotWorking = 'Papildiespējas darbam ar saistītām tabulām tika izslēgtas. Lai uzzinātu kāpēc, klikškiniet %sšeit%s.';
$strRelationView = 'Relāciju pārskats';
$strRelationalSchema = 'Relāciju shēma';
$strReloadFailed = 'Nesanāca pārlādēt MySQL serveri.';
$strReloadMySQL = 'Pārlādēt MySQL serveri';
$strReloadingThePrivileges = 'Pārlādējam privilēģijas';
$strRememberReload = 'Neaizmirstiet pārlādēt serveri.';
$strRemoveSelectedUsers = 'Dzēst izvēlētos lietotājus';
$strRenameTable = 'Pārsaukt tabulu uz';
$strRenameTableOK = 'Tabula %s tika pārsaukta par %s';
$strRepairTable = 'Restaurēt tabulu';
$strReplace = 'Aizvietot';
$strReplaceTable = 'Aizvietot tabulas datus ar datiem no faila';
$strReset = 'Atcelt';
$strResourceLimits = 'Resursu ierobežojumi';
$strRevoke = 'Atsaukt';
$strRevokeAndDelete = 'Atņemt visas aktīvās privilēģijas lietotājiem, un pēc tam dzēst tos.';
$strRevokeAndDeleteDescr = 'Lietotāji saglabā iespeju lietot datubāzes, līdz privilēģijas tiek pārlādētas.';
$strRevokeGrant = 'Atņemt \'Grant\' tiesības';
$strRevokeGrantMessage = 'Jūs atņēmāt \'Grant\' tiesības lietotājam %s';
$strRevokeMessage = 'Jūs atņēmāt privilēgijas lietotājam %s';
$strRevokePriv = 'Atņemt privilēģijas';
$strRowLength = 'Rindas garums';
$strRowSize = ' Rindas izmērs ';
$strRows = 'Rindas';
$strRowsFrom = 'rindas sākot no';
$strRowsModeHorizontal = 'horizontālā';
$strRowsModeOptions = '%s skatā un atkārtot virsrakstus ik pēc %s rindām';
$strRowsModeVertical = 'vertikālā';
$strRowsStatistic = 'Rindas statistika';
$strRunQuery = 'Izpildīt vaicājumu';
$strRunSQLQuery = 'Izpildīt SQL-vaicājumu(s) uz datubāzes %s';
$strRunning = 'atrodas uz %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Iespējams, ka Jūs esat atraduši kļūdu SQL interpretatorā. Lūdzu apskatiet Jūsu vaicājumu citīgāk, un pārbaudiet, ka pēdiņas ir pareizas un nav sajauktas. Cits kļūdas iemesls var būt tas, ka Jūs atsūtījāt failu ar bināro vērtību ārpus pēdiņās iekļautā teksta lauka. Jūs varat arī izmēģināt savu vaicājumu MySQL komandrindas interfeisā. MySQL servera kļūdas paziņojums zemāk, ja tāds ir, var arī palīdzēt Jums diagnosticēt problēmu. Ja problēma paliek, vai arī iekš phpMyAdmin kļūda ir, bet komandrindā nav, lūdzu samaziniet Jūsu SQL vaicājumu līdz vienkāršam vaicājumam kas izsauc problēmas, un atsūtiet mums ziņojumu par kļūdu, iekļaujot tajā datus no IZGRIEZT sekcijas zemāk:';
$strSQLParserUserError = 'Izkatās, ka Jūsu SQL vaicajumā ir kļūda. MySQL servera kļūdas pazinojums zemāk, ja tāds ir, var arī palīdzet Jums diagnosticēt problēmu.';
$strSQLQuery = 'SQL-vaicājums';
$strSQLResult = 'SQL rezultāts';
$strSQPBugInvalidIdentifer = 'Nederīgs identifikators';
$strSQPBugUnclosedQuote = 'Neaizvērtas pēdiņas';
$strSQPBugUnknownPunctuation = 'Nezināmā punktuācijas zīme';
$strSave = 'Saglabāt';
$strScaleFactorSmall = 'Mērogošanas faktors ir pārāk mazs, lai shēma ietilptu vienā lapā';
$strSearch = 'Meklēt';
$strSearchFormTitle = 'Meklēt datubāzē';
$strSearchInTables = 'Tabulā(s):';
$strSearchNeedle = 'Vārdi vai vērtības meklēšanai (aizstājējzīme: "%"):';
$strSearchOption1 = 'kaut viens no vārdiem';
$strSearchOption2 = 'visi vārdi';
$strSearchOption3 = 'precīza frāze';
$strSearchOption4 = 'kā regulārā izteiksme';
$strSearchResultsFor = 'Meklēšanas rezultāti "<i>%s</i>" %s:';
$strSearchType = 'Atrast:';
$strSelect = 'Atlasīt';
$strSelectADb = 'Lūdzu izvēlieties datubāzi';
$strSelectAll = 'Iezīmēt visu';
$strSelectFields = 'Izvēlieties laukus (kaut vienu):';
$strSelectNumRows = 'vaicājumā';
$strSelectTables = 'Izvēlieties tabulas';
$strSend = 'Saglabāt kā failu';
$strSent = 'Nosūtīts';
$strServer = 'Serveris %s';
$strServerChoice = 'Servera izvēle';
$strServerStatus = 'Izpildes laika informācija';
$strServerStatusUptime = 'Šis MySQL serveris strādā %s. Palaišanās laiks %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Mainīgie';
$strServerTrafficNotes = '<b>Servera trafiks</b>: Šīs tabulas parāda šī MySQL servera tīkla trafika statistiku kopš tā palaišanas.';
$strServerVars = 'Servera mainīgie un konfigurācija';
$strServerVersion = 'Servera versija';
$strSessionValue = 'Sesijas vērtība';
$strSetEnumVal = 'Ja lauka tips ir "enum" vai "set", lūdzu ievadiet vērtības atbilstoši šim formatam: \'a\',\'b\',\'c\'...<br />Ja Jums vajag ielikt atpakaļējo slīpsvītru (\) vai vienkāršo pēdiņu (\') kādā no šīm vērtībām, lieciet tās priekšā atpakaļējo slīpsvītru (piemēram, \'\\\\xyz\' vai \'a\\\'b\').';
$strShow = 'Rādīt';
$strShowAll = 'Rādīt visu';
$strShowColor = 'Rādīt krāsas';
$strShowCols = 'Rādīt kolonnas';
$strShowDatadictAs = 'Datu vārdnīcas formats';
$strShowGrid = 'Rādīt režģi';
$strShowPHPInfo = 'Parādīt PHP informāciju';
$strShowTableDimension = 'Rādit tabulu izmērus';
$strShowTables = 'Rādīt tabulas';
$strShowThisQuery = ' Rādīt šo vaicājumu šeit atkal ';
$strShowingRecords = 'Parādu rindas';
$strSingly = '(vienkārši)';
$strSize = 'Izmērs';
$strSort = 'Kārtošana';
$strSpaceUsage = 'Diska vietas lietošana';
$strSplitWordsWithSpace = 'Vārdi ir atdalīti ar tukšumu (" ").';
$strStatement = 'Parametrs';
$strStatus = 'Statuss';
$strStrucCSV = 'CSV dati';
$strStrucData = 'Struktūra un dati';
$strStrucDrop = 'Pievienot tabulu dzēšanas komandas';
$strStrucExcelCSV = 'CSV dati MS Excel formātā';
$strStrucOnly = 'Tikai struktūra';
$strStructPropose = 'Ieteikt tabulas sruktūru';
$strStructure = 'Struktūra';
$strSubmit = 'Nosūtīt';
$strSuccess = 'Jūsu SQL-vaicājums tika veiksmīgi izpildīts';
$strSum = 'Kopumā';

$strTable = 'Tabula';
$strTableComments = 'Komentārs tabulai';
$strTableEmpty = 'Tabulas nosaukums nav norādīts!';
$strTableHasBeenDropped = 'Tabula %s tika izdzēsta';
$strTableHasBeenEmptied = 'Tabula %s tika iztukšota';
$strTableHasBeenFlushed = 'Tabula %s tika atsvaidzināta';
$strTableMaintenance = 'Tabulas apkalpošana';
$strTableOfContents = 'Satura rādītājs';
$strTableStructure = 'Tabulas struktūra tabulai';
$strTableType = 'Tabulas tips';
$strTables = '%s tabula(s)';
$strTblPrivileges = 'Tabulu specifiskās privilēģijas';
$strTextAreaLength = ' Sava garuma dēļ,<br /> šis lauks var būt nerediģējams ';
$strTheContent = 'Jūsu faila saturs tika ievietots.';
$strTheContents = 'Faila saturs aizvieto izvēlētās tabulas saturu rindiņām ar identisko primārās vai unikālās atslēgas vērtību.';
$strTheTerminator = 'Lauku atdalītājs.';
$strThisHost = 'Šis hosts';
$strThisNotDirectory = 'Tā nebija direktorija';
$strThreadSuccessfullyKilled = 'Process %s tika veiksmīgi nogalināts.';
$strTime = 'Laiks';
$strTotal = 'kopā';
$strTotalUC = 'Kopā';
$strTraffic = 'Datu apmaiņa';
$strType = 'Tips';

$strUncheckAll = 'Neiezīmēt neko';
$strUnique = 'Unikālais';
$strUnselectAll = 'Neiezīmēt neko';
$strUpdatePrivMessage = 'Jūs modificējāt privilēģijas objektam %s.';
$strUpdateProfile = 'Modificēt profilu:';
$strUpdateProfileMessage = 'Profils tika modificēts.';
$strUpdateQuery = 'Modificēšanas vaicājums';
$strUsage = 'Aizņem';
$strUseBackquotes = 'Lietot apostrofa simbolu [`] tabulu un lauku nosaukumiem';
$strUseTables = 'Lietot tabulas';
$strUseTextField = 'Lietot teksta lauku';
$strUser = 'Lietotājs';
$strUserAlreadyExists = 'Lietotājs %s jau eksistē!';
$strUserEmpty = 'Lietotāja vārds nav norādīts!';
$strUserName = 'Lietotājvārds';
$strUserNotFound = 'Izvēlētais lietotājs nav atrasts privilēģiju tabulā.';
$strUserOverview = 'Lietotāju pārskats';
$strUsers = 'Lietotāji';
$strUsersDeleted = 'Izvēlētie lietotāji tika veiksmīgi dzēsti.';
$strUsersHavingAccessToDb = 'Lietotāji, kam ir pieja pie &quot;%s&quot;';

$strValidateSQL = 'Pārbaudīt SQL';
$strValidatorError = 'Nevar inicializēt SQL pārbauditāju. Lūdzu pārbaudiet, vai Jūs esat uzinstalējuši nepieciešamos PHP paplašinājumus, kā aprakstīts %sdokumentācijā%s.';
$strValue = 'Vērtība';
$strVar = 'Mainīgais';
$strViewDump = 'Apskatīt tabulas dampu (shēmu)';
$strViewDumpDB = 'Apskatīt datubāzes dampu (shēmu)';

$strWebServerUploadDirectory = 'web servera augšupielādes direktorija';
$strWebServerUploadDirectoryError = 'Direktoija, kuru Jūs norādijāt augšupielādei, nav pieejama';
$strWelcome = 'Laipni lūgti %s';
$strWildcard = 'aizstājējzīme';
$strWithChecked = 'Ar iezīmēto:';
$strWritingCommentNotPossible = 'Komentāra rakstīšana nav iespējama';
$strWritingRelationNotPossible = 'Relācijas rakstīšana nav iespējama';
$strWrongUser = 'Kļūdains lietotājvārds/parole. Pieeja aizliegta.';

$strYes = 'Jā';

$strZeroRemovesTheLimit = 'Piezīme: Šo opciju uzstādīšana uz 0 (nulli) atceļ ierobežojumus.';
$strZip = 'arhivēts ar zip';
// To translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate

$strAutomaticLayout = 'Automatic layout';  //to translate

$strCSVOptions = 'CSV options';//to translate
$strCantLoadRecodeIconv = 'Nevar ielādēt iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';  //to translate
$strCantUseRecodeIconv = 'Nevar lietot iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';  //to translate

$strDBComment = 'Database comment: ';//to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate

$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate 

$strInnodbStat = 'InnoDB Status';  //to translate

$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_file = 'Filename';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate

$strNoOptions = 'This format has no options';//to translate

$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate

$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate

$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate

$strSQLOptions = 'SQL options';//to translate
$strStatCheckTime = 'Last check';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate

$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_jpeg__plain = 'Takes an imagefile and outputs a link for it. First options argument is a possible prepended string like http://...';//to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate

$strXML = 'XML';//to translate

$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
?>
