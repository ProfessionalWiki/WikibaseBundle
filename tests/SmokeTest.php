<?php

declare( strict_types = 1 );

namespace Wikibase\Bundle\Tests;

use PHPUnit\Framework\TestCase;

class SmokeTest extends TestCase {

	public function testWikibaseRepositoryIsLoaded() {
		$this->assertTrue( class_exists( '\Wikibase\Repo\WikibaseRepo' ) );
	}

	public function testLocalMediaIsLoaded() {
		$this->assertTrue( class_exists( '\Wikibase\LocalMedia\WikibaseLocalMedia' ) );
	}

}
