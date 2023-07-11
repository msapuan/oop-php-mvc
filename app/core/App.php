<?php

  class App {
    // property untuk menentukan controller, method, parameter DEFAULT
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
      $url = $this->parseURL();
      var_dump($url);
    }

    public function parseURL()
    {
      if(isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/'); // hapus / di akhir url
        $url = filter_var($url, FILTER_SANITIZE_URL); // bersihkan url dari karakter rentan
        $url = explode('/', $url); // pecah/bagi url kedalam array
        return $url;
      }
    }
  }