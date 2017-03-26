<?php

/*
 * This file is part of JoliTypo - a project by JoliCode.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace JoliTypo\Tests\Fixer;

use JoliTypo\Fixer;

class OneSpaceBetweenSentencesTest extends \PHPUnit\Framework\TestCase
{
    public function testSimpleString()
    {
        $fixer = new Fixer\OneSpaceBetweenSentences();
        $this->assertInstanceOf('JoliTypo\Fixer\OneSpaceBetweenSentences', $fixer);

        $this->assertEquals('This is the first sentence. And the second.', $fixer->fix('This is the first sentence.  And the second.'));
        $this->assertEquals('A sentence. A second one.', $fixer->fix('A sentence.  A second one.'));
        $this->assertEquals('3.14', $fixer->fix('3.14'));
    }
}
