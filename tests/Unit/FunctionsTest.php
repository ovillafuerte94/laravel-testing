<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testEmail()
    {
        $result = validate_email('ovillafuerte.94@gmail.com');
        $this->assertTrue($result);

        $result = validate_email('ovillafuerte.94@@gmail.com');
        $this->assertFalse($result);
    }
}
