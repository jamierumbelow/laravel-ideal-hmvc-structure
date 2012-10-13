<?php
/**
 * modules/registration/routes.php is the routes file for the registration
 * module. All requests beginning with /registration are routed here
 */

// GET /registration
Router::get('*', 'Registration@index');