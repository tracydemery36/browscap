<?php

return [
    'issue-455' => [
        'ua' => 'Mozilla/5.0 (Linux; Android 4.4.4; C6603 Build/10.5.1.A.0.283) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.102 Mobile Safari/537.36',
        'properties' => [
            'Comment' => 'Chrome 38.0',
            'Browser' => 'Chrome',
            'Browser_Type' => 'Browser',
            'Browser_Bits' => '32',
            'Browser_Maker' => 'Google Inc',
            'Browser_Modus' => 'unknown',
            'Version' => '38.0',
            'Platform' => 'Android',
            'Platform_Version' => '4.4',
            'Platform_Description' => 'Android OS',
            'Platform_Bits' => '32',
            'Platform_Maker' => 'Google Inc',
            'Alpha' => false,
            'Beta' => false,
            'Frames' => true,
            'IFrames' => true,
            'Tables' => true,
            'Cookies' => true,
            'JavaScript' => true,
            'VBScript' => false,
            'JavaApplets' => false,
            'isFake' => false,
            'isAnonymized' => false,
            'isModified' => false,
            'CssVersion' => '3',
            'Device_Name' => 'Xperia Z',
            'Device_Maker' => 'Sony',
            'Device_Type' => 'Mobile Phone',
            'Device_Pointing_Method' => 'touchscreen',
            'Device_Code_Name' => 'C6603',
            'Device_Brand_Name' => 'Sony',
            'RenderingEngine_Name' => 'Blink',
            'RenderingEngine_Version' => 'unknown',
            'RenderingEngine_Maker' => 'Google Inc',
        ],
        'lite' => false,
        'standard' => false,
        'full' => true,
    ],
    'issue-455 (standard + lite)' => [
        'ua' => 'Mozilla/5.0 (Linux; Android 4.4.4; C6603 Build/10.5.1.A.0.283) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.102 Mobile Safari/537.36',
        'properties' => [
            'Comment' => 'Chrome Generic',
            'Browser' => 'Chrome',
            'Browser_Maker' => 'Google Inc',
            'Version' => '0.0',
            'Platform' => 'Android',
            'Device_Type' => 'Mobile Device',
            'Device_Pointing_Method' => 'touchscreen',
        ],
        'lite' => true,
        'standard' => true,
        'full' => false,
    ],
];
