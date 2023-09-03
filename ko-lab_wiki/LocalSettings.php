<?php
# This file was automatically generated by the MediaWiki 1.40.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/MainConfigSchema.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Ko-Lab Wiki";
$wgMetaNamespace = "Ko-Lab_Wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost:8080";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/resources/mounted/Ko_lab_logo_inverted.svg",
	'icon' => "$wgResourceBasePath/images/5/56/Ko-lab-logo.svg",
];
## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "info@ko-lab.space";
$wgPasswordSender = "info@ko-lab.space";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "database";
$wgDBname = "ko-lab_wiki";
$wgDBuser = "admin";
$wgDBpassword = "admin";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "nl";

# Time zone
$wgLocaltimezone = "UTC";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "a09b984479e9414aec8407bdf54d76c1fdb48b3547e061277acaaaaca85a7082";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "c3e9a37ecf9d11ce";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-nc-sa/4.0/";
$wgRightsText = "Creative Commons Naamsvermelding-Niet Commercieel-Gelijk delen";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-nc-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtension( 'ExtensionName' );
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'DiscussionTools' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Linter' );
wfLoadExtension( 'Math' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'PageImages' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );


# End of automatically generated settings.
# Add more configuration options below.

# KO-LAB SETTINGS
$wgFileExtensions[] = 'svg';
$wgAllowTitlesInSVG = true;
$wgFavicon="$wgResourceBasePath/images/5/56/Ko-lab-logo.svg";
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createpage'] = false;
require_once __DIR__ . '/gitIgnoredPasswords.php';

$wgSMTP = array(
    'host'     => 'ssl://mail.gandi.net',
    'IDHost'   => 'ko-lab.space',
    'port'     => 465,
    'auth'     => true,
    'username' => 'info@ko-lab.space',
    'password' => $customConfig['smtp_password'],
    'secure'   => 'ssl',
);
# End
$wgEnableAutoRotation=true;
wfLoadExtension( 'mounted/MsUpload');
wfLoadExtension( 'mounted/MsLinks');
wfLoadExtension( 'mounted/MsInsert');
$wgMSU_useMsLinks = true; 
$wgEnableWriteAPI = true; // Enable the API
$wgEnableUploads = true; // Enable uploads
$wgAllowJavaUploads = true; // Solves problem with Office 2007 and newer files (docx, xlsx, etc.). Deprecated: Removed in 1.39+
$wgGroupPermissions['*']['upload'] = true; // Allow regular users to upload files
// Make sure that the file types you want to upload are allowed:
$wgFileExtensions = array('svg','png','gif','jpg','jpeg','doc','xls','pdf','ppt','tiff','bmp','docx','xlsx','pptx');
wfLoadExtension( 'WikiEditor' );
$wgWikiEditorRealtimePreview = true;
$wgEnableWriteAPI = true; 
$wgEnableUploads = true; 
$wgAllowJavaUploads = true;
$wgMSU_useDragDrop = true;
$wgMSU_showAutoCat = true;
$wgMSU_checkAutoCat = true;
$wgMSU_useMsLinks = false;
$wgMSU_confirmReplace = true; // Show the "Replace file?" checkbox
$wgMSU_imgParams = '400px';
