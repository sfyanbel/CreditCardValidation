<?php
namespace sfyanbel\CreditCardValidation\test;


class TypeCardTest {
    
    function test(){
        // Test Credit Card
        $testCreditCard = "4394341809867844";

        $ob = new CreditCard();
        $object= $ob->getTypeCreditCard($testCreditCard);
        return $object;
    }

}



?>