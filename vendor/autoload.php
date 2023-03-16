<?php
// Register the menu.
add_action( "admin_menu", "donateme_plugin_menu_func" );
function donateme_plugin_menu_func() {
   add_submenu_page( "options-general.php",         // Which menu parent
				  "donate me",                       // Page title
				  "🐷 Donate Me",                      // Menu title
				  "manage_options",                  // Minimum capability (manage_options is an easy way to target administrators)
				  "donateme",                    // Menu slug
				  "donateme_plugin_options"     // Callback that prints the markup
			   );
}

// Print the markup for the page
function donateme_plugin_options() {
   if ( !current_user_can( "manage_options" ) )  {
	  wp_die( __( "You do not have sufficient permissions to access this page." ) );
   }
   echo ' <br> <h1> 🐷 Donate Me </h1> ';
   ?>
   
   <div>
        <p>
            See how to use <a href="https://raphaelheide.com/donateme" target="_blank">Donate Me</a>:<br>
            - Check how to setup your PayPal Account for Donate Me Plugin.<br>
            - Email or Merchant ID.<br>
            - How to install in your website.<br>
        </p>
        <p>
          <strong>  Add the shortcode [donateme] in your page or any place of your website.</strong>
        </p>    
       
    </div>
   
   
   <form method="post" action="<?php echo admin_url( 'admin-post.php'); ?>">
      <input type="hidden" name="action" value="update_donateme_settings" />
      <p>
      <?php echo '<br><h3> Your PayPal Email or ID Merchant: </h3>'; ?>
      <input class="" type="text" name="donateme_api" value="<?php echo get_option('donateme_api') ?>" />
      <?php echo '<br>Where to find your ID Merchant? Read the <a href="https://raphaelheide.com/donateme" target="_new">support here</a>. <br>'; ?>
      <?php echo '<br><h3>Currency: </h3>'; ?>
      <select name="donateme_currency" id="donateme_currency">
         <option value="<?php echo get_option('donateme_currency') ?>"><?php echo get_option('donateme_currency') ?></option>
          <option value="Australian Dollars">Australian Dollars</option>
          <option value="Brazilian Real">Brazilian Real</option>
          <option value="Canadian Dollars">Canadian Dollars</option>
          <option value="Czech Koruna">Czech Koruna</option>
          <option value="Danish Krone">Danish Krone</option>
          <option value="Euro">Euro</option>
          <option value="Hong Kong Dollar">Hong Kong Dollar</option>
          <option value="Hungarian Forint">Hungarian Forint</option>
          <option value="Israeli New Shekel">Israeli New Shekel</option>
          <option value="Yen">Yen</option>
          <option value="Malaysian Ringgit">Malaysian Ringgit</option>
          <option value="Mexican Peso">Mexican Peso</option>
          <option value="Norwegian Krone">Norwegian Krone</option>
          <option value="New Zealand Dollar">New Zealand Dollar</option>
          <option value="Philippine Peso">Philippine Peso</option>
          <option value="Polish Zloty">Polish Zloty</option>
          <option value="Pounds Sterling">Pounds Sterling</option>
          <option value="South Africa Rand">South Africa Rand</option>
          <option value="Russian Ruble">Russian Ruble</option>
          <option value="Singapore Dollar">Singapore Dollar</option>
          <option value="Swedish Krona">Swedish Krona</option>
          <option value="Swiss Franc">Swiss Franc</option>
          <option value="Taiwan New Dollar">Taiwan New Dollar</option>
          <option value="Thai Baht">Thai Baht</option>
          <option value="Turkish Lira">Turkish Lira</option>
          <option value="U.S. Dollars">U.S. Dollars</option>
      </select>
    
      <?php echo '<br><br><h3>Recurring Payment:</h3> '; ?>
      <select name="donateme_recurring" id="donateme_recurring">
         <option value="<?php echo get_option('donateme_recurring') ?>"><?php echo get_option('donateme_recurring') ?></option>
         <option value="Yes">Yes</option>
         <option value="No">No</option>
      </select>  
       
      <?php echo '<br><br><h3> Button Text: </h3>'; ?>
      <input class="" type="text" name="donateme_text" value="<?php echo get_option('donateme_text') ?>" />
      </p>
      
      <?php echo '<br><h3>Button Style: </h3>'; ?>      
      <select name="donateme_color" id="donateme_color">
         <option value="<?php echo get_option('donateme_color') ?>"><?php echo get_option('donateme_color') ?></option>
         <option value="Red">Red</option>
         <option value="Yellow">Yellow</option>
         <option value="Blue">Blue</option>
         <option value="Green">Green</option>
         <option value="Purple">Purple</option>
         <option value="Orange">Orange</option>
         <option value="Black">Black</option>
         <option value="Gray">Gray</option>
         <option value="Default site color">Default site color</option>
      </select> 
      
      <?php echo '<br>  <br>'; ?>
      <input class="button button-primary" type="submit" value="<?php _e("Save", "donateme_api"); ?>" />
   </form>
   <?php
   
   // Arrays
   $color1 = array('Red', 'Yellow', 'Blue', 'Green', 'Purple', 'Orange', 'Black', 'Gray', 'Default site color');
   $color2 = array('box-shadow:inset 0px 39px 0px -24px #e67a73; background-color:#e4685d; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #b23e35;', 
   'box-shadow:inset 0px 39px 0px -24px #ecf06e; background-color:#ebeb3d; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#331f1f; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #9db034;',
   'box-shadow:inset 0px 39px 0px -24px #7387e6; background-color:#4563cb; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #353db2;',
   'box-shadow:inset 0px 39px 0px -24px #44b162; background-color:#289c3e; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #35b261;',
   'box-shadow:inset 0px 39px 0px -24px #742f9c; background-color:#8d38b9; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #7835b2;',
   'box-shadow:inset 0px 39px 0px -24px #d24a01; background-color:#d24a00; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #b28135;',
   'box-shadow:inset 0px 39px 0px -24px #000000; background-color:#1b1b1b; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #20201f;',
   'box-shadow:inset 0px 39px 0px -24px #5f5d5d; background-color:#5f5d5a; border-radius:8px; border:1px solid #ffffff; display:inline-block; cursor:pointer; color:#ffffff; font-family:Arial; font-size:15px; padding:9px 27px; text-decoration:none; text-shadow:0px 1px 0px #565653;',
   '" class="button primary'
   );
   
   //Button result
   echo '<br><br><h3>Donate Me button<br></h3>';
   echo '<a style="' . str_replace($color1, $color2, get_option('donateme_color')) . ' " >' . get_option('donateme_text') . '</a>'; 
   echo '<br><br>Add the shortcode [donateme] in any page.';
}


add_action( 'admin_post_update_donateme_settings', 'donateme_handle_save' );

//functions
function donateme_handle_save() {
   // Get the options that were sent
   $donateme_api = (!empty($_POST["donateme_api"])) ? $_POST["donateme_api"] : NULL;
   $donateme_currency = (!empty($_POST["donateme_currency"])) ? $_POST["donateme_currency"] : NULL;
   $donateme_recurring = (!empty($_POST["donateme_recurring"])) ? $_POST["donateme_recurring"] : NULL;
   $donateme_text = (!empty($_POST["donateme_text"])) ? $_POST["donateme_text"] : NULL;
   $donateme_color = (!empty($_POST["donateme_color"])) ? $_POST["donateme_color"] : NULL;

   // Validation would go here
   // Update the values
   update_option( "donateme_api", $donateme_api, TRUE );
   update_option( "donateme_currency", $donateme_currency, TRUE );
   update_option( "donateme_recurring", $donateme_recurring, TRUE );
   update_option( "donateme_text", $donateme_text, TRUE );
   update_option( "donateme_color", $donateme_color, TRUE );

   // Redirect back to settings page
   $redirect_url = get_bloginfo("url") . "/wp-admin/options-general.php?page=donateme&status=ok";
   header("Location: ".$redirect_url);
   exit;
}

if ( isset($_GET['status']) && $_GET['status']=='ok') {

   function sample_admin_notice__success() {
       ?>
       <div class="notice notice-success is-dismissible">
           <p><?php _e( 'Done!<br> Look your settings and your button below.', 'sample-text-domain' ); ?></p>
       </div>
       <?php
   }
   add_action( 'admin_notices', 'sample_admin_notice__success' );
}

?>
