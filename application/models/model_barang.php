<?php
    class model_barang extends CI_Model{
        public function rules(){
            return[
                [
                    'field' => 'kode_barang',
                    'label' => 'kode_barang',
                    'rules' => 'required'
                ],[
                    'field' => 'nama_barang',
                    'label' => 'nama_barang',
                    'rules' => 'required'
                ],[
                    'field' => 'kode_jenis',
                    'label' => 'kode_jenis',
                    'rules' => 'required'
                ]
            ];
        }
    }
?>