<?php
namespace App;

class Dollar
{
  public $amount;
  
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
    return new Dollar($this->amount * $multipier);
  }

  /**
   * @param Dollar $dollar
   */
  public function equals(Dollar $dollar)
  {
    return $this->amount === $dollar->amount;
  }
}