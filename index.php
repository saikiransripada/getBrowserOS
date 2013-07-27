<?php

##################################################
#                                                #
# getBrowserOS.php by Joe Mottershaw             #
# Cloud Eight - http://www.cloud-eight.com       #
#                                                #
##################################################

    // Include getBrowserOS
        include('getBrowserOS.php');

    // Assign values to variables
        $operatingSystem    =   getOS();
        $browser            =   getBrowser();
        
    // Output
        echo    '<strong>Operating System: </strong>'.$operatingSystem.'<br />',
                '<strong>Browser: </strong>'.$browser;
                
    /*
        Example:
            Operating System: Windows 8
            Browser: Internet Explorer
    */

?>
