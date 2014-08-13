<?php
session_start();
    //show all errors - useful whilst developing
    error_reporting(E_ALL);

    // these keys can be obtained by registering at http://developer.ebay.com
    
    $production         = true;   // toggle to true if going against production
    $compatabilityLevel = 877;    // eBay API version
    
    
    if ($production) {
        $devID = 'your ebay api devid';   // these prod keys are different from sandbox keys
        $appID = 'your ebay api app id';
        $certID = 'your ebay api cert id';
        //set the Server to use (Sandbox or Production)
        $serverUrl = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
        //the token representing the eBay user to assign the call with
        $userToken = 'your user token';
        $paypalEmailAddress= 'PRODUCTION_PAYPAL_EMAIL_ADDRESS';		
    } else {  
        $devID = 'DDD_SANDBOX';         // insert your devID for sandbox
        $appID = 'AAA_SANDBOX';   // different from prod keys
        $certID = 'CCC_SANDBOX';  // need three 'keys' and one token
        //set the Server to use (Sandbox or Production)
        $serverUrl = 'https://api.sandbox.ebay.com/ws/api.dll';
        // the token representing the eBay user to assign the call with
        // this token is a long string - don't insert new lines - different from prod token
        $userToken = 'YOUR_TOKEN_ABOUT_1000_CHARS'; 
		$paypalEmailAddress = 'SANDBOX_PAYPAL_EMAIL_ADDRESS';		
    }
    
    
?>
