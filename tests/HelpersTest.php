<?php

namespace BrainMaestro\GitHooks\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class HelpersTest extends PHPUnitTestCase
{
    #[Test]
    public function it_checks_os()
    {
        $this->assertIsBool(is_windows());
    }
}
