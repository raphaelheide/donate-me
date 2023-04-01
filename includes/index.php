<?php 
$recurring1 = array('No', 'Yes',);
$recurring2 = array('no_recurring=1', 'recurring=1',);
$currency1 = array ('Australian Dollars', 'Brazilian Real', 'Canadian Dollars', 'Czech Koruna', 'Danish Krone', 'Euro', 'Hong Kong Dollar', 'Hungarian Forint', 'Israeli New Shekel', 'Yen', 'Malaysian Ringgit', 'Mexican Peso', 'Norwegian Krone', 'New Zealand Dollar', 'Philippine Peso', 'Polish Zloty', 'Pounds Sterling', 'South Africa Rand', 'Russian Ruble', 'Singapore Dollar', 'Swedish Krona', 'Swiss Franc', 'Taiwan New Dollar', 'Thai Baht', 'Turkish Lira', 'U.S. Dollars');
$currency2 = array ('AUD', 'BRL', 'CAD', 'CZK', 'DKK', 'EUR', 'HKD', 'HUF', 'ILS', 'JPY', 'MYR', 'MXN', 'NOK', 'NZD', 'PHP', 'PLN', 'GBP', 'ZAF', 'RUB', 'SGD', 'SEK', 'CHF', 'TWD', 'THB', 'TRY', 'USD');
$color1 = array('Red', 'Yellow', 'Blue', 'Green', 'Purple', 'Orange', 'Black', 'Gray', 'Default site color', 'Primary site color');
$color2 = array('box-shadow:inset 0px 39px 0px -24px #e67a73; background-color:#e4685d; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #b23e35;', 
'box-shadow:inset 0px 39px 0px -24px #ecf06e; background-color:#ebeb3d; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#331f1f; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #9db034;',
'box-shadow:inset 0px 39px 0px -24px #7387e6; background-color:#4563cb; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #353db2;',
'box-shadow:inset 0px 39px 0px -24px #44b162; background-color:#289c3e; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #35b261;',
'box-shadow:inset 0px 39px 0px -24px #742f9c; background-color:#8d38b9; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #7835b2;',
'box-shadow:inset 0px 39px 0px -24px #d24a01; background-color:#dc6600; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #b28135;',
'box-shadow:inset 0px 39px 0px -24px #000000; background-color:#1b1b1b; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #20201f;',
'box-shadow:inset 0px 39px 0px -24px #5f5d5d; background-color:#5f5d5a; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #565653;',
'" class="button',
'" class="button primary'

);


echo '<a href="https://www.paypal.com/donate/?business='
. get_option('donateme_api') . '&'
. str_replace($recurring1, $recurring2, get_option('donateme_recurring')) . '&currency_code='
. str_replace($currency1, $currency2, get_option('donateme_currency')) . '" style="' . str_replace($color1, $color2, get_option('donateme_color')) . ' " >' . get_option('donateme_text') . '</a>'; 
?>

