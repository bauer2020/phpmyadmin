<?php
/* $Id$ */

/* By: lubos klokner <erkac@vault-tec.sk> */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = '"verdana ce", "arial ce", verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, "verdana ce", "arial ce", helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ne', 'Po', 'Út', 'St', 'Št', 'Pi', 'So');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Máj', 'Jún', 'Júl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%B, %Y - %H:%M';
$timespanfmt = '%s dní, %s hodín, %s minút a %s sekúnd';

$strAPrimaryKey = 'Bol pridaný primárny kľúč pre %s';
$strAbortedClients = 'Prerušené';
$strAbsolutePathToDocSqlDir = 'Prosím zadajte absolútnu cestu k adresáru docSQL na servere';
$strAccessDenied = 'Prístup zamietnutý';
$strAction = 'Akcia';
$strAddDeleteColumn = 'Pridať/Odobrať polia stĺpcov';
$strAddDeleteRow = 'Pridať/Odobrať kritéria riadku';
$strAddNewField = 'Pridať nové pole';
$strAddPriv = 'Pridať nové oprávnenie';
$strAddPrivMessage = 'Oprávnenie bolo pridané.';
$strAddPrivilegesOnDb = 'Pridať oprávnenia pre nasledujúcu databázu';
$strAddPrivilegesOnTbl = 'Pridať oprávnenia pre nasledujúcu tabuľku';
$strAddSearchConditions = 'Pridať vyhľadávacie parametre (obsah dotazu po "where" príkaze):';
$strAddToIndex = 'Pridať do indexu &nbsp;%s&nbsp;stĺpec';
$strAddUser = 'Pridať nového používateľa';
$strAddUserMessage = 'Používateľ bol pridaný.';
$strAddedColumnComment = 'Pridaný komentár k stĺpcu';
$strAddedColumnRelation = 'Pridaný vzťah pre stĺpec';
$strAdministration = 'Administrácia';
$strAffectedRows = ' Ovplyvnené riadky: ';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Späť';
$strAfterInsertNewInsert = 'Vložiť nový záznam';
$strAll = 'Všetko';
$strAllTableSameWidth = 'zobraziť všetky tabuľky s rovnakou šírkou?';
$strAlterOrderBy = 'Zmeniť poradie tabuľky podľa';
$strAnIndex = 'Bol pridaný index pre %s';
$strAnalyzeTable = 'Analyzovať tabuľku';
$strAnd = 'a';
$strAny = 'Akýkoľvek';
$strAnyColumn = 'Akýkoľvek stĺpec';
$strAnyDatabase = 'Akákoľvek databáza';
$strAnyHost = 'Akýkoľvek hostiteľ';
$strAnyTable = 'Akákoľvek tabuľka';
$strAnyUser = 'Akýkoľvek používateľ';
$strAscending = 'Vzostupne';
$strAtBeginningOfTable = 'Na začiatku tabuľky';
$strAtEndOfTable = 'Na konci tabuľky';
$strAttr = 'Atribúty';

$strBack = 'Späť';
$strBeginCut = 'ZAČIATOK VÝSEKU';
$strBeginRaw = 'ZAČIATOK TOKU';
$strBinary = 'Binárny';
$strBinaryDoNotEdit = 'Binárny - neupravujte ';
$strBookmarkDeleted = 'Záznam z obľúbených bol zmazaný.';
$strBookmarkLabel = 'Názov';
$strBookmarkQuery = 'Obľúbený SQL dotaz';
$strBookmarkThis = 'Pridať tento SQL dotaz do obľúbených';
$strBookmarkView = 'Iba prezrieť';
$strBrowse = 'Prechádzať';
$strBzError = 'nepodarilo sa skomprimovať výstup z dôvodu chybného rozšírenia pre kompresiu Bz2 v tejto verzii php. Doporučuje sa nastaviť <code>$cfg[\'BZipDump\']</code> v konfigurácii phpMyAdmin na <code>FALSE</code>. Ak si želáte používať kompresiu Bz2 mali by ste nainštalovať novšiu verziu php. Viac informácií získate z popisu chyby: %s.';
$strBzip = '"bzipped"';

$strCannotLogin = 'Nedá sa prihlásiť k MySQL serveru';
$strCantLoad = 'nedá sa nahrať rozšírenie %s,<br />prosím skontrolujte konfiguráciu PHP';
$strCantLoadMySQL = 'nie je možné nahrať rozšírenie pre MySQL,<br />prosím skontrolujte konfiguráciu PHP.';
$strCantLoadRecodeIconv = 'Nie je možné nahrať rozšírenie iconv alebo recode potrebné pre prevod znakových sad. Upravte nastavenie php tak aby umožňovalo použiť tieto rozšírenia alebo vypnite túto vlastnosť v konfigurácii phpMyAdmina.';
$strCantRenameIdxToPrimary = 'Nie je možné premenovať index na PRIMARY!';
$strCantUseRecodeIconv = 'Nie je možné použiť funkcie iconv,libiconv a recode_string aj napriek tomu, že rozšírenia sú nahrané. Skontrolujte prosím nastavenie PHP.';
$strCardinality = 'Mohutnosť';
$strCarriage = 'Návrat vozíku (Carriage return): \\r';
$strChange = 'Zmeniť';
$strChangeCopyMode = 'Vytvoriť používateľa s rovnakými právami a...';
$strChangeCopyModeCopy = '... zachovať pôvodného používateľa.';
$strChangeCopyModeDeleteAndReload = ' ... zmazať pôvodného používateľa z tabuliek používateľov a potom znovunačítať oprávnenia.';
$strChangeCopyModeJustDelete = ' ... zmazať pôvodného používateľa z tabuliek používateľov.';
$strChangeCopyModeRevoke = ' ... odobrať všetky oprávnenia pôvodnému používateľovi a následne ho zmazať.';
$strChangeCopyUser = 'Zmeniť informácie o používateľovi / Kopírovať používateľa';
$strChangeDisplay = 'Zvolte, ktoré pole zobraziť';
$strChangePassword = 'Zmeniť heslo';
$strCharsetOfFile = 'Znaková sada súboru:';
$strCheckAll = 'Označiť všetko';
$strCheckDbPriv = 'Skontrolovať oprávnenia databázy';
$strCheckPrivs = 'Skontrolovať oprávnenia';
$strCheckPrivsLong = 'Skontrolovať oprávnenia pre databázu &quot;%s&quot;.';
$strCheckTable = 'Skontrolovať tabuľku';
$strChoosePage = 'Prosím zvolte si Stránku, ktorú chcete upraviť';
$strColComFeat = 'Zobrazovať komentáre stĺpcov';
$strColumn = 'Stĺpec';
$strColumnNames = 'Názvy stĺpcov';
$strColumnPrivileges = 'Oprávnenia pre jednotlivé stĺpce';
$strCommand = 'Príkaz';
$strComments = 'Komentáre';
$strCompleteInserts = 'Úplné vloženie';
$strCompression = 'Kompresia';
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.';
$strConfigureTableCoord = 'Prosím skonfigurujte koordináty pre tabuľku %s';
$strConfirm = 'Skutočne si želáte toto vykonať?';
$strConnections = 'Spojenia';
$strCookiesRequired = 'Cookies musia byť povolené, pokiaľ chcete pokračovať.';
$strCopyTable = 'Skopírovať tabuľku do (databáza<b>.</b>tabuľka):';
$strCopyTableOK = 'Tabuľka %s bola skorírovaná do %s.';
$strCouldNotKill = 'Neporadilo za zabiť vlákno %s. Jeho beh bol pravdepodobne už ukončený.';
$strCreate = 'Vytvoriť';
$strCreateIndex = 'Vytvoriť index na&nbsp;%s&nbsp;stĺpcoch';
$strCreateIndexTopic = 'Vytvoriť nový index';
$strCreateNewDatabase = 'Vytvoriť novú databázu';
$strCreateNewTable = 'Vytvoriť novú tabuľku v databáze %s';
$strCreatePage = 'Vytvoriť novú Stránku';
$strCreatePdfFeat = 'Vytváranie PDF';
$strCriteria = 'Kritéria';

$strDBGContext = 'Kontext';
$strDBGContextID = 'Kontext ID';
$strDBGHits = 'Zásahov';
$strDBGLine = 'Riadok';
$strDBGMaxTimeMs = 'Max. čas, ms';
$strDBGMinTimeMs = 'Min čas, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Čas/Zásah, ms';
$strDBGTotalTimeMs = 'Celkový čas, ms';
$strData = 'Dáta';
$strDataDict = 'Dátový slovník';
$strDataOnly = 'Iba dáta';
$strDatabase = 'Databáza ';
$strDatabaseHasBeenDropped = 'Databáza %s bola zmazaná.';
$strDatabaseWildcard = 'Databáza (nahradzujúce znaky povolené):';
$strDatabases = 'databáz(y)';
$strDatabasesDropped = 'Úspešne zrušených databáz: %s.';
$strDatabasesStats = 'Štatistiky databázy';
$strDatabasesStatsDisable = 'Skryť štatistiky';
$strDatabasesStatsEnable = 'Zobraziť štatistiky';
$strDatabasesStatsHeavyTraffic = 'Poznámka: Aktivovanie štatistík databázy môže spôsobiť značné zvýšenie sieťovej prevádzky medzi databázou a web serverom.';
$strDbPrivileges = 'Oprávnenia pre jednotlivé databázy';
$strDbSpecific = 'závislé na databáze';
$strDefault = 'Predvolené';
$strDefaultValueHelp = 'Pre predvolené hodnoty, prosím zadajte iba jednu hodnotu bez úvodzoviek alebo uvádzacích znakov, napr.: a';
$strDelete = 'Zmazať';
$strDeleteAndFlush = 'Odstrániť používateľov a znovunačítať práva.';
$strDeleteAndFlushDescr = 'Toto je najčistejšie riešenie, ale znovunačítanie práv môže chvíľu trvať.';
$strDeleteFailed = 'Mazanie bolo neúspešné!';
$strDeleteUserMessage = 'Používateľ %s bol zmazaný.';
$strDeleted = 'Riadok bol zmazaný';
$strDeletedRows = 'Zmazané riadky:';
$strDeleting = 'Odstraňuje sa %s';
$strDescending = 'Zostupne';
$strDisabled = 'Vypnuté';
$strDisplay = 'Zobraziť';
$strDisplayFeat = 'Zobraziť vlastnosti';
$strDisplayOrder = 'Zobraziť zoradené:';
$strDisplayPDF = 'Zobraziť schému PDF';
$strDoAQuery = 'Vykonať "dotaz podľa príkladu" (nahradzujúci znak: "%")';
$strDoYouReally = 'Skutočne chcete vykonať príkaz ';
$strDocu = 'Dokumentácia';
$strDrop = 'Odstrániť';
$strDropDB = 'Odstrániť databázu %s';
$strDropSelectedDatabases = 'Zrušiť vybrané databázy';
$strDropTable = 'Zrušiť tabuľku';
$strDropUsersDb = 'Odstrániť databázy s rovnakým menom ako majú používatelia.';
$strDumpXRows = 'Zobraziť %s riadkov od riadku %s.';
$strDumpingData = 'Sťahujem dáta pre tabuľku';
$strDynamic = 'dynamický';

$strEdit = 'Upraviť';
$strEditPDFPages = 'Upraviť PDF Stránky';
$strEditPrivileges = 'Upraviť oprávnenia';
$strEffective = 'Efektívny';
$strEmpty = 'Vyprázdniť';
$strEmptyResultSet = 'MySQL vrátil prázdny výsledok (tj. nulový počet riadkov).';
$strEnabled = 'Zapnuté';
$strEnd = 'Koniec';
$strEndCut = 'KONIEC VÝSEKU';
$strEndRaw = 'KONIEC TOKU';
$strEnglishPrivileges = ' Poznámka: názvy MySQL oprávnení sú uvádzané v angličtine. ';
$strError = 'Chyba';
$strExplain = 'Vysvetliť SQL';
$strExport = 'Exportovať';
$strExportToXML = 'Exportovať do formátu XML';
$strExtendedInserts = 'Rozšírené vkladanie';
$strExtra = 'Extra';

$strFailedAttempts = 'Nepodarených pokusov';
$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s bolo odstránené';
$strFields = 'Polia';
$strFieldsEmpty = ' Počet polí je prázdny! ';
$strFieldsEnclosedBy = 'Polia uzatvorené';
$strFieldsEscapedBy = 'Polia uvedené pomocou';
$strFieldsTerminatedBy = 'Polia ukončené';
$strFileCouldNotBeRead = 'Súbor sa nedá prečítať';
$strFixed = 'pevný';
$strFlushPrivilegesNote = 'Poznámka: phpMyAdmin získava práva používateľov priamo z tabuliek MySQL. Obsah týchto tabuliek sa môže líšiť od práv, ktoré používa server, ak boli tieto tabuľky ručne upravené. V tomto prípade sa odporúča vykonať %sznovunačítanie práv%s predtým ako budete pokračovať.';
$strFlushTable = 'Vyprázdniť tabuľku ("FLUSH")';
$strFormEmpty = 'Chýbajúca položka vo formulári !';
$strFormat = 'Formát';
$strFullText = 'Plné texty';
$strFunction = 'Funkcia';

$strGenBy = 'Vygenerované';
$strGenTime = 'Vygenerované:';
$strGeneralRelationFeat = 'Možnosti všeobecných vzťahov';
$strGlobal = 'globálny';
$strGlobalPrivileges = 'Globálne práva';
$strGlobalValue = 'Globálna hodnota';
$strGo = 'Vykonaj';
$strGrantOption = 'Prideliť';
$strGrants = 'Oprávnenia';
$strGzip = '"gzip-ované"';

$strHasBeenAltered = 'bola zmenená.';
$strHasBeenCreated = 'bola vytvorená.';
$strHaveToShow = 'Zvolte prosím aspoň jeden stĺpec, ktorý chcete zobraziť';
$strHome = 'Domov';
$strHomepageOfficial = 'Oficiálne stránky phpMyAdmin-a';
$strHomepageSourceforge = 'Download stránka phpMyAdmin-a (Sourceforge)';
$strHost = 'Hostiteľ';
$strHostEmpty = 'Názov hostiteľa je prázdny!';

$strId = 'ID';
$strIdxFulltext = 'Celý text';
$strIfYouWish = 'Ak si želáte nahrať iba určité stĺpce tabuľky, špecifikujte ich ako zoznam polí oddelený čiarkou.';
$strIgnore = 'Ignorovať';
$strIgnoringFile = 'Ignorujem súbor %s';
$strImportDocSQL = 'Importovať súbory docSQL';
$strImportFiles = 'Importovať súbory';
$strImportFinished = 'Importovanie ukončené';
$strInUse = 'práve sa používa';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index pre %s bol odstránený';
$strIndexName = 'Meno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexes = 'Indexy';
$strInsecureMySQL = 'Konfiguračný súbor obsahuje nastavenia (root bez hesla), ktoré zodpovedajú predvolenému privilegovanému MySQL účtu. Ak MySQL server beží s týmto nastavením, nie je zabezpečený proti napadnutiu, táto bezpečnostná chyba by mala byť urýchlene odstránená.';
$strInsert = 'Vložiť';
$strInsertAsNewRow = 'Vložiť ako nový riadok';
$strInsertNewRow = 'Vložiť nový riadok';
$strInsertTextfiles = 'Vložiť textové súbory do tabuľky';
$strInsertedRows = 'Vložené riadky:';
$strInstructions = 'Inštrukcie';
$strInvalidName = '"%s" je rezervované slovo, nemôže byť použité ako názov databázy/tabuľky/poľa.';

$strJumpToDB = 'Na databázu &quot;%s&quot;.';
$strJustDelete = 'Iba odstrániť používateľlov z tabuliek práv.';
$strJustDeleteDescr = '&quot;Odstránení&quot; používatelia budú mať k serveru ako predtým až do znovunačítania práv.';

$strKeepPass = 'Nezmeniť heslo';
$strKeyname = 'Kľúčový názov';
$strKill = 'Zabiť';

$strLaTeX = 'LaTeX';
$strLandscape = 'Na šírku';
$strLength = 'Dĺžka';
$strLengthSet = 'Dĺžka/Nastaviť*';
$strLimitNumRows = 'záznamov na stránku';
$strLineFeed = 'Ukončenie riadku (Linefeed): \\n';
$strLines = 'Riadky';
$strLinesTerminatedBy = 'Riadky ukončené';
$strLinkNotFound = 'Linka nebola nájdená';
$strLinksTo = 'Linkovať na';
$strLocalhost = 'Lokálny';
$strLocationTextfile = 'Lokácia textového súboru';
$strLogPassword = 'Heslo:';
$strLogUsername = 'Používateľ:';
$strLogin = 'Login';
$strLoginInformation = 'Prihlásenie';
$strLogout = 'Odhlásiť sa';

$strMissingBracket = 'Chýba zátvorka';
$strModifications = 'Zmeny boli uložené';
$strModify = 'Zmeniť';
$strModifyIndexTopic = 'Modifikovať index';
$strMoreStatusVars = 'Ďalšie informácie o stave';
$strMoveTable = 'Presunúť tabuľku do (databáza<b>.</b>tabuľka):';
$strMoveTableOK = 'Tabuľka %s bola presunutá do %s.';
$strMySQLCharset = 'Znaková sada v MySQL';
$strMySQLReloaded = 'MySQL znovu-načítaná.';
$strMySQLSaid = 'MySQL hlási: ';
$strMySQLServerProcess = 'MySQL %pma_s1% beží na %pma_s2% ako %pma_s3%';
$strMySQLShowProcess = 'Zobraziť procesy';
$strMySQLShowStatus = 'Zobraziť MySQL informácie o behu';
$strMySQLShowVars = 'Zobraziť MySQL systémové premenné';

$strName = 'Názov';
$strNext = 'Ďalší';
$strNo = 'Nie';
$strNoDatabases = 'Žiadne databázy';
$strNoDatabasesSelected = 'Neboli vybrané žiadne databázy.';
$strNoDescription = 'bez Popisu';
$strNoDropDatabases = 'Možnosť "DROP DATABASE" vypnutá.';
$strNoExplain = 'Preskočiť vysvetlenie SQL';
$strNoFrames = 'phpMyAdmin funguje lepšie s prehliadačmi podporujúcimi <b>rámy</b>.';
$strNoIndex = 'Nebol definovaný žiadny index!';
$strNoIndexPartsDefined = 'Časti indexu neboli definované!';
$strNoModification = 'Žiadna zmena';
$strNoPassword = 'Žiadne heslo';
$strNoPhp = 'bez PHP kódu';
$strNoPrivileges = 'Žiadne oprávnenia';
$strNoQuery = 'Žiadny SQL dotaz!';
$strNoRights = 'Nemáte dostatočné práva na vykonanie tejto akcie!';
$strNoTablesFound = 'Neboli nájdené žiadne tabuľky v tejto datábaze.';
$strNoUsersFound = 'Nebol nájdený žiadny používateľ.';
$strNoUsersSelected = 'Nebol vybraný žiaden používateľ.';
$strNoValidateSQL = 'Preskočiť potvrdenie platnosti SQL';
$strNone = 'Žiadny';
$strNotNumber = 'Toto nie je číslo!';
$strNotOK = 'chyba';
$strNotSet = 'Tabuľka <b>%s</b> nebola nájdená alebo nie je nastavená v %s';
$strNotValidNumber = ' nie je platné číslo riadku!';
$strNull = 'Nulový';
$strNumSearchResultsInTable = '%s výskyt(ov)v tabuľke <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkovo:</b> <i>%s</i> výskyt(ov)';
$strNumTables = 'Tabuľky';

$strOK = 'OK';
$strOftenQuotation = 'Často uvodzujúce znaky. Voliteľne znamená, že iba polia typu char a varchar sú uzatvorené do "uzatváracích" znakov.';
$strOperations = 'Operácie';
$strOptimizeTable = 'Optimalizovať tabuľku';
$strOptionalControls = 'Voliteľné. Určuje ako zapisovať alebo čítať špeciálne znaky.';
$strOptionally = 'Voliteľne';
$strOptions = 'Voľby';
$strOr = 'alebo';
$strOverhead = 'Naviac';

$strPHP40203 = 'Používate PHP 4.2.3, ktoré ma vážnu chybu pri práci s viac bajtovými znakmi (mbstring). V PHP je táto chyba zdokumentovaná pod číslom 19404. Nedoporučuje sa používať túto verziu PHP s phpMyAdminom.';
$strPHPVersion = 'Verzia PHP';
$strPageNumber = 'Číslo stránky:';
$strPartialText = 'Čiastočné texty';
$strPassword = 'Heslo';
$strPasswordChanged = 'Heslo pre %s bolo úspešne zmenené.';
$strPasswordEmpty = 'Heslo je prázdne!';
$strPasswordNotSame = 'Heslá sa nezhodujú!';
$strPdfDbSchema = 'Schéma databázy "%s"  - Strana %s';
$strPdfInvalidPageNum = 'Nedefinované číslo stránky v PDF!';
$strPdfInvalidTblName = 'Tabuľka "%s" neexistuje!';
$strPdfNoTables = 'Žiadne tabuľky';
$strPerHour = 'za hodinu';
$strPhp = 'Vytvoriť PHP kód';
$strPmaDocumentation = 'phpMyAdmin Dokumentácia';
$strPmaUriError = 'Direktíva <tt>$cfg[\'PmaAbsoluteUri\']</tt> v konfiguračnom súbore MUSÍ byť nastavená!';
$strPortrait = 'Na výšku';
$strPos1 = 'Začiatok';
$strPrevious = 'Predchádzajúci';
$strPrimary = 'Primárny';
$strPrimaryKey = 'Primárny kľúč';
$strPrimaryKeyHasBeenDropped = 'Primárny kľúč bol zrušený';
$strPrimaryKeyName = 'Názov primárneho kľúča musí byť... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musí</b> byť <b>iba</b> meno primárneho kľúča!)';
$strPrint = 'Vytlačiť';
$strPrintView = 'Náhľad k tlači';
$strPrivDescAllPrivileges = 'Všetky oprávnenia okrem GRANT.';
$strPrivDescAlter = 'Povolí meniť štruktúru existujúcich tabuliek.';
$strPrivDescCreateDb = 'Povolí vytváranie nových databáz a tabuliek.';
$strPrivDescCreateTbl = 'Povolí vytváranie nových tabuliek.';
$strPrivDescCreateTmpTable = 'Povolí vytváranie dočasných tabuliek.';
$strPrivDescDelete = 'Povolí mazanie dát.';
$strPrivDescDropDb = 'Povolí odstraňovanie databáz a tabuliek.';
$strPrivDescDropTbl = 'Povolí odstraňovanie tabuliek.';
$strPrivDescExecute = 'Povolí spúšťanie uložených procedúr. Nefunguje v tejto verzii MySQL.';
$strPrivDescFile = 'Povolí importovanie a exportovanie dát zo/do súborov na serveri.';
$strPrivDescGrant = 'Povolí pridávanie uživatelov a práv bez znovunačítania tabuliek práv.';
$strPrivDescIndex = 'Povolí vytváranie a mazanie indexov.';
$strPrivDescInsert = 'Povolí vkladanie a nahradzovanie dát.';
$strPrivDescLockTables = 'Povolí zmaknutie tabuliek pre aktuálne vlákno.';
$strPrivDescMaxConnections = 'Obmedzí počet nových spojení, ktoré môže používateľ vytvoriť za hodinu.';
$strPrivDescMaxQuestions = 'Obmedzí počet dotazov, ktoré môže používateľ odoslať za hodinu.';
$strPrivDescMaxUpdates = 'Obmedzí počet príkazov meniacich tabuľku alebo databázu, ktorá môže používateľ odoslať za hodinu.';
$strPrivDescProcess3 = 'Povolí zabíjanie procesov iným používateľlom.';
$strPrivDescProcess4 = 'Povolí prezeranie kompletných dotazov v zozname procesov.';
$strPrivDescReferences = 'Nefunguje v tejto verzii MySQL.';
$strPrivDescReload = 'Povolí znovunačítanie nastavení a vyprázdňovanie vyrovnávacích pamätí serveru.';
$strPrivDescReplClient = 'Povolí používateľovi zistiť kde je hlavný / pomocný server.';
$strPrivDescReplSlave = 'Potrebné pre replikáciu pomocných serverov.';
$strPrivDescSelect = 'Povolí čítanie dát.';
$strPrivDescShowDb = 'Povolí prístup ku kompletnému zoznamu databáz.';
$strPrivDescShutdown = 'Povolí vypnutie serveru.';
$strPrivDescSuper = 'Povolí spojenie aj v prípade, že bol dosiahnutý maximálny počet spojení. Potrebné pre väčšinu operácií pri správe serveru ako nastavovanie globálny premenných alebo zabíjanie procesov iných používateľov.';
$strPrivDescUpdate = 'Povolí menenie dát.';
$strPrivDescUsage = 'Žiadne práva.';
$strPrivileges = 'Oprávnenia';
$strPrivilegesReloaded = 'Práva boli úspešne znovunačítané.';
$strProcesslist = 'Zoznam procesov';
$strProperties = 'Vlastnosti';
$strPutColNames = 'Pridať názvy polí na prvý riadok';

$strQBE = 'Dotaz podľa príkladu';
$strQBEDel = 'Zmazať';
$strQBEIns = 'Vložiť';
$strQueryOnDb = ' SQL dotaz v databáze <b>%s</b>:';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = 'Typ dotazu';

$strReType = 'Potvrdiť';
$strReceived = 'Prijaté';
$strRecords = 'Záznamov';
$strReferentialIntegrity = 'Skontrolovať referenčnú integritu:';
$strRelationNotWorking = 'Prídavné vlastnosti pre prácu s prepojenými tabuľkami boli deaktivované. Ak chcete zistiť prečo, kliknite %ssem%s.';
$strRelationView = 'Zobraziť spojitosti';
$strRelationalSchema = 'Relačná schéma';
$strReloadFailed = 'Znovu-načítanie MySQL bolo neúspešné.';
$strReloadMySQL = 'Znovu-načítať MySQL';
$strReloadingThePrivileges = 'Znovunačítanie práv';
$strRememberReload = 'Nezabudnite znovu-načítať MySQL server.';
$strRemoveSelectedUsers = 'Odstrániť vybraných používateľov';
$strRenameTable = 'Premenovať tabuľku na';
$strRenameTableOK = 'Tabuľka %s bola premenovaná na %s';
$strRepairTable = 'Opraviť tabuľku';
$strReplace = 'Nahradiť';
$strReplaceTable = 'Nahradiť dáta v tabuľke súborom';
$strReset = 'Pôvodné (Reset)';
$strResourceLimits = 'Obmedzenie zdrojov';
$strRevoke = 'Zrušiť';
$strRevokeAndDelete = 'Odobranie všetkých aktívnych práv používateľom a ich následné odstránenie.';
$strRevokeAndDeleteDescr = 'Užívatelia budú mať stále právo USAGE (používanie) až do znovunačítania práv.';
$strRevokeGrant = 'Zrušiť polovenie prideľovať oprávnenia';
$strRevokeGrantMessage = 'Bolo zrušené právo prideľovať oprávnenia pre %s';
$strRevokeMessage = 'Boli zrušené oprávnenia pre %s';
$strRevokePriv = 'Zrušiť oprávnenia';
$strRowLength = 'Dĺžka riadku';
$strRowSize = ' Veľkosť riadku ';
$strRows = 'Riadkov';
$strRowsFrom = 'riadky začínajú od';
$strRowsModeHorizontal = 'horizontálnom';
$strRowsModeOptions = 'v(o) %s móde a opakovať hlavičky po každých %s bunkách';
$strRowsModeVertical = 'vertikálnom';
$strRowsStatistic = 'Štatistika riadku';
$strRunQuery = 'Odošli dotaz';
$strRunSQLQuery = 'Spustiť SQL dotaz/dotazy na databázu %s';
$strRunning = 'beží na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Je možné, že ste našli chybu v SQL syntaktickom analyzátore. Preskúmajte podrobne SQL dotaz, predovšetkým správnosť umiestnenia úvodzoviek. Ďalšia možnosť je, že nahrávate súbor s binárnymi dátami nezapísanými v úvodzovkách. Môžete tiež vyskúšať použiť príkazový riadok MySQL na odstránenie problému. Pokial stále máte problémy alebo syntaktický analyzátor SQL stále hlási chybu v dotaze, ktorý v príkazovom riadku funguje, prosím pokúste sa zredukovať dotaz na čo najmenší, v ktorom sa problém ešte vyskytuje a ohláste chybu na stránke phpMyAdmina spolu so sekciou VÝPIS uvedenú nižšie:';
$strSQLParserUserError = 'Vyskytla sa chyba v SQL dotaze. Nižšie uvedený MySQL výstup (ak je nejaký) Vám môže pomôcť odstrániť problém';
$strSQLQuery = 'SQL dotaz';
$strSQLResult = 'výsledok SQL';
$strSQPBugInvalidIdentifer = 'Neplatný identifikátor';
$strSQPBugUnclosedQuote = 'Neuzatvorené úvodzovky';
$strSQPBugUnknownPunctuation = 'Neznámy interpunkčný reťazec';
$strSave = 'Uložiť';
$strScaleFactorSmall = 'Mierka je príliš mala na roztiahnutie schémy na stránku';
$strSearch = 'Hľadať';
$strSearchFormTitle = 'Hľadať v databáze';
$strSearchInTables = 'V tabuľke(ách):';
$strSearchNeedle = 'Slovo(á) alebo hodnotu(y), ktoré chcete vyhľadať (nahradzujúci znak: "%"):';
$strSearchOption1 = 'najmenej jedno zo slov';
$strSearchOption2 = 'všetky slová';
$strSearchOption3 = 'presný výraz';
$strSearchOption4 = 'ako regulárny výraz';
$strSearchResultsFor = 'Prehľadať výsledky na "<i>%s</i>" %s:';
$strSearchType = 'Nájdi:';
$strSelect = 'Vybrať';
$strSelectADb = 'Prosím vyberte si databázu';
$strSelectAll = 'Označiť všetko';
$strSelectFields = 'Zvoliť pole (najmenej jedno):';
$strSelectNumRows = 'v dotaze';
$strSelectTables = 'Vybrať Tabuľky';
$strSend = 'Pošli';
$strSent = 'Odoslané';
$strServer = 'Server %s';
$strServerChoice = 'Voľba serveru';
$strServerStatus = 'Stav serveru';
$strServerStatusUptime = 'Tento server beží %s. Bol spustený %s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabVariables = 'Premenné';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Premenné a nastavenia serveru';
$strServerVersion = 'Verzia serveru';
$strSessionValue = 'Hodnota sedenia';
$strSetEnumVal = 'Ak je pole typu "enum" alebo "set", prosím zadávajte hodnoty v tvare: \'a\',\'b\',\'c\'...<br />Ak dokonca potrebujete zadať spätné lomítko ("\") alebo apostrof ("\'") pri týchto hodnotách, zadajte ich napríklad takto \'\\\\xyz\' alebo \'a\\\'b\'.';
$strShow = 'Ukázať';
$strShowAll = 'Zobraziť všetko';
$strShowColor = 'Zobraziť farbu';
$strShowCols = 'Zobraziť stĺpce';
$strShowDatadictAs = 'Formát dátového slovníka';
$strShowGrid = 'Zobraziť mriežku';
$strShowPHPInfo = 'Zobraziť informácie o PHP';
$strShowTableDimension = 'Zobraziť rozmery tabuliek';
$strShowTables = 'Zobraziť tabuľky';
$strShowThisQuery = ' Zobraziť tento dotaz znovu ';
$strShowingRecords = 'Ukázať záznamy ';
$strSingly = '(po jednom)';
$strSize = 'Veľkosť';
$strSort = 'Triediť';
$strSpaceUsage = 'Zabrané miesto';
$strSplitWordsWithSpace = 'Slová sú rozdelené medzerou (" ").';
$strStatement = 'Údaj';
$strStatus = 'Stav';
$strStrucCSV = 'CSV dáta';
$strStrucData = 'Štruktúru a dáta';
$strStrucDrop = 'Pridaj \'vymaž tabuľku\'';
$strStrucExcelCSV = 'CSV pre Ms Excel dáta';
$strStrucOnly = 'Iba štruktúru';
$strStructPropose = 'Navrhnúť štruktúru tabuľky';
$strStructure = 'Štruktúra';
$strSubmit = 'Odošli';
$strSuccess = 'SQL dotaz bol úspešne vykonaný';
$strSum = 'Celkom';

$strTable = 'Tabuľka';
$strTableComments = 'Komentár k tabuľke';
$strTableEmpty = 'Tabuľka je prázdna!';
$strTableHasBeenDropped = 'Tabuľka %s bola odstránená';
$strTableHasBeenEmptied = 'Tabuľka %s bola vyprázdená';
$strTableHasBeenFlushed = 'Tabuľka %s bola vyprázdnená';
$strTableMaintenance = 'Údržba tabuľky';
$strTableOfContents = 'Obsah';
$strTableStructure = 'Štruktúra tabuľky pre tabuľku';
$strTableType = 'Typ tabuľky';
$strTables = '%s tabuľka(y)';
$strTblPrivileges = 'Oprávnenia pre jednotlivé tabuľky';
$strTextAreaLength = ' Toto možno nepôjde upraviť,<br /> kvôli svojej dĺžke ';
$strTheContent = 'Obsah Vášho súboru bol vložený.';
$strTheContents = 'Obsah súboru prepíše obsah vybranej tabuľky v riadkoch s identickým primárnym alebo unikátnym kľúčom.';
$strTheTerminator = 'Ukončenie polí.';
$strThisHost = 'Tento počítač';
$strThisNotDirectory = 'Nebol zadaný adresár';
$strThreadSuccessfullyKilled = 'Vlákno %s bol úspešne zabité.';
$strTime = 'Čas';
$strTotal = 'celkovo';
$strTotalUC = 'Celkom';
$strTraffic = 'Prevádzka';
$strType = 'Typ';

$strUncheckAll = 'Odznačiť všetko';
$strUnique = 'Unikátny';
$strUnselectAll = 'Odznačiť všetko';
$strUpdatePrivMessage = 'Boli aktualizované oprávnenia pre %s.';
$strUpdateProfile = 'Aktualizovať profil:';
$strUpdateProfileMessage = 'Profil bol aktualizovaný.';
$strUpdateQuery = 'Aktualizovať dotaz';
$strUsage = 'Využitie';
$strUseBackquotes = ' Použiť opačný apostrof pri názvoch tabuliek a polí ';
$strUseTables = 'Použiť tabuľky';
$strUseTextField = 'Požiť textové pole';
$strUser = 'Používateľ';
$strUserAlreadyExists = 'Používateľ %s už existuje!';
$strUserEmpty = 'Meno používateľa je prázdne!';
$strUserName = 'Meno používateľa';
$strUserNotFound = 'Zvolený používateľ nebol nájdený v tabuľke práv.';
$strUserOverview = 'Prehľad užívatelov';
$strUsers = 'Používatelia';
$strUsersDeleted = 'Vybraní užívatelia bol úspešne odstránený.';
$strUsersHavingAccessToDb = 'Používatelia majúci prístup k &quot;%s&quot;';

$strValidateSQL = 'Potvrdiť platnosť SQL';
$strValidatorError = 'SQL validator nemohol byť inicializovaný. Prosím skontrolujte, či sú nainštalované všetky potrebné rozšírenia php, tak ako sú popísané v %sdocumentation%s.';
$strValue = 'Hodnota';
$strVar = 'Premenná';
$strViewDump = 'Zobraziť dump (schému) tabuľky';
$strViewDumpDB = 'Zobraziť dump (schému) databázy';

$strWebServerUploadDirectory = 'upload adresár web serveru';
$strWebServerUploadDirectoryError = 'Adresár určený pre upload súborov sa nedá otvoriť';
$strWelcome = 'Vitajte v %s';
$strWildcard = 'nahradzujúci znak';
$strWithChecked = 'Výber:';
$strWritingCommentNotPossible = 'Komentár sa nedá zapísať';
$strWritingRelationNotPossible = 'Vzťah sa nedá zapísať';
$strWrongUser = 'Zlé používateľské meno alebo heslo. Prístup zamietnutý.';

$strYes = 'Áno';

$strZeroRemovesTheLimit = 'Poznámka: Nastavenie týchto parametrov na 0 (nulu) odstráni obmedzenia.';
$strZip = '"zo zipované"';

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
