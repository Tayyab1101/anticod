<?php 

$router->get("","TagController@home");
$router->get("output","TagController@result");
$router->post("tags","TagController@add");