<?php
require "Router.php";
use OurApplication\Routing\Router;
Router::get('/',function(){
   echo "Welcome Home";
});

Router::get('/helo/world',function(){
   echo "Welcome world";
});