<div class="wrap">
    <h2>PayPal Donation Plus</h2>

    <div style="background:#f1f0f0;border: 1px solid #D1B655;color: #3F2502;margin: 10px 0;padding: 5px 5px 5px 10px;text-shadow: 1px 1px #FFFFFF;">
        <p>
            See how to use <a href="https://raphaelheide.com/paypaldonationplus" target="_blank">PayPal Donation Plus</a>.
        </p>
        <p>
          <strong>  Add the shortcode [paypal-donation-plus] in your page to add the PaylPal Donation Plus</strong>
        </p>    
       
    </div>

    <h2 class="nav-tab-wrapper">
        <ul id="paypal-donation-plus-tabs">
            <li id="paypal-donation-plus-tab_1" class="nav-tab nav-tab-active"><?php _e('PayPal Donation Plus', 'paypal-donation-plus'); ?></li>
        </ul>
    </h2>

    <form method="post" action="options.php">
        <?php settings_fields($optionDBKey); ?>
        <div id="paypal-donation-plus-tabs-content">
            <div id="paypal-donation-plus-tab-content-1">
                <?php do_settings_sections($pageSlug); ?>
            </div>
        </div>
        <?php submit_button(); ?>
    </form>
