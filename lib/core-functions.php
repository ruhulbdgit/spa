<?php

/**
 * this function will autoload all files from lib folder
 * path will proceed with dot notation
 * @since 1.0.0
 */
function loadView($viewPath='')
{
    // if _page and _todo is not set then load main view
    $viewName = str_replace('.', '/', $viewPath);
   
    // check if view path exists 
     if (!empty($viewName) && !empty($viewPath)  && file_exists(RUHUL_SPA_PATH . 'views/' . $viewName . '.php')) {
        require_once RUHUL_SPA_PATH . 'views/' . $viewName . '.php';
        return true;
    }

    // get page from query string 
    $_page = _get('page');
    $_todo = _get('todo');
    // check _pgae and _todo is set or not
    if (isset($_page) && isset($_todo)) {
        // check if file exists
        if (file_exists(RUHUL_SPA_PATH . 'views/' . $_page . '/' . $_todo . '.php')) {
           

            require_once RUHUL_SPA_PATH . 'views/' . $_page . '/' . $_todo . '.php';
        } 
    }
    return false;

}


/**
 * this function will autoload all files from lib folder
 * path will proceed with dot notation
 * @since 1.0.0
 */
function loadMainView($page)
{
   
    require_once RUHUL_SPA_PATH . 'views/main.php';
}

/**
 * This function will return value from global $_GET variable
 */

function _get($key){
    $value = isset($_GET[$key]) ? $_GET[$key] : null;
    return $value;
}