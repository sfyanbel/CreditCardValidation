<?php


namespace sfyanbel\CreditCardValidation\Brands;


/*
|--------------------------------------------------------------------------
| Visa Credit Card
|--------------------------------------------------------------------------
| This Class Contain First Number of the Visa Card store in Var $FNumber
| 
| $info array Conatin name of the Card and Id  
| 
| This array is the final Exporter that the Developer will get , you can modify it as you like
|
| (validationLenght) Function will return True if the lenght of Card Correct & false for incorrect lenght
*/

class Visa 
{
  
 
    static $info=['Visa',2]; 

    static function  validationLenght($Lenght){
        return $Lenght==16 ? true : false;
    }


    private static $instance;

    static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    
}



 
?>