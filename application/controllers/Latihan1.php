<?php 
  Class Latihan1 extends CI_Controller {
    public function index() {
      echo "<h1>Hello World</h1>";
    }

    public function penjumlahan($n1, $n2) {
      $this->load->model('Model_latihan1');

      $data['nilai1'] = $n1;
      $data['nilai2'] = $n2;
      $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

      $this->load->view('view_latihan1', $data);
      // $hasil = $this->Model_latihan1->jumlah($n1, $n2);
      // echo "Hasil penjumlahan dari ".$n1."+".$n2."=".$hasil;
    }
  }

?>