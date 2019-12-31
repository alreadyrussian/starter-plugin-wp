<?php

namespace starter_plugin;
require_once PLUGIN_DIR . '/includes/class-info.php';


// Class Plugin

class Starter_plugin {

    private $versione;

    function __construct(){
        // si scrivono gli hook in questa parte
        $this->versione = Info::VERSIONE;
        var_dump($this->versione);
    }

    
}