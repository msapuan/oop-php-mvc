<?php

  class Home extends Controller {
    // buat method DEFAULT
    public function index()
    {
      $this->view('templates/header');
      $this->view('home/index');
      $this->view('templates/footer');
    }
  }