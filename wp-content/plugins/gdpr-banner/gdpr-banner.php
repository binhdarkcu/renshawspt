<?php
/*
Plugin Name: GDPR Banner
Description: Adds a banner to your website to assist with GDPR compliance, featuring links to privacy policy and T&Cs, and allows users to disable Google Analytics cookies.
Version: 1.1.0.5
Author: Worcester Web Studio
Author URI: https://www.worcesterwebstudio.com/
*/

function gdpr_menu()
{
  add_menu_page('GDPR Banner', 'GDPR Banner', 'manage_options', 'gdpr_banner', 'gdpr_banner_options');
}
add_action('admin_menu', 'gdpr_menu');

function gdpr_banner_options()
{
  if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
  }
  if (isset($_POST['banner_text'])
    && isset($_POST['privacy_policy_page_id'])
    && isset($_POST['terms_and_conditions_page_id'])) {
    check_admin_referer('gdpr-banner-update-settings');
    update_option('gdpr_banner_banner_text', sanitize_text_field($_POST['banner_text']));
    update_option('gdpr_banner_tac_text', sanitize_text_field($_POST['tac_text']));
    update_option('gdpr_banner_analytics_id', sanitize_text_field($_POST['analytics_id']));
    update_option('gdpr_banner_pp_text', sanitize_text_field($_POST['pp_text']));
    update_option('gdpr_banner_privacy_policy_page_id',  intval($_POST['privacy_policy_page_id']));
    update_option('gdpr_banner_terms_and_conditions_page_id', intval($_POST['terms_and_conditions_page_id']));
?>
    <div class="updated"><p><strong><?php _e('Settings saved.', 'role_signup'); ?></strong></p></div>
<?php } ?>
    <h1>GDPR Banner Options</h1>

    <form method="post" action="">
    <p></p>
    <table class="widefat fixed" cellspacing="0">
      <tr><td>
    <h2>Select Your Policy Pages</h2>
    <p>Use the drop-down menus below to select your Privacy Policy and Terms & Conditions pages respectively. These will then automatically be linked to from the overlay banner.</p>
    </td></tr>
      <tr>
      <th>Privacy Policy Page</th>
      <td>
      <?php wp_dropdown_pages(array(
        'selected' => intval(get_option('gdpr_banner_privacy_policy_page_id', 0)),
        'name' => 'privacy_policy_page_id'
      )); ?>
      </td>
    </tr>
    <tr><th>Terms &amp; Conditions Page</th>
      <td>
      <?php wp_dropdown_pages(array(
        'selected' => intval(get_option('gdpr_banner_terms_and_conditions_page_id', 0)),
        'name' => 'terms_and_conditions_page_id'
        )); ?>
      </td>
      </tr>
      <tr><td>
    <h2>Allow Users to Disable Google Analytics Cookies</h2>
    <p>Google Analytics cookies are classed as non-essential cookies, and you can give your users the option to disable these via your Privacy Policy page (or any other page for that matter). To do this, input your Google Analytics tracking ID (it should look like UA-XXXXXXXX-XX) below. You can then add the [no-more-cookies] shortcode to any page you like (just copy and paste it into the WordPress page editor). </p>
    </td></tr>
      <tr><th>Google Analytics ID</th><td><input type="text" name="analytics_id" value="<?php echo get_option('gdpr_banner_analytics_id', ''); ?>"></td></tr>
    </table>

    

    <h2>Advanced</h2>
    <p>You can change the text used in the banner here:</p>
    <table>
      <tr><th>Banner Text</th><td><input class="wwsLong" type="text" name="banner_text" value="<?php echo get_option('gdpr_banner_banner_text', 'By using this website you agree to accept our '); ?>"></td></tr>
      <tr><th>'Privacy Policy' Text</th><td><input type="text" name="pp_text" value="<?php echo get_option('gdpr_banner_pp_text', 'Privacy Policy'); ?>"></td></tr>
      <tr><th>'Terms &amp; Conditions' Text</th><td><input type="text" name="tac_text" value="<?php echo get_option('gdpr_banner_tac_text', 'Terms & Conditions'); ?>"></td></tr>
    </table>
    <?php wp_nonce_field('gdpr-banner-update-settings'); ?>
    <?php submit_button(); ?>
  </form>

<?php
}

add_action('init', 'register_script_and_css');

function register_script_and_css() {
  wp_register_script('gdpr_js', plugins_url('/js/gdpr-banner.js', __FILE__), array('jquery'), '1.0.0');
  wp_enqueue_script('gdpr_js');
  wp_register_style('gdpr_css', plugins_url('/css/gdpr-banner.css', __FILE__), false, '1.0.0', 'all');
  wp_enqueue_style('gdpr_css');
}

add_action('wp_footer', 'gdpr_banner_banner');

function gdpr_banner_banner(){
  echo '
  <div id="gdpr_banner">
  <p>' . esc_html(get_option('gdpr_banner_banner_text', 'By using this website you agree to accept our')) . '<a href="'.get_permalink(intval(get_option('gdpr_banner_privacy_policy_page_id', ''))).'"> ' . esc_html(get_option('gdpr_banner_pp_text', 'Privacy Policy')) . '</a> and <a href="'.get_permalink(intval(get_option('gdpr_banner_terms_and_conditions_page_id', ''))).'">' . esc_html(get_option('gdpr_banner_tac_text', 'Terms & Conditions')) . '</a> <button id="gdpr_accept">Accept</button></p></div>';
}

add_action('wp_footer', 'cookie_opt_out', 1);
function cookie_opt_out(){
  ?><script>
  jQuery(function() {
  var gaProperty = '<?php echo get_option('gdpr_banner_analytics_id', ''); ?>';
  var disableStr = 'ga-disable-' + gaProperty;
  if (document.cookie.indexOf(disableStr + '=true') > -1) {
    window[disableStr] = true;
    jQuery('#analytics_opt_out_link').text("You have opted out of Google Analytics tracking");
  }
  });
  function analytics_opt_out() {
  var gaProperty = '<?php echo get_option('gdpr_banner_analytics_id', ''); ?>';
  var disableStr = 'ga-disable-' + gaProperty;
    document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
    window[disableStr] = true;
  jQuery('#analytics_opt_out_link').text("You have opted out of Google Analytics tracking");
  }
  </script><?php
};
  function wws_disable_cookies_shortcode() {
  return '<a id="analytics_opt_out_link" href="javascript:analytics_opt_out()">Click here to disable Google Analytics tracking cookies</a>';
}
add_shortcode('no-more-cookies', 'wws_disable_cookies_shortcode');
?>
