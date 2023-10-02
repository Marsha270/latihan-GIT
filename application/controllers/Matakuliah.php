<?php
class Matakuliah extends CI_Controller
{
    Public function index()
    {
        $this->load->View('View-form-matakuliah');
    }
    public function cetak()
    {
        $data =[
            'kode'=> $this->input->post('kode'),
            'nama'=> $this->input->post('nama'),
            'sks'=> $this->input->post('sks')
        ];
        $this->load->View('View-data-matakuliah',$data);
    }
}