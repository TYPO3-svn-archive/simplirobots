<?php

########################################################################
# Extension Manager/Repository config file for ext "simplirobots".
#
# Auto generated 21-01-2012 21:16
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'simpliRobots',
	'description' => 'Generates a robots.txt fully configurable by Typoscript. Usefull for multidomain and multilingual sites. Thanks to simpli-cissimus.de',
	'category' => 'fe',
	'author' => 'Michael Reuber',
	'author_email' => 'michael.reuber@gmx.de',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => 'weeaar_robotstxt,robots_exclusion',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.1.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-4.7.99',
		),
		'conflicts' => array(
			'weeaar_robotstxt' => '',
			'robots_exclusion' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"72df";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"a059";s:17:"ext_localconf.php";s:4:"b4c7";s:14:"ext_tables.php";s:4:"4929";s:16:"locallang_db.xml";s:4:"bd93";s:14:"doc/manual.sxw";s:4:"ba73";s:33:"pi1/class.tx_simplirobots_pi1.php";s:4:"ef9b";s:17:"pi1/locallang.xml";s:4:"5830";s:38:"static/simpli_robots.txt/constants.txt";s:4:"bd89";s:34:"static/simpli_robots.txt/setup.txt";s:4:"4431";}',
	'suggests' => array(
	),
);

?>