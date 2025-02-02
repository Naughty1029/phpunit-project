<?php
use PHPUnit\Framework\TestCase;
use App\Dollar;
use App\Franc;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        // Arrange
        $wallet = new Dollar(5);
    
        // Act & Assert - ケース1
        $this->assertEquals(new Dollar(15), $wallet->times(3));
    
        // Act & Assert - ケース2
        $this->assertEquals(new Dollar(20), $wallet->times(4));
    
        // イミュータブル性の確認
        $this->assertEquals(5, $wallet->getAmount());
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

    public function testFrancMultiplication()
    {
        // Arrange
        $wallet = new Franc(5);
    
        // Act & Assert - ケース1
        $this->assertEquals(new Franc(15), $wallet->times(3));
    
        // Act & Assert - ケース2
        $this->assertEquals(new Franc(20), $wallet->times(4));
    
        // イミュータブル性の確認
        $this->assertEquals(5, $wallet->getAmount());
    }
}