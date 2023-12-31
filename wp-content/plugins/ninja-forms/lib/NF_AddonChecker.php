<?php

final class NF_AddonChecker
{
    public function __construct()
    {
        add_action( 'plugins_loaded', array( $this, 'check_plugins' ) );
        add_action( 'admin_notices', array( $this, 'deactivation_notice' ) );
    }

    public function check_plugins()
    {
        if ( ! function_exists( 'get_plugins' ) ) {

            require_once ABSPATH . 'wp-admin/includes/plugin.php';

        }

        $plugins = get_plugins();

        foreach( $plugins as $plugin => $data ){

            if( 'ninja-forms/ninja-forms.php' != $plugin && 0 === strncmp( $plugin, 'ninja-forms-', 12 ) && version_compare( $data[ 'Version' ], '3', '<' ) ){

                if( ! is_plugin_active( $plugin ) ) continue;

                deactivate_plugins($plugin);

                wp_redirect( admin_url( 'plugins.php?nf-deactivated=' . $plugin ) ); exit;
            }
        }
    }

    public function deactivation_notice()
    {
        if( ! isset( $_GET[ 'nf-deactivated' ] ) ) return;

        $plugin = sanitize_text_field( $_GET[ 'nf-deactivated' ] );

        ?>
        <div class="notice notice-error is-dismissible">
            <p><?php esc_html_e( 'Oops! That addon is no longer compatible with Ninja Forms.', 'ninja-forms' ); ?></p>
            <p><?php echo sprintf( esc_html__( '%s was deactivated.', 'ninja-forms' ), '<code>' . $plugin . '</code>'); ?></p>
        </div>
        <?php
    }
}

new NF_AddonChecker();
