<?php

wfLoadExtensions( [
	'WikibaseLocalMedia'
] );

$GLOBALS['wgExtensionCredits']['wikibase'][] = [
	'path' => __FILE__,
	'namemsg' => 'wikibase-bundle-name',
	'name' => 'AA Wikibase Bundle',
	'version' => '0.1.0',
	'author' => [
		'[https://www.entropywins.wtf/mediawiki Jeroen De Dauw]',
		'[https://professional.wiki/ Professional.Wiki]'
	],
	'url' => 'https://github.com/ProfessionalWiki/WikibaseBundle',
	'description' => 'Bundle that installs and loads Wikibase and associated extensions',
	'license-name'   => 'GPL-2.0-or-later'
];

$GLOBALS['wgMessagesDirs']['WikibaseBundle'] = __DIR__ . '/i18n';
