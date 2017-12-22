<?php

return [
    'issue-654' => [
        'ua' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE)',
        'properties' => [
            'Comment' => 'IE 6.0',
            'Browser' => 'IE',
            'Browser_Type' => 'Browser',
            'Browser_Bits' => '32',
            'Browser_Maker' => 'Microsoft Corporation',
            'Browser_Modus' => 'unknown',
            'Version' => '6.0',
            'Platform' => 'WinCE',
            'Platform_Version' => 'unknown',
            'Platform_Description' => 'Windows CE',
            'Platform_Bits' => '32',
            'Platform_Maker' => 'Microsoft Corporation',
            'Alpha' => false,
            'Beta' => false,
            'Frames' => true,
            'IFrames' => true,
            'Tables' => true,
            'Cookies' => true,
            'JavaScript' => true,
            'VBScript' => true,
            'JavaApplets' => true,
            'isFake' => false,
            'isAnonymized' => false,
            'isModified' => false,
            'CssVersion' => '2',
            'Device_Name' => 'general Mobile Phone',
            'Device_Maker' => 'unknown',
            'Device_Type' => 'Mobile Phone',
            'Device_Pointing_Method' => 'unknown',
            'Device_Code_Name' => 'general Mobile Phone',
            'Device_Brand_Name' => 'unknown',
            'RenderingEngine_Name' => 'Trident',
            'RenderingEngine_Version' => 'unknown',
            'RenderingEngine_Maker' => 'Microsoft Corporation',
        ],
        'lite' => false,
        'standard' => false,
        'full' => true,
    ],
    'issue-654 (standard + lite)' => [
        'ua' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE)',
        'properties' => [
            'Comment' => 'IE 6.0',
            'Browser' => 'IE',
            'Browser_Maker' => 'Microsoft Corporation',
            'Version' => '6.0',
            'Platform' => 'Win32',
            'Device_Type' => 'Desktop',
            'Device_Pointing_Method' => 'mouse',
        ],
        'lite' => true,
        'standard' => true,
        'full' => false,
    ],
];
