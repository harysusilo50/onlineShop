<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('templates_admin/footer');
    }
    public function tambah_aksi(){
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];

        if($gambar = ''){}else{
            $config['upload_path'] = './assets';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "gagal";
            }else{
                $gambar = $this->upload->data('file_name');
            }
            $data = [
                'nama_brg' => $nama_brg,
                'keterangan' => $keterangan,
                'kategori' => $kategori,
                'harga' => $harga,
                'stok' => $stok,
                'gambar' => $gambar
            ];
            $this->model_barang->tambah_barang($data, 'barang');
            redirect('admin/data_barang/');
        }
        
    }
    public function edit($id){
        $where = ['id_brg' => $id];
        $data['barang'] = $this->model_barang->edit_barang($where,'barang')->result();
        $this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang',$data);
		$this->load->view('templates_admin/footer');
    }

    public function update(){
        $id = $this->input->post('id_brg');
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = [
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok
        ];
        $where = ['id_brg' => $id];

        $this->model_barang->update_data($where, $data, 'barang');
        redirect('admin/data_barang/index');

    }

    public function hapus($id){
        $where = ['id_brg' => $id];
        $this->model_barang->hapus_data($where, 'barang');
        redirect('admin/data_barang/index');
	}
	
	public function detail_barang($id_brg){
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates_admin/footer');
	}
}
