<?php

  class Home extends Controller {
    // buat method DEFAULT
    public function index()
    {
      $data['judul'] = 'Home';
      $this->view('templates/header', $data);
      $this->view('home/index');
      $this->view('templates/footer');
    }
  }