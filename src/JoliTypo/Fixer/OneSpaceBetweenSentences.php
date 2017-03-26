<?php

/*
 * This file is part of JoliTypo - a project by JoliCode.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace JoliTypo\Fixer;

use JoliTypo\Fixer;
use JoliTypo\FixerInterface;
use JoliTypo\StateBag;

/**
 * Remove exceeded spaces between sentences.
 */
class OneSpaceBetweenSentences implements FixerInterface
{
    public function fix($content, StateBag $stateBag = null)
    {
        // Support a wide range of currencies
        $content = preg_replace('@(.)['.Fixer::ALL_SPACES.']+@mu', '$1'.' ', $content);

        return $content;
    }
}
