<?php

namespace sfyanbel\CreditCardValidation;

use sfyanbel\CreditCardValidation\Brands\Discover;
use sfyanbel\CreditCardValidation\Brands\MasterCards;
use sfyanbel\CreditCardValidation\Brands\Visa;
use sfyanbel\CreditCardValidation\Brands\AmericanExpress;



class CreditCard{

    /*
    |--------------------------------------------------------------------------
    | fetchType Function
    |--------------------------------------------------------------------------
    | This Function will return Object from the Cards Class 
    */


     private function fetchType($firstNum){
     
        switch ($firstNum) {
            case 3:
                return AmericanExpress::getInstance();
                break;
            case 4:
                return Visa::getInstance();
                break;
            case 5:
                return MasterCards::getInstance();
                break;
            case 6:
                return Discover::getInstance();
                break;
                default:
                return ['String incorrect'];
        }
     }


    /*
    |--------------------------------------------------------------------------
    | getTypeCreditCard Function
    |--------------------------------------------------------------------------
    | This Function which Developer will called
    | just input Credit Card as Parameter and watch the Result
    */


     public function getTypeCreditCard($CreditCard){

        //first number of Credit Card
        $firstNumber = substr($CreditCard, 0, 1);
        
        //count number of Credit Card
        $count = strlen($CreditCard);
        
        if(!$this->fetchType($firstNumber)::validationLenght($count)){
           
            return "[The count of digits is incorrect]";
        }
        else{
             return $this->fetchType($firstNumber)::$info;
        }
        
        
        }



}















 


?>

