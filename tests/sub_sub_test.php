<?php

use PHPUnit\Framework\TestCase;

class sub_sub_test extends TestCase
{
    /** @var mixed */
    private $unit;

    protected function setUp()
    {
        $this->unit = require __DIR__ . '/../sub/sub-sub/sub-sub-testable.php';
    }

    public function testSubSub()
    {
        $this->assertContains('RelativePaths/classes/my_class.php', $this->unit);
    }
}
