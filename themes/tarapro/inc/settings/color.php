<?php
/**
 * Color Settings
 */
$form['colord']['color_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Color Scheme Settings'),
    '#description'   => t('These settings adjust the look and feel of the TaraPro theme. Changing the color below will change the color of TaraPro theme.'),
  ];
  $form['colord']['color_scheme_option'] = [
    '#type' => 'fieldset',
    '#title' => t('Color Scheme'),
  ];
  $form['colord']['color_scheme_option']['color_scheme'] = [
    '#type'          => 'select',
    '#title' => t('Select Color Scheme'),
    '#options' => array(
      'color_default' => t('Default'),
      'color_custom' => t('Custom'),
      ),
    '#default_value' => theme_get_setting('color_scheme'),
    '#description'   => t('Default will set the theme to default color scheme. Custom will set the theme color as set below.')
  ];
  $form['colord']['color_custom'] = [
    '#type' => 'fieldset',
    '#title' => t('Custom Color Scheme'),
    '#description'   => t('Customize color of the theme. This will work if you have selected <strong>Custom</strong> color scheme above.')
  ];
  $form['colord']['color_custom']['bg_body'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('bg_body'),
    '#title'       => t('Body Background Color'),
    '#default_value' => theme_get_setting('bg_body'),
    '#description' => t('<p>Default value is <strong>#F9F6F3</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['bg_header'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('bg_header'),
    '#title'       => t('Header Background Color'),
    '#default_value' => theme_get_setting('bg_header'),
    '#description' => t('<p>Default value is <strong>#ffffff</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_primary'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_primary'),
    '#title'       => t('Primary Color'),
    '#default_value' => theme_get_setting('color_primary'),
    '#description' => t('<p>Default value is <strong>#D6620E</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_primary_light'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_primary_light'),
    '#title'       => t('Primary Color Light'),
    '#default_value' => theme_get_setting('color_primary_light'),
    '#description' => t('<p>Default value is <strong>#F2E8DD</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_secondary'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_secondary'),
    '#title'       => t('Secondary Color'),
    '#default_value' => theme_get_setting('color_secondary'),
    '#description' => t('<p>Default value is <strong>#A7BD43</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_dark'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_dark'),
    '#title'       => t('Dark Color'),
    '#default_value' => theme_get_setting('color_dark'),
    '#description' => t('<p>Default value is <strong>#323D47</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_light'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_light'),
    '#title'       => t('Light Color'),
    '#default_value' => theme_get_setting('color_light'),
    '#description' => t('<p>Default value is <strong>#E5E2DC</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_border'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_border'),
    '#title'       => t('Line and Border Color'),
    '#default_value' => theme_get_setting('color_border'),
    '#description' => t('<p>Default value is <strong>#dbdbd3</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_text'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_text'),
    '#title'       => t('Text Color'),
    '#default_value' => theme_get_setting('color_text'),
    '#description' => t('<p>Default value is <strong>#4A4A4A</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_heading'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_heading'),
    '#title'       => t('Heading Color'),
    '#default_value' => theme_get_setting('color_heading'),
    '#description' => t('<p>Default value is <strong>#222222</strong></p><p><hr /></p>'),
  ];
