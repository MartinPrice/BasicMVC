<?php

class landingController {

  public function __construct() {

    $templateData = new stdClass;
      
    $view = new Page();
    $view->setTemplate('landingView');
    $view->setDataSrc($templateData);
    $view->render();
    }
}
