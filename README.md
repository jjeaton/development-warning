# Development Warning #

----

WordPress mu-plugin to warn you when you are developing on your local server. It adds an item to the WordPress toolbar that indicates you are in **'DEVELOPMENT'**.

----

I highly recommend using this as mu-plugin so you don't accidentially deactivate it and end up making unwanted changes to your production environment.

This plugin is useful if you meet each of the following:

* You keep a separate local development server for your WordPress installation
* You edit your `hosts` file so that your development server uses your production URL
* You'd like to be able to tell when www.example.com means you're on production or development
* *(Optional)* You use a `local-config.php` file to keep your `wp-config.php` file environment-agnostic

## Installation ##

* Place the `development-warning.php` file in your `wp-content/mu-plugins` directory
* Edit your `wp-config.php` file and add:

        define( 'WP_LOCAL_DEV', true );

I use a `local-config.php` file to allow me to use the same `wp-config.php` in each environment and check it into git without any passwords:

      if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
        include( dirname( __FILE__ ) . '/local-config.php' );
        define( 'WP_LOCAL_DEV', true );
      else {
        include( dirname( __FILE__ ) . '/prod-config.php' );
        define( 'WP_LOCAL_DEV', false );
      }

Once this is setup I can just drop a `local-config.php` file into the WP root and it will know I'm on a local environment.

### TODO: ###

* Add warnings even when the toolbar isn't visible or the user isn't logged in