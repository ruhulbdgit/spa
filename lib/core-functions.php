<?php

/**
 * this function will autoload all files from lib folder
 * path will proceed with dot notation
 * @since 1.0.0
 */
function loadView($viewPath)
{
    $viewName = str_replace('.', '/', $viewPath);
    require_once RUHUL_SPA_PATH . 'views/' . $viewName . '.php';
}

/**
 * This function will return value from global $_GET variable
 */

function _get($key){
    $value = isset($_GET[$key]) ? $_GET[$key] : null;
    return $value;
}