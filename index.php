<?php

require_once "./utils/Defines.php";
require_once "./models/Autoloader.php";

use Models\Autoloader;
use Models\Router;
use Controllers\MachineController;


Autoloader::register();


$router = new Router();

// Les routes
$router->get("/", function () { 
    echo "Bienvenue sur la page d'accueil !";
});

//routes dynamiques qui marchent avec "this->" au lieu de "self::" dans MachineController.php
// $router->get("/slot-machine", function () {
//     $controller = new MachineController();
//     $controller->index();
// });

// $router->get("/play", function () { 
//     $controller = new MachineController();
//     $controller->play();
// });

//routes statiques qui à nécessité de mettre en static plusieurs function
$router->get("/slot-machine", [MachineController::class, "index"]);
$router->get("/play", [MachineController::class, "play"]);


$router->run();
