<?php
/**
 * Plugin Name:       Starter Plugin
 * Plugin URI:        https://udemy.com
 * Description:       Starter Plugin
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gianluca Giarrusso
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       starter-plugin
 * Domain Path:       /languages
 */


namespace starter_plugin;


 if(!defined('WPINC')){
    die;
 }


 Define('PLUGIN_DIR', dirname(__FILE__));
 



// hook that trigger functions when the plugin is activated
// in questo modo il metodo può essere chiamato senza istanziare la classe
register_activation_hook(__FILE__ , __NAMESPACE__ . '\activation');
function activation(){
   require_once PLUGIN_DIR. '/includes/class-activator.php';
   Activator::attivazione();
}


// hook that trigger functions when the plugin is deactivated
register_deactivation_hook(__FILE__, __NAMESPACE__ .'\deactivation');
function deactivation(){
   require_once PLUGIN_DIR . '/includes/class-deactivator.php';
   Deactivator::disattivazione();
}


require_once PLUGIN_DIR. '/includes/class-plugin.php';
$starter = new Starter_plugin(); 
