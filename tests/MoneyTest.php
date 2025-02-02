<?php
use PHPUnit\Framework\TestCase;
use App\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        // Arrange
        $wallet = new Dollar(5);
    
        // Act & Assert - ケース1
        $product = $wallet->times(3);
        $this->assertEquals(15, $product->amount);
    
        // Act & Assert - ケース2
        $product = $wallet->times(4);
        $this->assertEquals(20, $product->amount);
    
        // ここで重要！
        // $wallet->amount は元の 5 のままか、という確認も本来はしたいところ
        // $this->assertEquals(5, $wallet->amount); // → イミュータブル実装ならここもOKになる
    }

    public function testEquality()
    {
        // Arrange
        $wallet1 = new Dollar(5);
        $wallet2 = new Dollar(5);
        $wallet3 = new Dollar(6);
    
        // Act & Assert
        $this->assertTrue($wallet1->equals($wallet2));
        $this->assertFalse($wallet1->equals($wallet3));
    }
}