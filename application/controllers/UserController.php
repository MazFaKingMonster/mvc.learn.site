<?php
class UserController implements IController {
    public function indexAction() {
        $fc = FrontController::getInstance();
        $fc->setBody('Нахуй иди!');
    }
    public function showAction() {
        $fc = FrontController::getInstance();
        //Добавляем
        $params = $fc->getParams();
        $view = new View();
        $view->name = $params['name'];
        $result = $view->render('../views/index.php');

        $fc->setBody($result);
    }
}