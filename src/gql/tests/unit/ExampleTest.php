<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test to be run in workflow
     *
     * @return void
     */
    public function testExample(): void
    {
        $this->assertEquals(true, true);
    }
}
