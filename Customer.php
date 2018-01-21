<?php
declare(strict_types=1);
namespace golinskis;
/**
 *Status danego Kliento (moze byc basic lub premium)
 *@var string
 */
class Customer
{
   public $status = 'basic';
   protected $name;
   public function getDiscount(): int 
   {
       return 20;
   }
   public function setName(string $name): void
   {
       $this->name = $name;
   }
   public function getName(): string
   {
       return $this->name;
   }

  public function askForDiscount():void
{

echo "Dzien dobry".$this->name."Jaka znizke posiadam",PHP_EOL;
}
public static function  getClassName(): void
{
echo 'Jestem Klasa', get_called_class(),PHP_EOL;
echo $this->name;
}



}
