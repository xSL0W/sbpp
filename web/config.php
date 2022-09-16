<?php
/**
 * config.php
 *
 * This file contains all of the configuration for the db
 * that will
 * @author SteamFriends Development Team
 * @version 1.0.0
 * @copyright SteamFriends (www.SteamFriends.com)
 * @package SourceBans
 */
if(!defined('IN_SB')){echo 'You should not be here. Only follow links!';die();}

define('DB_HOST', '127.0.0.1');   					// The host/ip to your SQL server
define('DB_USER', 'csgo_DB_user');						// The username to connect with
define('DB_PASS', 'xxxxxx');						// The password
define('DB_NAME', 'csgo_DB_name');  						// Database name
define('DB_PREFIX', 'sb');					// The table prefix for SourceBans
define('DB_PORT', '3306');							// The SQL port (Default: 3306)
define('DB_CHARSET', 'utf8mb4');                    // The Database charset (Default: utf8)
define('STEAMAPIKEY', '');				// Steam API Key for Shizz
define('SB_WP_URL', 'https://comunitate.ro/bans');       				//URL of SourceBans Site
define('SB_EMAIL', '');

//define('DEVELOPER_MODE', true);			// Use if you want to show debugmessages
//define('SB_MEM', '128M'); 				// Override php memory limit, if isn't enough (Banlist is just a blank page)
?>