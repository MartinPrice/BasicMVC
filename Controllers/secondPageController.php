<?php

class secondPageController {

  public function __construct() {

    $templateData = new stdClass;
      
    $view = new Page();
    $view->setTemplate('secondPageView');
    $view->setDataSrc($templateData);
    $view->render();
    }
}