include "backup.php";

new BackupMySQL(array(
  'host' => 'canopefrslmrbs92.mysql.db',
	'username' => 'canopefrslmrbs92',
	'passwd' => 'Rnsdc92150',
	'dbname' => 'canopefrslmrbs92',
  'dossier' => './bdd/',
  'nom_fichier' => 'mrbs_'
	));

<!-- syntaxe des argumants de la fonction
$default = array(
		'host' => ini_get('mysqli.default_host'),
		'username' => ini_get('mysqli.default_user'),
		'passwd' => ini_get('mysqli.default_pw'),
		'dbname' => '',
		'port' => ini_get('mysqli.default_port'),
		'socket' => ini_get('mysqli.default_socket'),
		'dossier' => './',
		'nbr_fichiers' => 5,
		'nom_fichier' => 'backup'
		);
-->