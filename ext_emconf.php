<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "reint_file_timestamp"
 *
 * Auto generated by Extension Builder 2016-01-06
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Timestamp in public file uri',
	'description' => 'Adds a parameter with timestamp to all public file uri to prevent browser from caching the file after update.',
	'category' => 'misc',
	'author' => 'Ephraim Härer',
	'author_email' => 'ephraim.haerer@renolit.com',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);