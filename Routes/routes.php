<?php
  $route = new route();
  
  $route->add('/', 'landingController');
  
  $route->process();