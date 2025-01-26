<?php
use PHPUnit\Framework\TestCase;
use App\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        // Arrange
        $five = new Dollar(5);

        // Act
        $five->times(3);

        // Assert
        $this->assertEquals(15, $five->amount);
    }
}