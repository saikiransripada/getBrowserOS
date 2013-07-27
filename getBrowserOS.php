<?php

##################################################
#                                                #
# getBrowserOS.php by Joe Mottershaw             #
# Cloud Eight - http://www.cloud-eight.com       #
#                                                #
##################################################

    // Assign user agent string to variable
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Function fetch the operating system
        function getOS()
        { 
            global $userAgent;
    
            $os         =   'Unknown OS';
    
            $osArray    =   array(
                                '/windows nt 6.2/i'                 =>  'Windows 8',
                                '/windows nt 6.1/i'                 =>  'Windows 7',
                                '/windows nt 6.0/i'                 =>  'Windows Vista',
                                '/windows nt 5.2/i'                 =>  'Windows Server 2003/XP x64',
                                '/windows nt 5.1/i'                 =>  'Windows XP',
                                '/windows xp/i'                     =>  'Windows XP',
                                '/windows nt 5.0/i'                 =>  'Windows 2000',
                                '/windows me/i'                     =>  'Windows ME',
                                '/win98/i'                          =>  'Windows 98',
                                '/win95/i'                          =>  'Windows 95',
                                '/win16/i'                          =>  'Windows 3.11',
                                '/macintosh|mac os x/i'             =>  'Mac OS X',
                                '/mac_powerpc/i'                    =>  'Mac OS 9',
                                '/linux/i'                          =>  'Linux',
                                '/ubuntu/i'                         =>  'Ubuntu',
                                '/webos|mobile|tablet/i'            =>  'Mobile/Tablet Device',
                                '/iphone/i'                         =>  'iPhone',
                                '/ipod/i'                           =>  'iPod',
                                '/ipad/i'                           =>  'iPad',
                                '/windows phone/i'                  =>  'Windows Phone',
                                '/htc/i'                            =>  'HTC',
                                '/(?=.*htc)(?=.*android)/i'         =>  'HTC Android',
                                '/(?=.*htc)(?=.*windows phone)/i'   =>  'HTC Windows Phone',
                                '/blackberry/i'                     =>  'BlackBerry',
                                '/kindle/i'                         =>  'Kindle',
                                '/playstation 3/i'                  =>  'Playstation 3',
                                '/psp|playstation portable/i'       =>  'PSP'
                            );

            foreach ($osArray as $regex => $value)
            {
                if (preg_match($regex, $userAgent))
                {
                    $os = $value;
                }
            }  

        return $os;
    }

    // Function to fetch the browser
        function getBrowser()
        {
            global $userAgent;

            $browser        =   'Unknown Browser';

            $browserArray   =   array(
                                    '/playstation 3|psp|playstation portable|net front/i'   =>  'Sony PS/Access NetFront',
                                    '/xbox/i'                                               =>  'Microsoft Xbox',
                                    '/webkit|gecko/i'                                       =>  'Unknown WebKit/Gecko Based Browser',
                                    '/msie/i'                                               =>  'Internet Explorer',
                                    '/firefox/i'                                            =>  'Firefox',
                                    '/safari/i'                                             =>  'Safari',
                                    '/chrome/i'                                             =>  'Chrome',
                                    '/opera/i'                                              =>  'Opera',
                                    '/netscape/i'                                           =>  'Netscape',
                                    '/maxthon/i'                                            =>  'Maxthon',
                                    '/konqueror/i'                                          =>  'Konqueror',
                                    '/webos|mobile|tablet|kindle/i'                         =>  'Mobile/Tablet Browser'
                                );

        foreach ($browserArray as $regex => $value)
        { 
            if (preg_match($regex, $userAgent))
            {
                $browser	=	$value;
            }
        }

        return $browser;
    }
	
?>
