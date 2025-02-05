<?php
namespace App;

class Money
{
  protected $amount;
  
  /**
   * @param Money $money
   */
  public function equals(Money $money)
  {
    return $this->amount === $money->amount && get_class($this) === get_class($money);
  }
}  