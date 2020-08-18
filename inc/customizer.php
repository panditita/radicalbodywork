	<?php
/**
 * Customizer settings for this theme.
 *
 * @package WordPress
 * @subpackage RadicalBodywork
 * @since RadicalBodywork 1.0
 */


 // Header & Footer Background Color.
			$wp_customize->add_setting(
				'underline_menu_color',
				array(
					'default'           => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'postMessage',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'underline_menu_color',
					array(
						'label'   => __( 'Underline Color Menu', 'radicalbodywork' ),
						'section' => 'colors',
					)
				)
			);

			// Enable picking an accent color.
			$wp_customize->add_setting(
				'accent_hue_active',
				array(
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => array( __CLASS__, 'sanitize_select' ),
					'transport'         => 'postMessage',
					'default'           => 'default',
				)
			);

			$wp_customize->add_control(
				'accent_hue_active',
				array(
					'type'    => 'radio',
					'section' => 'colors',
					'label'   => __( 'Primary Color', 'radicalbodywork' ),
					'choices' => array(
						'default' => __( 'Default', 'radicalbodywork' ),
						'custom'  => __( 'Custom', 'radicalbodywork' ),
					),
				)
			);