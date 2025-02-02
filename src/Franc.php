<?php
namespace App;

class Franc
{
  private $amount;
  
  /**
   * @param int $amount
   */
  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }

  /**
   * @return int
   */
  public function getAmount()
  {
    return $this->amount;
  }

  /**
   * @param int $multipier
   */
  public function times(int $multipier)
  {
    return new Franc($this->amount * $multipier);
  }

  /**
   * @param Franc $franc
   */
  public function equals(Franc $franc)
  {
    return $this->amount === $franc->amount;
  }
}