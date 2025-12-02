<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../functions.php';

class FunctionTest extends TestCase {
    public function testTambah() {
        $this->assertEquals(4, tambah(2, 2));
    }
}
