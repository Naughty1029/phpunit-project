<?php
use PHPUnit\Framework\TestCase;
use App\Dollar;
use App\Franc;
use App\Money;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        // Arrange
        $wallet = Money::dollar(5);
    
        // Act & Assert - ケース1
        $this->assertEquals(Dollar::dollar(15), $wallet->times(3));
    
        // Act & Assert - ケース2
        $this->assertEquals(Dollar::dollar(20), $wallet->times(4));
    
        // イミュータブル性の確認
        $this->assertEquals(5, $wallet->getAmount());
    }

    public function testEquality()
    {
        // Arrange
        $dollar1 = Dollar::dollar(5);
        $dollar2 = Dollar::dollar(5);
        $dollar3 = Dollar::dollar(6);
        $franc1 = Dollar::franc(5);
        $franc2 = Dollar::franc(5);
        $franc3 = Dollar::franc(6);
    
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
        $wallet = Dollar::franc(5);
    
        // Act & Assert - ケース1
        $this->assertEquals(Dollar::franc(15), $wallet->times(3));
    
        // Act & Assert - ケース2
        $this->assertEquals(Dollar::franc(20), $wallet->times(4));
    
        // イミュータブル性の確認
        $this->assertEquals(5, $wallet->getAmount());
    }
}