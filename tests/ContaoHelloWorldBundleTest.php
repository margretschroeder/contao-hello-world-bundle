<?php

/

namespace MargretSchroeder\ContaoHelloWorldBundle\Tests;

use Margretschroeder\ContaoHelloworldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('Margretschroeder\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
