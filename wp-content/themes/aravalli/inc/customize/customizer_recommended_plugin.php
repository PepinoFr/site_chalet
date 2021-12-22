<?php
/* Notifications in customizer */


require get_template_directory() . '/inc/customizer-notify/aravalli-customizer-notify.php';
$aravalli_config_customizer = array(
	'recommended_plugins'       => array(
		'clever-fox' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Cleverfox</strong> plugin for taking full advantage of all the features this theme has to offer.', 'aravalli')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'aravalli' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'aravalli' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'aravalli' ),
	'activate_button_label'     => esc_html__( 'Activate', 'aravalli' ),
	'aravalli_deactivate_button_label'   => esc_html__( 'Deactivate', 'aravalli' ),
);
Aravalli_Customizer_Notify::init( apply_filters( 'aravalli_customizer_notify_array', $aravalli_config_customizer ) );
?>