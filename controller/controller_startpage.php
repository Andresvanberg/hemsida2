<?php

class controller_startpage{

private $view;

public function __construct($view){

  $this->view=$view;
}
public function showpage($view){

$this->view->printpage();

  }
}
