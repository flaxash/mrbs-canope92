<?php // -*-mode: PHP; coding:utf-8;-*-
namespace MRBS;

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 **************************************************************************/

/**********
 * Timezone
 **********/
 
// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
//$timezone = "Europe/London";
$timezone = "Europe/Paris";


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = $_SERVER['SERVEUR_MYSQL'];
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:canopefrslmrbs92.mysql.dbBase de données: canopefrslmrbs92
$db_database = "versailles_db19";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "crdp-versailles";
// Database login password:
$db_password = 'cr&Dp_v3R$a1LleS;';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Set $db_persist to TRUE to use PHP persistent (pooled) database connections.  Note
// that persistent connections are not recommended unless your system suffers significant
// performance problems without them.   They can cause problems with transactions and
// locks (see http://php.net/manual/en/features.persistent-connections.php) and although
// MRBS tries to avoid those problems, it is generally better not to use persistent
// connections if you can.
$db_persist = FALSE;



/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */

$auth["type"] = "config";
//users 
$auth["user"]["xavier"] = "axa92100";
$auth["user"]["canope92"] = "gestion92!";
$auth["user"]["canope75"] = "gestion75!";
$auth["user"]["administrator"] = "rnsdc92100";


$auth["admin"][] = "xavier";
$auth["admin"][] = "canope92";
$auth["admin"][] = "canope75";
$auth["admin"][] = "administrator";
/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */
/*********************************
 * Site identification information
 *********************************/
$mrbs_admin = "Xavier Aubrun";
$mrbs_admin_email = "xavier.aubrun@reseau-canope.fr";
// NOTE:  there are more email addresses in $mail_settings below.    You can also give
// email addresses in the format 'Full Name <address>', for example:
// $mrbs_admin_email = 'Booking System <admin_email@your.org>';
// if the name section has any "peculiar" characters in it, you will need
// to put the name in double quotes, e.g.:
// $mrbs_admin_email = '"Bloggs, Joe" <admin_email@your.org>';

// The company name is mandatory.   It is used in the header and also for email notifications.
// The company logo, additional information and URL are all optional.

$mrbs_company = "Atelier Canopé Vanves";   // This line must always be uncommented ($mrbs_company is used in various places)

// Uncomment this next line to use a logo instead of text for your organisation in the header
$mrbs_company_logo = "images/canope_200px.png";    // name of your logo file.   This example assumes it is in the MRBS directory

// Start of week: 0 for Sunday, 1 for Monday, etc.
$weekstarts = 1;

// The default settings below (along with the 30 minute resolution above)
// give you 24 half-hourly slots starting at 07:00, with the last slot
// being 18:30 -> 19:00

// The beginning of the first slot of the day (DEFAULT VALUES FOR NEW AREAS)
$morningstarts         = 7;   // must be integer in range 0-23
$morningstarts_minutes = 0;   // must be integer in range 0-59

// The beginning of the last slot of the day (DEFAULT VALUES FOR NEW AREAS)
$eveningends           = 20;  // must be integer in range 0-23
$eveningends_minutes   = 30;   // must be integer in range 0-59

// Days of the week that should be hidden from display
// 0 for Sunday, 1 for Monday, etc.
// For example, if you want Saturdays and Sundays to be hidden set $hidden_days = array(0,6);
//
// By default the hidden days will be removed completely from the main table in the week and month
// views.   You can alternatively arrange for them to be shown as narrow, greyed-out columns
// by editing the CSS file.   Look for $column_hidden_width in mrbs.css.php.
//
// [Note that although they are hidden from display in the week and month views, they 
// can still be booked from the edit_entry form and you can display the bookings by
// jumping straight into the day view from the date selector.]
$hidden_days = array(0);

// Trailer date format: 0 to show dates as "Jul 10", 1 for "10 Jul"
$dateformat = 1;

// Time format in pages. 0 to show dates in 12 hour format, 1 to show them
// in 24 hour format
$twentyfourhour_format = 1;

// The number of years back and ahead the date selectors should go
$year_range['back'] = -1;
$year_range['ahead'] = 1;

//Themes
// "default"        Default MRBS theme
// "classic126"     Same colour scheme as MRBS 1.2.6

$theme = "canope92";

// Use the $custom_css_url to override the standard MRBS CSS.
$custom_css_url = 'css/custom.css';

//types
$booking_types[] = "A";
$booking_types[] = "B";
$booking_types[] = "C";
$booking_types[] = "D";
$booking_types[] = "F";
$booking_types[] = "G";
$booking_types[] = "H";

// Default type for new bookings
$default_type = "C";

// Default description for new bookings
$default_description = "";

// To display times on the x-axis (along the top) and rooms or days on the y-axis (down the side)
// set to TRUE;   the default/traditional version of MRBS has rooms (or days) along the top and
// times along the side.    Transposing the table can be useful if you have a large number of
// rooms and not many time slots.
$times_along_top = FALSE;

// To display the row labels (times, rooms or days) on the right hand side as well as the 
// left hand side in the day and week views, set to TRUE;
// (was called $times_right_side in earlier versions of MRBS)
$row_labels_both_sides = FALSE;

// To display the column headers (times, rooms or days) on the bottom of the table as
// well as the top in the day and week views, set to TRUE;
$column_labels_both_ends = FALSE;

// To display the mini caldandars at the bottom of the day week and month views
// set this value to TRUE
$display_calendar_bottom = FALSE; 

// Define default starting view (month, week or day)
// Default is day
$default_view = "month";

// champs obligatoires
$is_mandatory_field['entry.name'] = true;
$is_mandatory_field['entry.type'] = true;
$is_mandatory_field['entry.type_action'] = true;
$is_mandatory_field['entry.publics'] = true;
$is_mandatory_field['entry.modalite'] = true;
$is_mandatory_field['entry.nb_inscrits'] = true;
$is_mandatory_field['entry.intervention_formation'] = true;
$is_mandatory_field['entry.intervention_mediation'] = true;
$is_mandatory_field['entry.recette_vente'] = true;
$is_mandatory_field['entry.fiche_noticia'] = true;
$is_mandatory_field['entry.contact'] = true;
