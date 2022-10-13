<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
    $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
    $data = [
    'kode' => $this->input->post('kode'),
    'nama' => $this->input->post('nama'),
    'sks' => $this->input->post('sks')
    ];
    $this->load->view('view-data-matakuliah', $data);
    $this->form_validation->set_rules('nama', 'nama_matakuliah', 'required|min_lenght[3]',[
        'required' => 'nama matakuliah harus di isi',
        'min_lenght' => 'nama terlalu pendek'
    ]);

    if ($this->form_validation->run() != true;) {
        $this->load->view('view-form-matakuliah');
    }

    else {
        $data = [
            'kode' = $this->input->post('kode'),
            'nama' = $this->input->post('nama'),
            'sks'  = $this->input->post('sks')
        ];
    }

    }
}