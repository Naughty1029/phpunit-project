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
        $dollar1 = new Dollar(5);
        $dollar2 = new Dollar(5);
        $dollar3 = new Dollar(6);
        $franc1 = new Franc(5);
        $franc2 = new Franc(5);
        $franc3 = new Franc(6);
    
        // Act & Assert
        $this->assertTrue($dollar1->equals($dollar2));
        $this->assertFalse($dollar1->equals($dollar3));
        $this->assertTrue($franc1->equals($franc2));
        $this->assertFalse($franc1->equals($franc3));

        // Act & Assert - 通貨単位が異なる場合
        $this->assertFalse($dollar1->equals($franc1));
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