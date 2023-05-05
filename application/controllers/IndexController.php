<?php
class IndexController implements IController {
  public function indexAction() {
    $fc = FrontController::getInstance();
    //Добавляем
    $view = new View();
    $view->name = "John";
    $result = $view->render('../views/index.php');

    $fc->setBody($result);
  }
}
