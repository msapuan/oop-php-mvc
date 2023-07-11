<?php

  class Home extends Controller {
    // buat method DEFAULT
    public function index()
    {
      $this->view('home/index');
    }
  }