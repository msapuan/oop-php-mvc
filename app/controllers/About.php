<?php

  class About extends Controller {
    public function index($nama = 'Sapuan', $pekerjaan = 'Programmer', $umur = 26)
    {
      $data['nama'] = $nama;
      $data['pekerjaan'] = $pekerjaan;
      $data['umur'] = $umur;
      
      $this->view('templates/header');
      $this->view('about/index', $data);
      $this->view('templates/footer');
    }

    public function page()
    {
      $this->view('templates/header');
      $this->view('about/page');
      $this->view('templates/footer');
    }

  }