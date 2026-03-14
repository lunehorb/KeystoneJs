<?php
/**
 * Tests for KeystoneJsAdmin
 */

use PHPUnit\Framework\TestCase;
use Keystonejsadmin\Keystonejsadmin;

class KeystonejsadminTest extends TestCase {
    private Keystonejsadmin $instance;

    protected function setUp(): void {
        $this->instance = new Keystonejsadmin(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Keystonejsadmin::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
