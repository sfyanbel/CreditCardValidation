<?php

namespace sfyanbel\CreditCardValidation;

use sfyanbel\CreditCardValidation\Brands\Discover;
use sfyanbel\CreditCardValidation\Brands\MasterCards;
use sfyanbel\CreditCardValidation\Brands\Visa;
use sfyanbel\CreditCardValidation\Brands\AmericanExpress;

class CreditCard{



  


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

        function test(){
            // Test Credit Card
            $testCreditCard = "4394341809867844";

            $ob = new CreditCard();
            $object= $ob->getTypeCreditCard($testCreditCard);
            return $object;
        }

}















 


?>

