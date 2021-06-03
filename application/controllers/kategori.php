<?php 

class Kategori extends CI_Controller{
    public function album(){
        $data['album'] = $this->model_kategori->data_album()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('album', $data);
        $this->load->view('templates/footer');
    }

    public function idol(){
        $data['idol'] = $this->model_kategori->data_idol()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('idol', $data);
        $this->load->view('templates/footer');
    }

    public function perlengkapan_konser(){
        $data['perlengkapan_konser'] = $this->model_kategori->data_perlengkapan_konser()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perlengkapan_konser', $data);
        $this->load->view('templates/footer');
    }
}

?>
