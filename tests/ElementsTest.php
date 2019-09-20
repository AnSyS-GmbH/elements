<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace AnSyS\Elements\Tests;

use AnSyS\Elements\ElementsBundle;
use PHPUnit\Framework\TestCase;

class ElementsTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ElementsBundle();

        $this->assertInstanceOf('AnSyS\Elements\ElementsBundle', $bundle);
    }
}
