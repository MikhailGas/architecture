<?php

function autoload($class_name){
    $prefix = 'App\\';
    $prefixLen = strlen($prefix);
    
    $class = substr($class_name, $prefixLen);
    $file = str_replace('\\', '/', $class) . '.php';
        
    include $file;
}