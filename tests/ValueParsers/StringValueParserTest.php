<?php

namespace ValueParsers\Test;

use ValueParsers\ParserOptions;
use ValueParsers\StringValueParser;

/**
 * Unit test StringValueParser class.
 *
 * @since 0.1
 *
 * @group ValueParsers
 * @group DataValueExtensions
 *
 * @license GPL-2.0+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
abstract class StringValueParserTest extends ValueParserTestBase {

	/**
	 * @see ValueParserTestBase::invalidInputProvider
	 */
	public function invalidInputProvider() {
		return [
			[ true ],
			[ false ],
			[ null ],
			[ 4.2 ],
			[ [] ],
			[ 42 ],
		];
	}

	public function testSetAndGetOptions() {
		/**
		 * @var StringValueParser $parser
		 */
		$parser = $this->getInstance();

		$parser->setOptions( new ParserOptions() );

		$this->assertEquals( new ParserOptions(), $parser->getOptions() );

		$options = new ParserOptions();
		$options->setOption( '~=[,,_,,]:3', '~=[,,_,,]:3' );

		$parser->setOptions( $options );

		$this->assertEquals( $options, $parser->getOptions() );
	}

}
