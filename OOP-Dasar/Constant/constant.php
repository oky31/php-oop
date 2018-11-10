<?php
class Router {
    const VERSION = 'V.1.1';

    public function getVersion(){
      return self::VERSION;
    }
}

$router = new Router();
echo $router->getVersion();
?>
