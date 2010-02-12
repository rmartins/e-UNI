<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['admindirerror'] = 'The admin directory specified is incorrect';
$string['admindirname'] = 'Admin Directory';
$string['admindirsettinghead'] = 'Setting the admin directory ...';
$string['admindirsettingsub'] = '    A very few webhosts use /admin as a special URL for you to access a 
    control panel or something.  Unfortunately this conflicts with the 
    standard location for the Moodle admin pages.  You can fix this by 
    renaming the admin directory in your installation, and putting that 
    new name here.  For example: <br /> <br /><b>moodleadmin</b><br /> <br />
    This will fix admin links in Moodle.';
$string['bypassed'] = 'ஒதுக்கப்பட்டது';
$string['cannotcreatelangdir'] = 'Cannot create lang dir.';
$string['cannotcreatetempdir'] = 'Cannot create temp dir.';
$string['cannotdownloadcomponents'] = 'Cannot download components.';
$string['cannotdownloadzipfile'] = 'Cannot download ZIP file.';
$string['cannotfindcomponent'] = 'Cannot find component.';
$string['cannotsavemd5file'] = 'Cannot save md5 file.';
$string['cannotsavezipfile'] = 'Cannot save ZIP file.';
$string['cannotunzipfile'] = 'Cannot unzip file.';
$string['caution'] = 'எச்சரிக்கை';
$string['check'] = 'சரிபார்';
$string['chooselanguagehead'] = 'மொழியைத் தேர்ந்தெடு';
$string['chooselanguagesub'] = 'Please choose a language for the installation ONLY. You will be able to choose site and user languages on a later screen.';
$string['closewindow'] = 'இந்த சாளரத்தை மூடு';
$string['compatibilitysettingshead'] = 'Checking your PHP settings ...';
$string['compatibilitysettingssub'] = 'Your server should pass all these tests to make Moodle run properly';
$string['componentisuptodate'] = 'Component is up to date.';
$string['configfilenotwritten'] = 'The installer script was not able to automatically create a config.php file containing your chosen settings, probably because the Moodle directory is not writeable. You can manually copy the following code into a file named config.php within the root directory of Moodle.';
$string['configfilewritten'] = 'கான்பிக்.பிஹெச்பி வெற்றிகரமாக முடிக்கப்பட்டது.';
$string['configurationcompletehead'] = 'Configuration completed';
$string['configurationcompletesub'] = 'Moodle made an attempt to save your configuration in a file in the root of your Moodle installation.';
$string['continue'] = 'தொடர்க';
$string['database'] = 'Database';
$string['databasecreationsettingshead'] = 'Now you need to configure the database settings where most Moodle data
    will be stored.  This database will be created automatically by the installer
    with the settings specified below.';
$string['databasecreationsettingssub'] = '<b>Type:</b> fixed to \"mysql\" by the installer<br />
       <b>Host:</b> fixed to \"localhost\" by the installer<br />
       <b>Name:</b> database name, eg moodle<br />
       <b>User:</b> fixed to \"root\" by the installer<br />
       <b>Password:</b> your database password<br />
       <b>Tables Prefix:</b> optional prefix to use for all table names';
$string['databasesettingshead'] = 'Now you need to configure the database where most Moodle data
    will be stored.  This database must already have been created
    and a username and password created to access it.';
$string['databasesettingssub'] = '<b>Type:</b> mysql or postgres7<br />
       <b>Host:</b> eg localhost or db.isp.com<br />
       <b>Name:</b> database name, eg moodle<br />
       <b>User:</b> your database username<br />
       <b>Password:</b> your database password<br />
       <b>Tables Prefix:</b> optional prefix to use for all table names';
$string['dataroot'] = 'Data Directory';
$string['datarooterror'] = 'The \'Data Directory\' you specified could not be found or created.  Either correct the path or create that directory manually.';
$string['dbconnectionerror'] = 'We could not connect to the database you specified. Please check your database settings.';
$string['dbcreationerror'] = 'Database creation error. Could not create the given database name with the settings provided';
$string['dbhost'] = 'Host Server';
$string['dbprefix'] = 'Tables prefix';
$string['dbtype'] = 'வகை';
$string['dbwrongencoding'] = 'The selected database is running under one non-recommended encoding ($a). It would be better to use one Unicode (UTF-8) encoded database instead. Anyway, you can bypass this test by selecting the \"Skip DB Encoding Test\" check below, but you could experience problems in the future.';
$string['directorysettingshead'] = 'Please confirm the locations of this Moodle installation';
$string['directorysettingssub'] = '<b>Web Address:</b>
Specify the full web address where Moodle will be accessed.  
If your web site is accessible via multiple URLs then choose the 
most natural one that your students would use.  Do not include 
a trailing slash.
<br />
<br />
<b>Moodle Directory:</b>
Specify the full directory path to this installation
Make sure the upper/lower case is correct.
<br />
<br />
<b>Data Directory:</b>
You need a place where Moodle can save uploaded files.  This
directory should be readable AND WRITEABLE by the web server user 
(usually \'nobody\' or \'apache\'), but it should not be accessible 
directly via the web.';
$string['dirroot'] = 'Moodle Directory';
$string['dirrooterror'] = 'The \'Moodle Directory\' setting seems to be incorrect - we can\'t find a Moodle installation there. The value below has been reset.';
$string['download'] = 'Download';
$string['downloadedfilecheckfailed'] = 'Downloaded file check failed.';
$string['downloadlanguagebutton'] = 'Download the \"$a\" language pack';
$string['downloadlanguagehead'] = 'Download language pack';
$string['downloadlanguagenotneeded'] = 'You may continue the installation process using the default language pack, \"$a\".';
$string['downloadlanguagesub'] = 'You now have the option of downloading a language pack and continuing the installation process in this language.<br /><br />If you are unable to download the language pack, the installation process will continue in English. (Once the installation process is complete, you will have the opportunity to download and install additional language packs.)';
$string['environmenterrortodo'] = 'You must solve all the environmental problems (errors) found above before proceeding to install this Moodle version!';
$string['environmenthead'] = 'Checking your environment ...';
$string['environmentrecommendinstall'] = 'is recommended to be installed/enabled';
$string['environmentrecommendversion'] = 'version $a->needed is recommended and you are running $a->current';
$string['environmentrequireinstall'] = 'is required to be installed/enabled.';
$string['environmentrequireversion'] = 'version $a->needed is required and you are running $a->current';
$string['environmentsub'] = 'We are checking if the various components of your system meet the system requirements';
$string['environmentxmlerror'] = 'சுற்றுச்சூழல் தரவு வாசித்தலில் பிழை ($a->error_code)';
$string['error'] = 'பிழை';
$string['fail'] = 'தோல்வி';
$string['fileuploads'] = 'File Uploads';
$string['fileuploadserror'] = 'This should be on';
$string['fileuploadshelp'] = '<p>File uploading seems to be disabled on your server.</p>

<p>Moodle can still be installed, but without this ability, you will not be able 
   to upload course files or new user profile images.</p>

<p>To enable file uploading you (or your system administrator) will need to 
   edit the main php.ini file on your system and change the setting for 
   <b>file_uploads</b> to \'1\'.</p>';
$string['gdversion'] = 'GD version';
$string['gdversionerror'] = 'The GD library should be present to process and create images';
$string['gdversionhelp'] = '<p>Your server does not seem to have GD installed.</p>

<p>GD is a library that is required by PHP to allow Moodle to process images 
   (such as the user profile icons) and to create new images (such as 
   the log graphs).  Moodle will still work without GD - these features 
   will just not be available to you.</p>

<p>To add GD to PHP under Unix, compile PHP using the --with-gd parameter.</p>

<p>Under Windows you can usually edit php.ini and uncomment the line referencing php_gd2.dll.</p>';
$string['globalsquotes'] = 'Insecure Handling of Globals';
$string['globalsquoteserror'] = 'Fix your PHP settings: disable register_globals and/or enable magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Combination of disabled Magic Quotes GPC and enabled Register Globals both at the same time is not recommended.</p>

<p>The recommended setting is <b>magic_quotes_gpc = On</b> and <b>register_globals = Off</b> in your php.ini</p>

<p>If you don\'t have access to your php.ini, you might be able to place the following line in a file 
   called .htaccess within your Moodle directory:
   <blockquote>php_value magic_quotes_gpc On</blockquote>
   <blockquote>php_value register_globals Off</blockquote>
</p>   
   ';
$string['help'] = 'உதவி';
$string['iconvrecommended'] = 'Installing the optional ICONV library is highly recommended in order to improve site performance, particularly if your site is supporting non-latin languages.';
$string['info'] = 'தகவல்';
$string['installation'] = 'Installation';
$string['invalidmd5'] = 'Invalid md5';
$string['langdownloaderror'] = 'Unfortunately the language \"$a\" was not installed. The installation process will continue in English.';
$string['langdownloadok'] = 'The language \"$a\" was installed successfully. The installation process will continue in this language.';
$string['language'] = 'மொழி';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'This should be off';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime should be turned off for Moodle to function properly.</p>

<p>Normally it is off by default ... see the setting <b>magic_quotes_runtime</b> in your php.ini file.</p>

<p>If you don\'t have access to your php.ini, you might be able to place the following line in a file 
   called .htaccess within your Moodle directory:
   <blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>   
   ';
$string['mbstringrecommended'] = 'Installing the optional MBSTRING library is highly recommended in order to improve site performance, particularly if your site is supporting non-latin languages.';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'The PHP memory limit is set quite low ... you may run into problems later.';
$string['memorylimithelp'] = '<p>The PHP memory limit for your server is currently set to $a.</p>

<p>This may cause Moodle to have memory problems later on, especially 
   if you have a lot of modules enabled and/or a lot of users.</p>

<p>We recommend that you configure PHP with a higher limit if possible, like 40M.  
   There are several ways of doing this that you can try:</p>
<ol>
<li>If you are able to, recompile PHP with <i>--enable-memory-limit</i>.  
    This will allow Moodle to set the memory limit itself.</li>
<li>If you have access to your php.ini file, you can change the <b>memory_limit</b> 
    setting in there to something like 40M.  If you don\'t have access you might 
    be able to ask your administrator to do this for you.</li>
<li>On some PHP servers you can create a .htaccess file in the Moodle directory 
    containing this line:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>However, on some servers this will prevent <b>all</b> PHP pages from working 
    (you will see errors when you look at pages) so you\'ll have to remove the .htaccess file.</p></li>
</ol>';
$string['missingrequiredfield'] = 'Some required field is missing';
$string['moodledocslink'] = 'மூடூலின் ஆவணங்களுக்கு இங்கே சொடுக்கவும்';
$string['mysql416bypassed'] = 'However, if your site is using iso-8859-1 (latin) languages ONLY, you may continue using your currently installed MySQL 4.1.12 (or higher).';
$string['mysql416required'] = 'MySQL 4.1.16 is the minimum version required for Moodle 1.6 in order to guarantee that all data can be converted to UTF-8 in the future.';
$string['mysqlextensionisnotpresentinphp'] = 'PHP has not been properly configured with the MySQL extension so that it can communicate with MySQL.  Please check your php.ini file or recompile PHP.';
$string['name'] = 'பெயர்';
$string['next'] = 'அடுத்து';
$string['ok'] = 'சரி';
$string['pass'] = 'தேர்ச்சி';
$string['password'] = 'கடவுச்சொல்';
$string['php50restricted'] = 'PHP 5.0.x has a number of known problems, please upgrade to 5.1.x or downgrade to 4.3.x or 4.4.x';
$string['phpversion'] = 'பிஎச்பி பதிப்பு';
$string['phpversionerror'] = 'PHP version must be at least 4.3.0 or 5.1.0 (5.0.x has a number of known problems).';
$string['phpversionhelp'] = '<p>Moodle requires a PHP version of at least 4.3.0 or 5.1.0 (5.0.x has a number of known problems).</p>
<p>You are currently running version $a</p>
<p>You must upgrade PHP or move to a host with a newer version of PHP!<br/>
(In case of 5.0.x you could also downgrade to 4.4.x version)</p>';
$string['previous'] = 'முந்தைய';
$string['remotedownloadnotallowed'] = 'Download of components to your server isn\'t allowed (allow_url_fopen is disabled).<br /><br />You must download the <a href=\"$a->url\">$a->url</a> file manually, copy it to \"$a->dest\" in your server and unzip it there.';
$string['report'] = 'அறிக்கை';
$string['restricted'] = 'அனுமதி குறைக்கப்பட்டது';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle may have trouble with safe mode on';
$string['safemodehelp'] = '<p>Moodle may have a variety of problems with safe mode on, not least is that 
   it probably won\'t be allowed to create new files.</p>
   
<p>Safe mode is usually only enabled by paranoid public web hosts, so you may have 
   to just find a new web hosting company for your Moodle site.</p>
   
<p>You can try continuing the install if you like, but expect a few problems later on.</p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'This should be off';
$string['sessionautostarthelp'] = '<p>Moodle requires session support and will not function without it.</p>

<p>Sessions can be enabled in the php.ini file ... look for the session.auto_start parameter.</p>';
$string['skipdbencodingtest'] = 'Skip DB Encoding Test';
$string['status'] = 'தற்போதைய நிலைகள்';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = 'Tamil';
$string['unicoderecommended'] = 'Storing all your data in Unicode (UTF-8) is recommended. New installations should be performed into databases that have their default character set as Unicode. If you are upgrading, you should perform the UTF-8 migration process (see the Admin page).';
$string['unicoderequired'] = 'It is required that you store all your data in Unicode format (UTF-8). New installations must be performed into databases that have their default character set as Unicode. If you are upgrading, you should perform the UTF-8 migration process (see the Admin page).';
$string['user'] = 'பயனாளர்';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'You are seeing this page because you have successfully installed and 
    launched the <strong>$a->packname $a->packversion</strong> package in your computer. Congratulations!';
$string['welcomep30'] = 'This release of the <strong>$a->installername</strong> includes the applications 
    to create an environment in which <strong>Moodle</strong> will operate, namely:';
$string['welcomep40'] = 'The package also includes <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'The use of all the applications in this package is governed by their respective 
    licences. The complete <strong>$a->installername</strong> package is 
    <a href=\"http://www.opensource.org/docs/definition_plain.html\">open source</a> and is distributed 
    under the <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> license.';
$string['welcomep60'] = 'The following pages will lead you through some easy to follow steps to 
    configure and set up <strong>Moodle</strong> on your computer. You may accept the default 
    settings or, optionally, amend them to suit your own needs.';
$string['welcomep70'] = 'Click the \"Next\" button below to continue with the set up of <strong>Moodle</strong>.';
$string['wrongdestpath'] = 'Wrong destination path.';
$string['wrongsourcebase'] = 'Wrong source URL base.';
$string['wrongzipfilename'] = 'Wrong ZIP filename.';
$string['wwwroot'] = 'இணைய முகவரி';
$string['wwwrooterror'] = 'The \'Web Address\' does not appear to be valid - this Moodle installation doesn\'t appear to be there. The value below has been reset.';
?>
