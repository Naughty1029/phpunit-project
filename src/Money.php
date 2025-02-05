<?php
namespace App;
use App\Dollar;

abstract class Money
{
  protected $amount;

  abstract public function times(int $multipier);
  
  /**
   * @param Money $money
   */
  public function equals(Money $money): bool
  {
    return $this->amount === $money->amount && get_class($this) === get_class($money);
  }

  /**
  * @return int
  */
  public function getAmount()
  {
    return $this->amount;
  }

  public static function dollar(int $amount)
  {
    return new Dollar($amount);
  }

  public static function franc(int $amount) 
  {
      return new Franc($amount);
  }
}  