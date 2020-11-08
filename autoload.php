<?php

function autoload($class_name){
    $file = str_replace('\\', '/', $class_name) . '.php';
        
    include $file;
}