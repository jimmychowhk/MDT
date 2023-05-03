<?php
use Drupal\Core\Form\FormStateInterface;
/**
 * @file
 * Custom setting for TaraPro theme.
 */
function tarapro_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $ver = '10.1.1';
	$theme_update_info = file_get_contents("https://drupar.com/theme-update-info/tarapro.txt");
  $form['#attached']['library'][] = 'tarapro/theme-settings';
  $form['tarapro'] = [
    '#type'       => 'vertical_tabs',
    '#title'      => '<h3>' . t('TaraPro Theme Settings') . '</h3>',
    '#description' => t(''),
    '#default_tab' => 'general',
  ];
  /**
   * Main Tabs.
   */

  // Main Tabs -> settings.
  $form['general'] = [
    '#type'  => 'details',
    '#title' => t('General'),
    '#description' => t('<h4>Thank you for using TaraPro Theme</h4>TaraPro is a premium Drupal 8, 9, 10 theme by <a href="https://drupar.com/" target="_blank">Drupar.com</a>'),
    '#group' => 'tarapro',
  ];
  // Main Tabs -> color
  $form['colord'] = [
    '#type'  => 'details',
    '#title' => t('Theme Color'),
    '#group' => 'tarapro',
  ];
  // Main Tabs -> Social.
  $form['social'] = [
    '#type'  => 'details',
    '#title' => t('Social'),
    '#description' => t('Social icons settings. These icons appear in header and footer region.'),
    '#group' => 'tarapro',
  ];

  // Main Tabs -> Slider
  $form['slider'] = [
    '#type'  => 'details',
    '#title' => t('Homepage Slider'),
    '#description' => t('<h3>Manage Homepage Slider</h3>'),
    '#group' => 'tarapro',
  ];

  // Main Tabs -> Header.
  $form['header'] = [
    '#type'  => 'details',
    '#title' => t('Header'),
    '#group' => 'tarapro',
  ];

  // Main Tabs -> Sidebar.
  $form['sidebar'] = [
    '#type'  => 'details',
    '#title' => t('Sidebar'),
    '#group' => 'tarapro',
  ];

  // Main Tabs -> Content.
  $form['content'] = [
    '#type'  => 'details',
    '#title' => t('Content'),
    '#group' => 'tarapro',
  ];

  // Main Tabs -> Footer.
  $form['footer'] = [
    '#type'  => 'details',
    '#title' => t('Footer'),
    '#group' => 'tarapro',
  ];
  // Main Tabs ->Insert codes
  $form['insert_codes'] = [
    '#type'  => 'details',
    '#title' => t('Insert Codes'),
    '#group' => 'tarapro',
  ];
  // Main Tabs -> Licensing.
  $form['license'] = [
    '#type'  => 'details',
    '#title' => t('Theme License'),
    '#group' => 'tarapro',
  ];
  // Main Tabs -> Update.
  $form['update'] = [
    '#type'  => 'details',
    '#title' => t('Update'),
    '#description' => t('<h4>Check For Update</h4><a href="https://drupar.com/tarapro-documentation/check-update" target="_blank">How to update theme</a>'),
    '#group' => 'tarapro',
  ];

  // Main Tabs -> Support.
  $form['support'] = [
    '#type'  => 'details',
    '#title' => t('Support'),
    '#description' => t('For any support related to TaraPro theme, please <a href="https://drupar.com/node/add/ticket" target="_blank">open a support ticket</a>.'),
    '#group' => 'tarapro',
  ];
  // General tab -> Content
  $form['general']['general_version'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Current Theme Version'),
    '#description' => t("$ver"),
  ];

  $form['general']['general_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Info'),
    '#description' => t('<a href="https://drupar.com/theme/tarapro" target="_blank">Theme Homepage</a> || <a href="https://demo2.drupar.com/tarapro/" target="_blank">Theme Demo</a> || <a href="https://drupar.com/tarapro-documentation" target="_blank">Theme Documentation</a> || <a href="https://drupar.com/support" target="_blank">Theme Support</a>'),
  ];
  // Color tab -> Info.
  include_once 'inc/settings/color.php';

  // Social -> Social icons.
  $form['social']['social_icons_header'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons in Header'),
  ];
  $form['social']['social_icons_header']['social_icons_header_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show social icons in header'),
    '#default_value' => theme_get_setting('social_icons_header_option', 'tarapro'),
    '#description'   => t("Check this option to show social icons in header. Uncheck to hide."),
  ];
  $form['social']['social_icons_footer'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons in Footer'),
  ];
  $form['social']['social_icons_footer']['social_icons_footer_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show social icons in footer'),
    '#default_value' => theme_get_setting('social_icons_footer_option', 'tarapro'),
    '#description'   => t("Check this option to show social icons in footer. Uncheck to hide."),
  ];
  // Social -> Facebook url.
  $form['social']['facebook'] = [
    '#type'        => 'details',
    '#title'       => t("Facebook"),
  ];
  $form['social']['facebook']['facebook_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('Facebook Url'),
      '#description'   => t("Enter yours facebook profile or page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('facebook_url', 'tarapro'),
  ];

  // Social -> Twitter url.
  $form['social']['twitter'] = [
    '#type'        => 'details',
    '#title'       => t("Twitter"),
  ];
  $form['social']['twitter']['twitter_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('Twitter Url'),
      '#description'   => t("Enter yours twitter page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('twitter_url', 'tarapro'),
  ];

  // Social -> Instagram url.
  $form['social']['instagram'] = [
    '#type'        => 'details',
    '#title'       => t("Instagram"),
  ];
  $form['social']['instagram']['instagram_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('Instagram Url'),
      '#description'   => t("Enter yours instagram page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('instagram_url', 'tarapro'),
  ];

  // Social -> Linkedin url.
  $form['social']['linkedin'] = [
    '#type'        => 'details',
    '#title'       => t("Linkedin"),
  ];
  $form['social']['linkedin']['linkedin_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('Linkedin Url'),
      '#description'   => t("Enter yours linkedin page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('linkedin_url', 'tarapro'),
  ];

  // Social -> YouTube url.
  $form['social']['youtube'] = [
    '#type'        => 'details',
    '#title'       => t("YouTube"),
  ];
  $form['social']['youtube']['youtube_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('YouTube Url'),
      '#description'   => t("Enter yours youtube.com page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('youtube_url', 'tarapro'),
  ];

  // Vimeo.
  $form['social']['vimeo'] = [
    '#type'        => 'details',
    '#title'       => t("Vimeo"),
  ];

  $form['social']['vimeo']['vimeo_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('YouTube Url'),
    '#description'   => t("Enter yours vimeo.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('vimeo_url', 'tarapro'),
  ];

  // Social -> vk.com url.
  $form['social']['vk'] = [
    '#type'        => 'details',
    '#title'       => t("vk.com"),
  ];
  $form['social']['vk']['vk_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('vk.com'),
      '#description'   => t("Enter yours vk.com page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('vk_url', 'tarapro'),
  ];

  // Social -> whatsapp.
  $form['social']['whatsapp'] = [
    '#type'        => 'details',
    '#title'       => t("whatsapp"),
  ];
  $form['social']['whatsapp']['whatsapp_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('WhatsApp'),
      '#description'   => t("Enter yours whatsapp url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('whatsapp_url', 'tarapro'),
  ];

  // Social -> github.
  $form['social']['github'] = [
    '#type'        => 'details',
    '#title'       => t("Github"),
  ];
  $form['social']['github']['github_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('Github'),
      '#description'   => t("Enter yours github url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('github_url', 'tarapro'),
  ];

  // Social -> telegram.
  $form['social']['telegram'] = [
    '#type'        => 'details',
    '#title'       => t("Telegram"),
  ];
  $form['social']['telegram']['telegram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Telegram'),
    '#description'   => t("Enter yours telegram url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('telegram_url', 'tarapro'),
  ];

  // Social -> New Social Icons
  $form['social']['social_new_icon'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Add More Social Icons'),
  ];

  $form['social']['social_new_icon']['social_new_icon_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('New Social Icons Code'),
    '#default_value' => theme_get_setting('social_new_icon_code', 'tarapro'),
    '#description'   => t('Please refer to this <a href="https://drupar.com/tarapro-documentation/how-manage-header-and-footer-social-icons" target="_blank">documentation page</a> for social icons code tutorial.'),
  ];
  /**
   * Settings under slider tab.
   */

  // Slider -> show or hide slider on homepage.
  $form['slider']['slider_enable_option'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Enable Slider'),
  ];
  $form['slider']['slider_enable_option']['slider_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Slider on Homepage'),
    '#default_value' => theme_get_setting('slider_show', 'tarapro'),
    '#description'   => t("Check this option to show slider on homepage. Uncheck to hide."),
  ];

  // Slider -> Slider interval time.
  $form['slider']['time'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Slider Interval Time'),
  ];
  $form['slider']['time']['slider_time'] = [
    '#type'          => 'number',
    '#title'         => t('Autoplay Interval Time'),
    '#default_value' => theme_get_setting('slider_time', 'tarapro'),
    '#description'   => t('Default value is 10000, this means 10 seconds.'),
  ];

  // Slider -> Slider SlideIn effect.
  $form['slider']['Slider_animation'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Slider Animation'),
  ];
  $form['slider']['Slider_animation']['slider_animatein'] = [
    '#type'          => 'select',
    '#title'         => t('SlideIn Animation'),
    '#options' => array(
    	'bounceIn' => t('BounceIn'),
    	'fadeIn' => t('FadeIn'),
    	'flip' => t('Flip'),
    	'flipInX' => t('FlipInX'),
    	'flipInY' => t('FlipInY'),
    	'slideInDown' => t('SlideInDown'),
    	'slideInLeft' => t('SlideInLeft'),
    	'slideInRight' => t('SlideInRight'),
    	'slideInUp' => t('SlideInUp'),
    	'zoomIn' => t('ZoomIn'),),
    '#default_value' => theme_get_setting('slider_animatein', 'tarapro'),
    '#description'   => t('Default value is <strong>FlipInX</strong>.'),
  ];

  $form['slider']['Slider_animation']['slider_animateout'] = [
    '#type'          => 'select',
    '#title'         => t('SlideOut Animation'),
    '#options' => array(
    	'bounceOut' => t('BounceOut'),
    	'fadeOut' => t('FadeOut'),
    	'flipOutX' => t('FlipOutX'),
    	'flipOutY' => t('FlipOutY'),
    	'slideOutDown' => t('SlideOutDown'),
    	'slideOutLeft' => t('SlideOutLeft'),
    	'slideOutRight' => t('SlideOutRight'),
    	'slideOutUp' => t('SlideOutUp'),
    	'zoomOut' => t('ZoomOut'),),
    '#default_value' => theme_get_setting('slider_animateout', 'tarapro'),
    '#description'   => t('Default value is <strong>SlideOutDown</strong>.'),
  ];

  // Slider -> Slider dots option.
  $form['slider']['slider_dots_field'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Slider Dots Navigation'),
  ];
  $form['slider']['slider_dots_field']['slider_dots'] = [
    '#type'          => 'select',
    '#title'         => t('Show or Hide Slider Dots Navigation'),
    '#options' => array(
      'true' => t('Show'),
      'false' => t('Hide'),),
    '#default_value' => theme_get_setting('slider_dots', 'tarapro'),
    '#description'   => t('Show or hide slider dots navigation that appears at the bottom of slider.'),
  ];

  /* Slider -> Layered slider */
  $form['slider']['slider_layered_tab']['slider_images_section'] = [
    '#type'        => 'fieldset',
    '#title'  => t('<p>Upload Slider Images</p>'),
  ];
  $form['slider']['slider_layered_tab']['slider_images_section']['slider_images'] = [
    '#type'          => 'managed_file',
    '#multiple' => TRUE,
    '#upload_location' => 'public://',
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#default_value'  => theme_get_setting('slider_images', 'tarapro'),
    '#description'   => t('<p><hr /></p><p><ul><li>You can upload multiple images.</li><li>Recommended size is 1920px X 1080px</li><li>Right click the image to copy the image path and use it in the slider code below.</li></ul></p>'),
  ];
  // Slider -> Slider code.
  $form['slider']['slider_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Slider Code'),
    '#default_value' => theme_get_setting('slider_code', 'tarapro'),
    '#description'   => t('Please refer to this <a href="https://drupar.com/tarapro-documentation/how-manage-homepage-slider" target="_blank">tutorial page</a> for slider code tutorial.<br />Leave slider code box empty to show default slider.'),
  ];

  /**
   * Settings under header tab.
   */

  // Header -> sticky header.
  $form['header']['sticky_header'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Sticky Header'),
  ];
  $form['header']['sticky_header']['sticky_header_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Sticky Header'),
    '#default_value' => theme_get_setting('sticky_header_option', 'tarapro'),
    '#description'   => t("Check this option to enable sticky header. Uncheck to disable."),
  ];

  /**
   * Content
   */
  $form['content']['content_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  // Settings under content tab -> Homepage.
  $form['content_tab']['home_content'] = [
    '#type'        => 'details',
    '#title'       => t('Homepage Content'),
    '#description'   => t('Please follow this tutorial to add content on homepage. <a href="https://drupar.com/tarapro-documentation/how-add-content-homepage" target="_blank">How to add content on homepage</a>'),
    '#group' => 'content_tab',
  ];

  // Content -> Page Loading.
  $form['content_tab']['preloader'] = [
    '#type'        => 'details',
    '#title'       => t('Pre Page Loader'),
    '#group' => 'content_tab',
  ];
  $form['content_tab']['preloader']['preloader_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show a loading icon before page loads.'),
    '#default_value' => theme_get_setting('preloader_option', 'tarapro'),
    '#description'   => t("Check this option to show a cool animated image until your website is loading. Uncheck to disable this feature."),
  ];

  // Content -> Google Fonts.
  $form['content_tab']['google_font_section'] = [
    '#type'          => 'details',
    '#title'         => t('Google Fonts'),
    '#group' => 'content_tab',
  ];
  $form['content_tab']['google_font_section']['google_font'] = [
    '#type'          => 'select',
    '#title'         => t('Select Google Fonts Location'),
    '#options' => array(
    	'local' => t('Local Self Hosted'),
      'googlecdn' => t('Google CDN Server')
    ),
    '#default_value' => theme_get_setting('google_font', 'tarapro'),
    '#description'   => t('TaraPro theme uses following Google fonts: Open Sans, Roboto and Poppins. You can serve these fonts locally or from Google server.'),
  ];
  // content -> Font icons
  $form['content_tab']['icon_tab'] = [
    '#type'        => 'details',
    '#title'       => t('Font Icon'),
    '#description' => t(''),
    '#group' => 'content_tab',
  ];
  // Settings under content tab -> FontAwesome icons.
  $form['content_tab']['icon_tab']['font_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('FontAwesome 4 Font Icons'),
    '#description'   => t('TaraPro theme has included FontAwesome v4.7 font icons. You can create 600+ icons with FontAwesome.<br />Please visit this tutorial page for details. <a href="https://drupar.com/tarapro-documentation/how-use-fontawesome-font-icons" target="_blank">How To Use FontAwesome Icons</a>.'),
  ];
  // Content -> FontAwesome 5
  $form['content_tab']['icon_tab']['fontawesome5'] = [
    '#type'        => 'fieldset',
    '#title'       => t('FontAwesome 5 Font Icons'),
    '#description'   => t(''),
  ];
  $form['content_tab']['icon_tab']['fontawesome5']['fontawesome_five'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable FontAwesome 5 Font Icons'),
    '#default_value' => theme_get_setting('fontawesome_five', 'tarapro'),
    '#description'   => t("<p>Check this option to enable FontAwesome 5 (v5.15.4) font icons. Uncheck to disable.</p><p>Please use either FontAwesome 5 or FontAwesome 6</p>"),
  ];
  // Content -> FontAwesome 6
  $form['content_tab']['icon_tab']['fontawesome6'] = [
    '#type'        => 'fieldset',
    '#title'       => t('FontAwesome 6 Font Icons'),
    '#description'   => t(''),
  ];
  $form['content_tab']['icon_tab']['fontawesome6']['fontawesome_six'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable FontAwesome 6 Font Icons'),
    '#default_value' => theme_get_setting('fontawesome_six', 'tarapro'),
    '#description'   => t("<p>Check this option to enable FontAwesome 6 (v6.1.2) font icons. Uncheck to disable.</p><p>Please use either FontAwesome 5 or FontAwesome 6</p>"),
  ];

  // content -> Font icons -> Bootstrap Font Icons
  $form['content_tab']['icon_tab']['bootstrap_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Bootstrap Font Icons'),
  ];
  $form['content_tab']['icon_tab']['bootstrap_icons']['bootstrapicons'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Bootstrap Icons'),
    '#default_value' => theme_get_setting('bootstrapicons', 'tarapro'),
    '#description'   => t('Check this option to enable Bootstrap Font Icons. Read more about <a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap Icons</a>'),
  ];

  // Content -> iconmonstr font icons.
  $form['content_tab']['icon_tab']['font_icons_iconmonstr'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Iconmonstr Font Icons'),
    '#description'   => t('<hr /><br />TaraPro theme has included iconmonstr font icons v1.3.0. You can create 300+ icons with iconmonstr font icons.<br />Please visit this tutorial page for details. <a href="https://drupar.com/custom-shortcodes-set-two/iconmonstr-font-icons" target="_blank">How To Use Iconmonstr Icons</a>.<br /><strong>Please Note:</strong> This will increase page load by about 50 KB.'),
  ];
  $form['content_tab']['icon_tab']['font_icons_iconmonstr']['iconmonstr'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Iconmonstr Font Icons'),
    '#default_value' => theme_get_setting('iconmonstr', 'tarapro'),
    '#description'   => t("Check this option to enable Iconmonstr Font Icons. Uncheck to disable."),
  ];
    // Content -> Material font icons.
  $form['content_tab']['icon_tab']['material_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Google Material Font Icons'),
    '#description'   => t('TaraPro theme has included Google material font icons. You can create any Google material icon with MiliPro theme.<br />Please visit this tutorial page for details. <a href="https://drupar.com/custom-shortcodes-set-two/google-material-font-icons" target="_blank">How To Use Google Material Font Icons</a>.'),
  ];

  $form['content_tab']['icon_tab']['material_icons']['material_icon'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Google Material Font Icons'),
    '#default_value' => theme_get_setting('material_icon', 'tarapro'),
    '#description'   => t("Check this option to enable Google Material Font Icons. Uncheck to disable."),
  ];

  // Content tab -> Node.
  $form['content_tab']['node'] = [
    '#type'        => 'details',
    '#title'       => t('Node'),
    '#group' => 'content_tab',
  ];

  // Content -> Node -> Node author picture.
  $form['content_tab']['node']['node_author_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Author Picture'),
    '#default_value' => theme_get_setting('node_author_pic', 'tarapro'),
    '#description'   => t("Check this option to show node author picture in submitted details. Uncheck to hide."),
  ];

  // Content -> Node -> Show tags in node submitted.
  $form['content_tab']['node']['node_tags'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Tags'),
    '#default_value' => theme_get_setting('node_tags', 'tarapro'),
    '#description'   => t("Check this option to show node tags (if any) in submitted details. Uncheck to hide."),
  ];

  // Content -> Node -> Node sharing option.
  // Content tab -> Node.
  $form['content_tab']['node_share'] = [
    '#type'        => 'details',
    '#title'       => t('Node Sharing'),
    '#group' => 'content_tab',
  ];

  $form['content_tab']['node_share']['node_share_page'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Page Content Type'),
    '#default_value' => theme_get_setting('node_share_page', 'tarapro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Basic page</strong> content type nodes. Uncheck to hide."),
  ];

  $form['content_tab']['node_share']['node_share_article'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Article Content Type'),
    '#default_value' => theme_get_setting('node_share_article', 'tarapro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Article</strong> content type nodes. Uncheck to hide."),
  ];

  $form['content_tab']['node_share']['node_share_other'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Other Content Types'),
    '#default_value' => theme_get_setting('node_share_other', 'tarapro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on other content type nodes. Uncheck to hide."),
  ];

  $form['content_tab']['node_share']['node_share_front'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Homepage'),
    '#default_value' => theme_get_setting('node_share_front', 'tarapro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Homepage</strong>. Uncheck to hide."),
  ];

  // Content -> Node -> show user picture in comment.
  $form['content_tab']['comment'] = [
    '#type'        => 'details',
    '#title'       => t('Comment'),
    '#group' => 'content_tab',
  ];
  $form['content_tab']['comment']['comment_user_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('User Picture in comments'),
    '#default_value' => theme_get_setting('comment_user_pic', 'tarapro'),
    '#description'   => t("Check this option to show user picture in comment. Uncheck to hide."),
  ];
  // Content -> Node -> animated content.
  $form['content_tab']['icon_tab']['animated'] = [
    '#type'        => 'details',
    '#title'       => t('Animated Content'),
    '#description'   => t('Please visit this tutorial page for details. <a href="https://drupar.com/tarapro-documentation/how-create-animated-content" target="_blank">How to create animated content</a>'),
    '#group' => 'content_tab',
  ];
  // content -> shortcodes
  $form['content_tab']['shortcode'] = [
    '#type'        => 'details',
    '#title'       => t('Shortcodes'),
    '#description' => t('<p>TaraPro theme has some custom shortcodes. You can create some styling content using these shortcodes.</p><p>Please visit this tutorial page for details. <a href="https://drupar.com/tarapro-documentation/tarapro-shortcodes" target="_blank">Shortcodes in TaraPro theme</a>.</p>'),
    '#group' => 'content_tab',
  ];
  /**
   * Settings under sidebar tab.
   */
  // Sidebar -> Frontpage sidebar
  $form['sidebar']['front_sidebars'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Homepage Sidebar'),
  ];
  $form['sidebar']['front_sidebars']['front_sidebar'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Sidebars On Homepage'),
    '#default_value' => theme_get_setting('front_sidebar', 'tarapro'),
    '#description'   => t('Check this option to enable left and right sidebar on homepage.'),
  ];
  // Sidebar -> Animated sidebar.
  $form['sidebar']['animated_sidebar'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Sliding Sidebar'),
  ];
  $form['sidebar']['animated_sidebar']['animated_sidebar_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable animated sidebar'),
    '#default_value' => theme_get_setting('animated_sidebar_option', 'tarapro'),
    '#description'   => t("Check this option to enable animated sliding sidebar. Uncheck to hide.<br />Please refer to this tutorial for details. <a href='https://drupar.com/tarapro-documentation/how-create-animated-sidebar' target='_blank'>How To Create Animated Sidebar</a>"),
  ];

  /**
   * Settings under footer tab.
   */
  // Footer -> Sticky footer
  $form['footer']['footer_fixed'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Fixed Footer'),
  ];
  $form['footer']['footer_fixed']['sticky_footer'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Check this option for fixed footer'),
    '#default_value' => theme_get_setting('sticky_footer', 'tarapro'),
    '#description'   => t("Fixed footer is always diabled in mobile devices."),
  ];
  // Footer -> scroll to top.
  $form['footer']['scrolltotop'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Scroll To Top'),
  ];
  $form['footer']['scrolltotop']['scrolltotop_on'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Check this option to enable scroll to top feature.'),
    '#default_value' => theme_get_setting('scrolltotop_on', 'tarapro'),
    '#description'   => t("Check this option to enable scroll to top feature. Uncheck to disabke and hide scroll to top icon."),
  ];

  // Footer -> copyright
  $form['footer']['copyright'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Website Copyright Text'),
  ];
  $form['footer']['copyright']['copyright_text'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show website copyright text in footer.'),
    '#default_value' => theme_get_setting('copyright_text', 'tarapro'),
    '#description'   => t("Check this option to show website copyright text in footer. Uncheck to hide."),
  ];

  // Footer -> copyright -> custom copyright text
  $form['footer']['copyright']['copyright_text_custom'] = [
    '#type'          => 'textarea',
    '#title'         => t('Custom Copyright Text'),
    '#default_value' => theme_get_setting('copyright_text_custom', 'tarapro'),
    '#description'   => t("Enter custom copyright text. Leave it blank to show default copyright text."),
  ];

  // Footer -> Cookie.
  $form['footer']['cookie'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Cookie Consent message'),
  ];
  $form['footer']['cookie']['cookie_message'] = [
    '#type'          => 'checkbox',
    '#title'       => t('Show Cookie Consent Popup Message'),
    '#default_value' => theme_get_setting('cookie_message', 'tarapro'),
    '#description'   => t('Required to place a Cookie Consent message on your site, as per the EU cookie law? Make your website EU Cookie Law Compliant.<br />According to EU cookies law, websites need to get consent from visitors to store or retrieve cookies.'),
  ];

  // Footer -> Cookie -> custom cookie message.
  $form['footer']['cookie']['cookie_message_custom'] = [
    '#type'          => 'textarea',
    '#title'         => t('Custom Cookie Consent Message'),
    '#default_value' => theme_get_setting('cookie_message_custom', 'tarapro'),
    '#description'   => t("Enter Cookie Consent Message. Leave it blank to show default message text."),
  ];
  /**
   * Insert Codes
   */
  $form['insert_codes']['insert_codes_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  // Insert Codes -> Head
  $form['insert_codes']['head'] = [
    '#type'        => 'details',
    '#title'       => t('Head'),
    '#description' => t('<h3>Insert Codes Before &lt;/HEAD&gt;</h3><hr />'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> Body
  $form['insert_codes']['body'] = [
    '#type'        => 'details',
    '#title'       => t('Body'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> CSS
  $form['insert_codes']['css'] = [
    '#type'        => 'details',
    '#title'       => t('CSS Codes'),
    '#group'       => 'insert_codes_tab',
  ];
  // Insert Codes -> Head -> Head codes
  $form['insert_codes']['head']['insert_head'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes in &lt;head&gt; section'),
    '#default_value' => theme_get_setting('insert_head', 'tarapro'),
    '#description'   => t("Check this option to enable custom codes in &lt;head&gt; section. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['head']['head_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('&lt;head&gt; Codes'),
    '#default_value' => theme_get_setting('head_code', 'tarapro'),
    '#description'   => t("Please enter your custom codes for &lt;head&gt; section. These codes will be inserted just before <strong>&lt;/head&gt;</strong>."),
  ];
  // Insert Codes -> Body -> Body start codes
  $form['insert_codes']['body']['insert_body_start_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code after &lt;BODY&gt; tag'),
  ];
  $form['insert_codes']['body']['insert_body_start_section']['insert_body_start'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes after &lt;body&gt; tag'),
    '#default_value' => theme_get_setting('insert_body_start', 'tarapro'),
    '#description'   => t("Check this option to enable custom codes after &lt;body&gt; tag. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['body']['insert_body_start_section']['body_start_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Codes'),
    '#default_value' => theme_get_setting('body_start_code', 'tarapro'),
    '#description'   => t("Please enter your custom codes after &lt;body&gt; tag. These codes will be inserted just after <strong>&lt;body&gt;</strong> tag."),
  ];
  // Insert Codes -> Body -> Body end codes
  $form['insert_codes']['body']['insert_body_end_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code before &lt;/BODY&gt; tag'),
  ];
  $form['insert_codes']['body']['insert_body_end_section']['insert_body_end'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes before &lt;/body&gt; tag.'),
    '#default_value' => theme_get_setting('insert_body_end', 'tarapro'),
    '#description'   => t("Check this option to enable custom codes before &lt;/body&gt; tag. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['body']['insert_body_end_section']['body_end_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Codes'),
    '#default_value' => theme_get_setting('body_end_code', 'tarapro'),
    '#description'   => t("Please enter your custom codes before &lt;/body&gt; tag. These codes will be inserted just before <strong>&lt;/body&gt;</strong>."),
  ];
  // Insert Codes -> css
  $form['insert_codes']['css']['css_custom'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Addtional CSS'),
  ];
  $form['insert_codes']['css']['css_custom']['css_extra'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Addtional CSS'),
    '#default_value' => theme_get_setting('css_extra', 'tarapro'),
    '#description'   => t("Check this option to enable additional styling / css. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['css']['css_custom']['css_code'] = [
    '#type'          => 'textarea',
		'#rows'					 => 15,
    '#title'         => t('Addtional CSS Codes'),
    '#default_value' => theme_get_setting('css_code', 'tarapro'),
    '#description'   => t('Add your own CSS codes here to customize the appearance of your site.<br />Please refer to this tutorial for detail: <a href="https://drupar.com/tarapro-documentation/custom-css" target="_blank">Custom CSS</a>'),
  ];

  /**
   * Settings under License tab.
   */
  $form['license']['info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('License Type'),
    '#description' => t('<p>Your theme license is: <strong>Single Domain License</strong></p>
    <p>You are allowed to use this theme on a single website.</p>
    <hr /><br /><a href="https://drupar.com/upgrade/tarapro" target="_blank">Upgrade to unlimited domain license</a>. Upgrade price is $30 only (one time).'),
  ];
  /**
   * Settings under update tab.
   */
  $form['update']['update_version'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Current Theme Version'),
    '#description' => t("$ver"),
  ];
  $form['update']['update_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Latest TaraPro Version'),
    '#description' => t("<pre>$theme_update_info</pre>"),
  ];
  /**
   * Settings under support tab.
   */
  $form['support']['info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Thank you for using TaraPro Theme!'),
    '#description' => t('<a href="https://drupar.com/tarapro-documentation" target="_blank">Theme Documentation</a> || <a href="https://drupar.com/tarapro-documentation/theme-support" target="_blank">Theme Support</a>'),
  ];

// End form.
}
