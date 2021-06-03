<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_ke_keranjang($id){
		$cek = $this->session->userdata('role_id');
		if ($cek != 2){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Please login! :)
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('auth/login');
		} else {
		$barang = $this->model_barang->find($id);
		$data = array(
			'id'      => $barang->id_brg,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg,
		);
	
	$this->cart->insert($data);
	redirect('dashboard');
		}
	}
	
	public function detail_keranjang(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	public function pembayaran(){
		$cek = $this->session->userdata('role_id');
		if ($cek != 2){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Please login! :)
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>');
			redirect('auth/login');
		} else {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pembayaran');
			$this->load->view('templates/footer');
		}
	}

	public function proses_pesanan(){
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		} else{
			echo "Maaf, Pesanan Kamu Gagal diproses!";
		}
	}

	public function detail_barang($id_brg){
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}

}
