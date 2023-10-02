# CreditCardValidation



This packege allows you to identify the Type of the Card number (Visa,MasterCard,  etc...)




## Installation

This Package can be installed By Composer 
```bash
composer require sfyanbel/credit-card-validation
```

## How to use 

```php
<?php

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use sfyanbel\CreditCardValidation\CreditCard;

class TestController extends Controller
{
    
    function test(){
        // Test Credit Card
        $testCreditCard = "43943418067844";

        $ob = new CreditCard();
        return $ob->getTypeCreditCard($testCreditCard);
        
    }

}


```

## result as Follows
```
['AmericanExpress',1], ['Visa',2], ['MasterCards',3], ['Discover',4] 
```
## How to Contributor to this package (welcome for any Contributors)

1. add Class for new Card Number as you see in the Brands Folder  
2. create the Variables and Functions like other Cards            
3. commit then Pull a Request to Review 




