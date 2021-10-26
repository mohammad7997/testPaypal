<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID','ATxNrpFe3QO9keRNCWR0yo9JFm5-UyOAm5lWta4O_U2E-kW-wWHSbjwmHvLVI_QYVu-z5DQEEPDvUqwq'),
    'secret' => env('PAYPAL_SECRET','EENE85LB-L75bfqJigtZmsU6FHBUYXHfD0IlsKqDPm44CMjpTKrXWmlgo8dvsCTEQkvB_cHYBYhEBsxz'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
