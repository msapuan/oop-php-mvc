<?php

  class App {
    // property untuk menentukan controller, method, parameter DEFAULT
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
      $url = $this->parseURL();
      
      // cek apakah ada file didalam Home.php didalam folder controller
      // controller
      if( file_exists('../app/controllers/' . $url[0] . '.php' ) ) {
        // timpa menjadi controller baru
        $this->controller = $url[0];
        // hilangkan controller dari elemen array
        unset($url[0]);
      }

      // panggil controller
      require_once '../app/controllers/' . $this->controller . '.php';
      // Class di instance supaya bisa manggil method
      $this->controller = new $this->controller;

      // method
      if( isset($url[1]) ) {
        if( method_exists($this->controller, $url[1]) ) {
          $this->method = $url[1];
          unset($url[1]);
        }
      }

      // params (kelola parameter)
      if( !empty($url) ) {
        $this->params = array_values($url);
      }

      // jalankan controller & method serta kirimkan params jika ada
      call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL()
    {
      if( isset($_GET['url']) ) {
        $url = rtrim($_GET['url'], '/'); // hapus / di akhir url
        $url = filter_var($url, FILTER_SANITIZE_URL); // bersihkan url dari karakter rentan
        $url = explode('/', $url); // pecah/bagi url kedalam array
        return $url;
      }
    }
  }