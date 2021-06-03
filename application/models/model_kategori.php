<?php 

class Model_kategori extends CI_Model{
    public function data_album(){
        return $this->db->get_where("barang",array('kategori' => 'album'));
    }

    public function data_idol(){
        return $this->db->get_where("barang",array('kategori' => 'idol'));
    }

    public function data_perlengkapan_konser(){
        return $this->db->get_where("barang",array('kategori' => 'perlengkapan konser'));
    }
}

?>
