<?php

if (php_sapi_name() === 'cli-server') { // check for php -S utilisation
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Get url
    $uri = trim($uri, '/'); 
    $_GET['url'] = $uri;
}

require_once __DIR__.'/../src/Helpers/Router.php';


Router::get('', 'AvocatController', 'index');

Router::get('avocats', 'AvocatController', 'index');           
Router::get('avocat/create', 'AvocatController', 'create');    
Router::get('avocat/edit', 'AvocatController', 'edit');        
Router::get('avocat/update', 'AvocatController', 'update');    
Router::get('avocat/delete', 'AvocatController', 'delete');    


Router::get('huissiers', 'HuissierController', 'index');
Router::get('huissier/create', 'HuissierController', 'create');
Router::get('huissier/edit', 'HuissierController', 'edit');
Router::get('huissier/update', 'HuissierController', 'update');
Router::get('huissier/delete', 'HuissierController', 'delete');

Router::get('stats', 'StatsController', 'index'); 

Router::get('professionnel/create', 'AvocatController', 'createDynamic');


Router::dispatch();

?>