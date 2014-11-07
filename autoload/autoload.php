<?php

  function __autoload($class_name) {
    if(file_exists(__DIR__.'/../abstract/'.$class_name . '.class.php')) {
        require_once(__DIR__.'/../abstract/'.$class_name . '.class.php');   
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}
