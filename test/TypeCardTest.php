<?php
namespace sfyanbel\CreditCardValidation\test;


class TypeCardTest {
    

/*
|--------------------------------------------------------------------------
| test Type of Credit Card by any Credit Card Number
|--------------------------------------------------------------------------
|
*/

function test(){
   
    $testCreditCard = "4394341809867844";

    $ob = new CreditCard();
    return $ob->getTypeCreditCard($testCreditCard);
    
}

}



?>