<?php

  // class yg mengatur semua yg ada di folder controllers
  class Controller {
    public function view($view, $data = [])
    {
      require_once '../app/views/' . $view . '.php';
    }
  }