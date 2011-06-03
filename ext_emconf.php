<?php

########################################################################
# Extension Manager/Repository config file for ext "ggforcemyisam".
#
# Auto generated 02-06-2011 19:35
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Force MyISAM tables',
	'description' => 'Force the use of MyISAM as database engine for tables that are configured to use InnoDB. Supposed to be used with MariaDB.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '0.1.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'doNotLoadInFE' => 1,
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Georg Grossberger',
	'author_email' => 'georg@grossberger.at',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-4.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:26:"class.ux_t3lib_install.php";s:4:"9b50";s:23:"class.ux_tx_install.php";s:4:"c77f";s:12:"ext_icon.gif";s:4:"9eef";s:17:"ext_localconf.php";s:4:"d74d";s:14:"doc/manual.sxw";s:4:"10f3";}',
	'suggests' => array(
	),
);

?>