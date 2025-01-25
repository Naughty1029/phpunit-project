<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
  public function testTrueAssertsToTrue()
  {
    $foo = true;
    $this->assertTrue($foo);
  }
}