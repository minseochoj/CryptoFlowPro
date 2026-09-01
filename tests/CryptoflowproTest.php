<?php
/**
 * Tests for CryptoFlowPro
 */

use PHPUnit\Framework\TestCase;
use Cryptoflowpro\Cryptoflowpro;

class CryptoflowproTest extends TestCase {
    private Cryptoflowpro $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoflowpro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoflowpro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
