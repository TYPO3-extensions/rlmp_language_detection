<?php

########################################################################
# Extension Manager/Repository config file for ext "rlmp_language_detection".
#
# Auto generated 20-04-2010 15:55
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Language Detection',
	'description' => 'This plugin detects the visitor\'s preferred language and sets the local configuration for TYPO3\'s language engine accordingly. Both, one-tree and multiple tree concepts, are supported. It can also select from a list of similar languages if the user\'s preferred language does not exist.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.0.3',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Joachim Mathes',
	'author_email' => 't3extensions@punkt.de',
	'author_company' => 'punkt.de GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.0.0-0.0.0',
			'php' => '3.0.0-0.0.0',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:12:"ext_icon.gif";s:4:"184c";s:17:"ext_localconf.php";s:4:"bddb";s:24:"ext_typoscript_setup.txt";s:4:"e372";s:14:"doc/manual.sxw";s:4:"6b50";s:42:"pi1/class.tx_rlmplanguagedetection_pi1.php";s:4:"ff55";}',
);

?>