<?php
/* For licensing terms, see /license.txt */
/**
 * @package chamilo.notification
 *
 * @author Julio Montoya <gugli100@gmail.com>
 */
if (PHP_SAPI != 'cli') {
    die('Run this script through the command line or comment this line in the code');
}

require_once __DIR__.'/../inc/global.inc.php';

/**
 * Notification sending.
 */
$notify = new Notification();
$notify->send();
