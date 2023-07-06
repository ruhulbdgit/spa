<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * this function will autoload all files from lib folder
 * @since 1.0.0
 */ 
 
function autoLoad()
{
    $files = glob('lib/*.php');
    foreach ($files as $file) {
        require_once $file;
    }
}

/**
 * load controller file
 */

function loadControllers()
{
    $files = glob('controller/*.php');
    foreach ($files as $file) {
        require_once $file;
    }
}

// bootstrap the application
function bootstrap(){
    autoLoad();
    loadControllers();
    // load main view file 
   // loadView('main');
   $page = _get('page');
   $todo = _get('todo');

   if(empty($page)){
       $page = 'dashboard';
   }
   if(empty($todo)){
       $todo = 'index';
   }

   $controllerName = $page.'Controller';
   $controller = new $controllerName();
   $controller->$todo();

}

// call the bootstrap function
bootstrap();

