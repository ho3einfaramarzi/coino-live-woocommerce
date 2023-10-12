
<?php
$this->form_fields = apply_filters( 'wc_offline_form_fields', array(

                'enabled' => array(
                    'title' => __('Enable/Disable', 'wc-coinolive-gateway'),
                    'type' => 'checkbox',
                    'label' => __('Enable coino.live', 'wc-coinolive-gateway'),
                    'default' => 'yes',
                ),
                'title' => array(
                    'title' => __('Title', 'wc-coinolive-gateway'),
                    'type' => 'text',
                    'description' => __('This controls the title which the user sees during checkout.', 'wc-coinolive-gateway'),
                    'default' => __('Coino Live', 'wc-coinolive-gateway'),
                    'desc_tip' => true,
                ),
                'description' => array(
                    'title' => __('Description', 'wc-coinolive-gateway'),
                    'type' => 'textarea',
                    'description' => __('This controls the description which the user sees during checkout.', 'wc-coinolive-gateway'),
                    'default' => __('Expand your payment options with Coino Live! BTC, ETH, LTC and many more: pay with anything you like!', 'wc-coinolive-gateway'),
                ),
                'instructions' => array(
					'title'       => __( 'Instructions', 'wc-gateway-offline' ),
					'type'        => 'textarea',
					'description' => __( '', 'wc-gateway-offline' ),
					'default'     => '',
					'desc_tip'    => true,
				),
                'ipn_secret' => array(
                    'title' => __('Gate ID', 'wc-coinolive-gateway'),
                    'type' => 'text',
                    'description' => __('Please enter your Gate ID.', 'wc-coinolive-gateway'),
                    'default' => '',
                ),
                'api_key' => array(
                    'title' => __('Api Key', 'wc-coinolive-gateway'),
                    'type' => 'text',
                    'description' => __('Please enter your coino.live Api Key.', 'wc-coinolive-gateway'),
                    'default' => '',
                ),
                'simple_total' => array(
                    'title' => __('Compatibility Mode', 'wc-coinolive-gateway'),
                    'type' => 'checkbox',
                    'label' => __("This may be needed for compatibility with certain addons if the order total isn't correct.", 'wc-coinolive-gateway'),
                    'default' => '',
                )
            ) );
