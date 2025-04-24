<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class TestTest extends TestCase
{
    public static function dataProvider(): array
    {
        return ['a', 'b'];
    }

    #[DataProvider("dataProvider")]
    public function testTest($var): void
    {
        $this->assertTrue(true);
    }
}
