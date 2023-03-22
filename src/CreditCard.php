<?php

namespace sfyanbel\CreditCardValidation;

use sfyanbel\CreditCardValidation\Brands\Discover;
use sfyanbel\CreditCardValidation\Brands\MasterCards;
use sfyanbel\CreditCardValidation\Brands\Visa;
use sfyanbel\CreditCardValidation\Brands\AmericanExpress;



class CreditCard{



    /*
    |--------------------------------------------------------------------------
    | validationDegitCount Function
    |--------------------------------------------------------------------------
    | This Function will return True || False
    | 
    | True if the Count of Degit correct
    | False if tht Count of Degit incorrect
    */
  


    private function validationDegitCount($firstNumber,$CountCredit)
    {

  
        // AmericanExpress should has 15 Degit
         if($firstNumber=='3'&&$CountCredit!=15){
              return false;
          }
          // Visa & MasterCards & Discover  should has 16 Degit
          else if(($firstNumber=='4'||$firstNumber=='5'||$firstNumber=='6')&&$CountCredit!=16){
                  return false;        
          }
          else {
             return true;
          }
     }


    /*
    |--------------------------------------------------------------------------
    | fetchType Function
    |--------------------------------------------------------------------------
    | This Function will return Array Contain Info Data for selected Card 
    |
    | 
    */


     private function fetchType($firstNum){
     

        switch ($firstNum) {
            case 3:
                return AmericanExpress::$info;
                break;
            case 4:
                return Visa::$info;
                break;
            case 5:
                return MasterCards::$info;
                break;
            case 6:
                return Discover::$info;
                break;
                default:
                return ['String incorrect'];
        }
     }



     public function getTypeCreditCard($CreditCard){


        /*
        |--------------------------------------------------------------------------
        | getTypeCreditCard Function
        |--------------------------------------------------------------------------
        | This Function which Developer will called
        | just input Credit Card as Parameter and watch the Result
        |
        | 
        */

        //first number of Credit Card
        $firstNumber = substr($CreditCard, 0, 1);
        
        //count number of Credit Card
        $count = strlen($CreditCard);
        
        
        if(!$this->validationDegitCount($firstNumber,$count))
        {
        
            return "[The count of digits is incorrect]";
        }
        else{
        
    
             return $this->fetchType($firstNumber);
        
        }
        
        
        }



}















 


?>

