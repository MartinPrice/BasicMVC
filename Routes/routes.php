<?php
  $route = new route();
  
  $route->add('/', 'landingController');
  $route->add('/SecondPage', 'secondPageController');
  
  $route->process();