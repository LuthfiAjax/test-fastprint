<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
    }
	
	public function index()
	{
		$data['title'] = 'View Data - Test Programmer';
		$data['products'] = $this->db->order_by('no', 'desc')->get('products')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('welcome_message');
		$this->load->view('templates/footer');
	}

	public function adddata()
	{
		$this->form_validation->set_rules('namaproduct', 'Nama Produk', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run() == false) {

			$data['title'] = 'Add Data - Test Programmer';
			$data['categories'] = $this->db->distinct()->select('kategori')->from('products')->order_by('kategori', 'asc')->get()->result_array();

			$this->load->view('templates/header', $data);
			$this->load->view('adddata');
			$this->load->view('templates/footer');
		} else {
			$namaproduct = $this->input->post('namaproduct', true);
			$kategori = $this->input->post('kategori', true);
			$harga = $this->input->post('harga', true);
			$status = $this->input->post('status', true);

			if($namaproduct == '' || $namaproduct == NULL){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama Product Tidak Boleh Kosong</div>');
				redirect(base_url('add'));
			}
			if($kategori == '' || $kategori == NULL){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kategori Product Tidak Boleh Kosong</div>');
				redirect(base_url('add'));
			}
			if($status == '' || $status == NULL){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Status Product Tidak Boleh Kosong</div>');
				redirect(base_url('add'));
			}
			if($harga == '' || $harga == NULL || !is_numeric($harga)){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harga tidak boleh kosong dan harus berupa angka</div>');
				redirect(base_url('add'));
			}			

			$lates_id = $this->db->select('id_produk')->from('products')->order_by('id_produk', 'DESC')->limit(1)->get()->row('id_produk');
			$no = $lates_id + 2;
			
			$data = [
				'no' => $no,
				'nama_produk' => htmlspecialchars($namaproduct),
				'kategori' => htmlspecialchars($kategori),
				'harga' => htmlspecialchars($harga),
				'status' => htmlspecialchars($status)
			];

			$this->db->insert('products', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
			redirect(base_url(''));
		}
	}

	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('products');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
		redirect(base_url(''));
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('namaproduct', 'Nama Produk', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run() == false) {

			$data['title'] = 'Add Data - Test Programmer';
			$data['categories'] = $this->db->distinct()->select('kategori')->from('products')->order_by('kategori', 'asc')->get()->result_array();
			$data['product'] = $this->db->get_where('products', ['id_produk' => $id])->row();

			$this->load->view('templates/header', $data);
			$this->load->view('editdata');
			$this->load->view('templates/footer');
		} else {
			$namaproduct = $this->input->post('namaproduct', true);
			$kategori = $this->input->post('kategori', true);
			$harga = $this->input->post('harga', true);
			$status = $this->input->post('status', true);
			$no = $this->input->post('no');

			if($namaproduct == '' || $namaproduct == NULL){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama Product Tidak Boleh Kosong</div>');
				redirect(base_url('edit/'.$id));
			}
			if($kategori == '' || $kategori == NULL){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kategori Product Tidak Boleh Kosong</div>');
				redirect(base_url('edit/'.$id));
			}
			if($status == '' || $status == NULL){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Status Product Tidak Boleh Kosong</div>');
				redirect(base_url('edit/'.$id));
			}
			if($harga == '' || $harga == NULL || !is_numeric($harga)){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harga tidak boleh kosong dan harus berupa angka</div>');
				redirect(base_url('edit/'.$id));
			}			
			
			$data = [
				'no' => $no,
				'nama_produk' => htmlspecialchars($namaproduct),
				'kategori' => htmlspecialchars($kategori),
				'harga' => htmlspecialchars($harga),
				'status' => htmlspecialchars($status)
			];

			$this->db->where('id_produk', $id);
			$this->db->update('products', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diupdate</div>');
			redirect(base_url(''));
		}
	}

	public function bisa_dijual()
	{
		$data['title'] = 'View Data - Test Programmer';
		$data['products'] = $this->db->where('status', 'bisa dijual')->order_by('no', 'desc')->get('products')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('bisa_dijual');
		$this->load->view('templates/footer');
	}

	public function tidak_bisa_dijual()
	{
		$data['title'] = 'View Data - Test Programmer';
		$data['products'] = $this->db->where('status', 'tidak bisa dijual')->order_by('no', 'desc')->get('products')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('tidak_bisa_dijual');
		$this->load->view('templates/footer');
	}
}