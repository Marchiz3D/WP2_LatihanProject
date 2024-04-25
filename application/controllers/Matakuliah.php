<?php 

class Matakuliah extends CI_Controller {
  public function index() {
    $this->load->view('view_form_matkul');
  }

  public function cetak() {
    $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]|numeric', [
      'required' => 'Kode Matakuliah harus diisi',
      'min_length' => 'Kode Matakuliah terlalu pendek',
      'numeric' => 'Kode harus numeric'
    ]);
    $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
      'required' => 'Nama Matakuliah harus diisi',
      'min_length' => 'Nama Matakuliah terlalu pendek'
    ]);
    $this->form_validation->set_rules('sks', 'SKS', 'required', [
      'required' => 'SKS harus diisi'
    ]);

    if ($this->form_validation->run() != true) {
      $this->load->view('view_form_matkul');
    } else {
      $data = [
        'kode' => $this->input->post('kode'),
        'nama' => $this->input->post('nama'),
        'sks' => $this->input->post('sks'),
      ];
      $this->load->view('view_data_matakuliah', $data);
    }

  }
}


?>