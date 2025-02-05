<?php
namespace App;
use App\Money;

class Franc extends Money
{ 
  /**
   * @param int $amount
   */
  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }
  
  /**
   * @param int $multipier
   */
  public function times(int $multipier)
  {
    return new Franc($this->amount * $multipier);
  }
}