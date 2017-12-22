<?php

return [
    'issue-1075' => [
        'ua' => 'Mozilla/5.0 (Linux; Android 5.0.2; K01E Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.93 Safari/537.36',
        'properties' => [
            'Comment' => 'Chrome 39.0',
            'Browser' => 'Chrome',
            'Browser_Type' => 'Browser',
            'Browser_Bits' => '32',
            'Browser_Maker' => 'Google Inc',
            'Browser_Modus' => 'unknown',
            'Version' => '39.0',
            'Platform' => 'Android',
            'Platform_Version' => '5.0',
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
            'Device_Name' => 'MeMO Pad 10',
            'Device_Maker' => 'Asus',
            'Device_Type' => 'Tablet',
            'Device_Pointing_Method' => 'touchscreen',
            'Device_Code_Name' => 'K01E',
            'Device_Brand_Name' => 'Asus',
            'RenderingEngine_Name' => 'Blink',
            'RenderingEngine_Version' => 'unknown',
            'RenderingEngine_Maker' => 'Google Inc',
        ],
        'lite' => false,
        'standard' => false,
        'full' => true,
    ],
    'issue-1075 (standard + lite)' => [
        'ua' => 'Mozilla/5.0 (Linux; Android 5.0.2; K01E Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.93 Safari/537.36',
        'properties' => [
            'Comment' => 'Chrome Generic',
            'Browser' => 'Chrome',
            'Browser_Maker' => 'Google Inc',
            'Version' => '0.0',
            'Platform' => 'Android',
            'Device_Type' => 'Tablet',
            'Device_Pointing_Method' => 'touchscreen',
        ],
        'lite' => true,
        'standard' => true,
        'full' => false,
    ],
];
