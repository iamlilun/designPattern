<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 穿著打扮
 |--------------------------------------
 |
 |
 */
use Src\Decorator\example\Person;
use Src\Decorator\example\Finery;
use Src\Decorator\example\BigTrouser;
use Src\Decorator\example\LeatherShoes;
use Src\Decorator\example\Sneakers;
use Src\Decorator\example\Suit;
use Src\Decorator\example\Tie;
use Src\Decorator\example\TShirts;

require_once __DIR__ . '/../../../vendor/autoload.php';

//-----------第一種裝扮----------------------
$person = new Person("小菜");
echo "第一種裝扮:\n";

//先實例化要裝飾的物件
$sneakers = new Sneakers();
$bigTrouser = new BigTrouser();
$tShirts = new TShirts();

//裝飾過程
$sneakers->decorate($person);
$bigTrouser->decorate($sneakers);
$tShirts->decorate($bigTrouser);
$tShirts->show();

//-----------第二種裝扮----------------------
echo "第二種裝扮:\n";

//先實例化要裝飾的物件
$leatherShoes = new LeatherShoes();
$tie = new Tie();
$suit = new Suit();

//裝飾過程
$leatherShoes->decorate($person);
$tie->decorate($leatherShoes);
$suit->decorate($tie);
$suit->show();