<?php
namespace sfyanbel\CreditCardValidation\test;

use sfyanbel\CreditCardValidation\CreditCard;

class TypeCardTest {
    

/*
|--------------------------------------------------------------------------
| test Type of Credit Card by any Credit Card Number
|--------------------------------------------------------------------------
|
*/

function test(){
   
    $testCreditCard = "34418098f678409";

    $ob = new CreditCard();
    return $ob->getTypeCreditCard($testCreditCard);
    
}

}



?>