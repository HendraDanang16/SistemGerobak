<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class barang extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('barang_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }

        public function index() {

            $this->load->model('barang_model');

            $data['title']='List Data Barang';
            $data['barang']=$this->barang_model->getAllBarang();

            if($this->input->post('keyword')){
                $data['barang'] = $this->barang_model->cariDataBarang();
            }

            $this->load->view('template/header',$data);
            $this->load->view('Barang/index',$data);
            $this->load->view('template/footer');
        }

        public function tambah() {

            $data['title']='Form Tambah Data Barang';

            $this->form_validation->set_rules('ID_barang', 'ID_barang', 'required');
            $this->form_validation->set_rules('namabarang', 'namabarang', 'required');
            $this->form_validation->set_rules('harga', 'harga', 'required');
            $this->form_validation->set_rules('stock','stock', 'required');
            
           
            

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('Barang/tambah', $data);
                $this->load->view('template/footer');
            }else{
                $this->barang_model->tambahdatabarang();
                $this->session->set_flashdata('flash-data','Ditambahkan');
                redirect('barang','refresh');
            }
        }

        public function hapus($id){
            $this->barang_model->hapusdatabarang($id);

            $this->session->set_flashdata('flash-data','Dihapus');
            redirect('barang','refresh');
        }

        public function detail($id){
            $data['title'] = 'Detail Barang';
            $data['barang'] = $this->barang_model->getbarangByID($id);

            $this->load->view('template/header', $data);
            $this->load->view('barang/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($id) {

            $data['title']='Form Edit Data Barang';
            $data['barang']=$this->barang_model->getbarangByID($id);

            
            $this->form_validation->set_rules('ID_barang', 'ID_barang', 'required');
            $this->form_validation->set_rules('namabarang', 'namabarang', 'required');
            $this->form_validation->set_rules('harga', 'harga', 'required');
            $this->form_validation->set_rules('stock','stock', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header', $data);
                $this->load->view('barang/edit', $data);
                $this->load->view('template/footer');
            }else{
                $this->barang_model->ubahdatabarang();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('barang','refresh');
            }
        }
    }
