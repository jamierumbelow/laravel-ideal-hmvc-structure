<?php
/**
 * modules/authentication/routes.php is the routes file for the auth
 * module. All requests beginning with /auth are routed here
 */

Router::get('login', 'Login@index'); // GET /auth/login
Router::post('login', 'Login@process'); // POST /auth/login

Router::post('logout', 'Logout@process'); // POST /auth/logout