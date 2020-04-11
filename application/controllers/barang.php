<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class barang extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('model_barang');
            $this->load->library('form_validation');
        }

        public function view_insert(){
            $message=array('message'=>'Silahkan masukan data');
            $this->load->view('view_barang',$message);
        }

        public function validation_data(){
            $model_barang=$this->model_barang;
            $validation=$this->form_validation;
            $validation->set_rules($model_barang->rules());
            if($validation->run()){
                $kode_barang=$this->input->post('kode_barang');
                $nama_barang=$this->input->post('nama_barang');
                $kode_jenis=$this->input->post('kode_jenis');
                $harga=$this->input->post('harga');

                $data=array('kode_barang'=>$kode_barang,'nama_barang'=>$nama_barang,'kode_jenis'=>$kode_jenis,'harga'=>$harga);

                $message=array('message'=>'Data Valid');
                $this->load->view('view_barang',$message);
            }else{
                $message=array('message'=>'Data tidak valid');
                $this->load->view('view_barang',$message);
            }
        }

    }
?>