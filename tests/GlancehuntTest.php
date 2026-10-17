<?php
/**
 * Tests for GlanceHunt
 */

use PHPUnit\Framework\TestCase;
use Glancehunt\Glancehunt;

class GlancehuntTest extends TestCase {
    private Glancehunt $instance;

    protected function setUp(): void {
        $this->instance = new Glancehunt(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Glancehunt::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
