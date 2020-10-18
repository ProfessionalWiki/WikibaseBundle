# Wikibase Bundle

[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/ProfessionalWiki/WikibaseBundle/CI/master)](https://github.com/ProfessionalWiki/WikibaseBundle/actions?query=workflow%3ACI)
[![Latest Stable Version](https://poser.pugx.org/professional-wiki/wikibase-bundle/version.png)](https://packagist.org/packages/professional-wiki/wikibase-bundle)
[![Download count](https://poser.pugx.org/professional-wiki/wikibase-bundle/d/total.png)](https://packagist.org/packages/professional-wiki/wikibase-bundle)

Bundle extension that installs and loads Wikibase and associated extensions.

This version of Wikibase Bundle requires PHP 7.3+ and MediaWiki 1.34+.

## Bundled extensions

TODO

* **[Wikibase Repository]** - Core Wikibase extension that turns MediaWiki into a structured data repository
* **[Wikibase Client]** - Allows using Wikibase data in your wiki via parser functions and Lua
* **[Wikibase Local Media]** - Adds support for local media files via a dedicated data type 

* EntitySchema?

* CLDR
* ULS
* https://www.mediawiki.org/wiki/Extension:PropertySuggester

## Installation

Wikibase Bundle is installed using [Composer](https://getcomposer.org) with
[MediaWiki's built-in support for Composer](https://professional.wiki/en/articles/installing-mediawiki-extensions-with-composer).

### Step 1/3: composer update

TODO

Change to the base directory of your MediaWiki installation and execute these two commands:

    COMPOSER=composer.local.json composer require --no-update professional-wiki/wikibase-bundle:dev-master

    composer update professional-wiki/wikibase-bundle --no-dev -o
  
### Step 2/3: modify LocalSettings.php

Add the following two lines to the end of your
["LocalSettings.php" file](https://www.mediawiki.org/wiki/Manual:LocalSettings.php):

TODO

    require_once __DIR__ . '/extensions/WikibaseBundle/WikibaseBundle.php';

### Step 3/3: run update.php

TODO

Run the [update.php script](https://www.mediawiki.org/wiki/Manual:Update.php)
from the base directory of your MediaWiki installation: 

    php maintenance/update.php

## Version history

### Wikibase Bundle 1.0.0 (under development)

* Initial release

[Wikibase Repository]: https://www.mediawiki.org/wiki/Extension:Wikibase_Repository
[Wikibase Client]: https://www.mediawiki.org/wiki/Extension:Wikibase_Client
[Wikibase Local Media]: https://github.com/ProfessionalWiki/WikibaseLocalMedia#wikibase-local-media
