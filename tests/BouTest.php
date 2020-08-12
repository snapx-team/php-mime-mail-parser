<?php
namespace Tests\PhpMimeMailParser;

use PhpMimeMailParser\Bou;

class BouTest extends TestCase
{
    public function testOne(): void
    {
        $bou = new Bou();
        $bou->setFlag(true);

        $this->assertTrue($bou->getFlag());
    }

}