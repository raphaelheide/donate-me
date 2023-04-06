<?php 
$recurring1 = array('No', 'Yes',);
$recurring2 = array('no_recurring=1', 'recurring=1',);
$currency1 = array ('Australian Dollars', 'Brazilian Real', 'Canadian Dollars', 'Czech Koruna', 'Danish Krone', 'Euro', 'Hong Kong Dollar', 'Hungarian Forint', 'Israeli New Shekel', 'Yen', 'Malaysian Ringgit', 'Mexican Peso', 'Norwegian Krone', 'New Zealand Dollar', 'Philippine Peso', 'Polish Zloty', 'Pounds Sterling', 'South Africa Rand', 'Russian Ruble', 'Singapore Dollar', 'Swedish Krona', 'Swiss Franc', 'Taiwan New Dollar', 'Thai Baht', 'Turkish Lira', 'U.S. Dollars');
$currency2 = array ('AUD', 'BRL', 'CAD', 'CZK', 'DKK', 'EUR', 'HKD', 'HUF', 'ILS', 'JPY', 'MYR', 'MXN', 'NOK', 'NZD', 'PHP', 'PLN', 'GBP', 'ZAF', 'RUB', 'SGD', 'SEK', 'CHF', 'TWD', 'THB', 'TRY', 'USD');

echo '<div align="' .  get_option('donateme_position') . '">';
echo '<a href="https://www.paypal.com/donate/?business='
. get_option('donateme_api') . '&'
. str_replace($recurring1, $recurring2, get_option('donateme_recurring')) . '&currency_code='
. str_replace($currency1, $currency2, get_option('donateme_currency')) . '" style=" display: inline-block !important; position: relative; background-color:' .  get_option('donateme_color') . '; color:'  .  get_option('donateme_textcolor') . ';  border-radius:8px; border:1px; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none;" >' . get_option('donateme_text') . '</a>'; 
echo '</div>';
?>

