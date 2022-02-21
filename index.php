<?php
//Global setting
require_once 'config/global.php';

//We load the controller and execute the action
if(isset($_GET["controller"])){
    // We load the instance of the corresponding controller
    $controllerObj=loadcontroller($_GET["controller"]);
    //We launch the action
    launchAction($controllerObj);
}else{
    // We load the default controller instance
    $controllerObj=loadcontroller(DEFAULT_CONTROLLER);
    // We launch the action
    launchAction($controllerObj);
}


function loadcontroller($controller){

    switch ($controller) {
        case 'employees':
            $strFileController='controller/employeesController.php';
            require_once $strFileController;
            $controllerObj=new employeesController();
            break;
    
        default:
            $strFileController='controller/employeesController.php';
            require_once $strFileController;
            $controllerObj=new EmployeesController();
            break; 
    }
    return $controllerObj;
}

function launchAction($controllerObj){
    if(isset($_GET["action"])){
        $controllerObj->run($_GET["action"]);
    }else{
        $controllerObj->run(DEFAULT_CONTROLLER);
    }
}



?>