<?php
/**
 * app/routes.php is the application-global routes. All requests are routed
 * through here initially.
 */

Router::mount('/auth', 'modules/authentication');
Router::mount('/registration', 'modules/registration');