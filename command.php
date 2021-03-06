<?php
if ( !defined( 'WP_CLI' ) ) return;
/**
 * Changes WP-Piwik settings.
 */
class Piwik_Command extends WP_CLI_Command {

    /**
     * Set piwik url.
     * 
     * ## OPTIONS
     * 
     * <url>
     * : Enter your Piwik URL. This is the same URL you use to access your Piwik instance, e.g. http://www.example.com/piwik/
     * 
     * ## EXAMPLES
     * 
     *     wp piwiki url http://www.example.com/piwik/ 
     *
     * @synopsis <url>
     */
    function url( $args, $assoc_args ) {
        list( $url ) = $args;
        update_site_option ( 'wp-piwik_global-piwik_url', $url );
        // Print a success message
        WP_CLI::success( "Url set to: $url" );
    }
    /**
     * Set auth token.
     * 
     * ## OPTIONS
     * 
     * <token>
     * : Enter your Piwik auth token here. It is an alphanumerical code like 0a1b2c34d56e78901fa2bc3d45678efa (see WP-Piwik faq for more info)
     * 
     * ## EXAMPLES
     * 
     *     wp piwik token 0a1b2c34d56e78901fa2bc3d45678efa
     *
     * @synopsis <token>
     */
    function token( $args, $assoc_args ) {
        list( $token ) = $args;
        update_site_option ( 'wp-piwik_global-piwik_token', $token );
        // Print a success message
        WP_CLI::success( "Auth token set to: $token" );
    }
}

WP_CLI::add_command( 'piwik', 'Piwik_Command' );
