<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = null)
	{
		$data['title']		='Admin Category';
		$data['content']	= $this->category->paginate($page)->get();
		$data['total_rows']	= $this->category->count();
		$data['pagination']	= $this->category->makePagination(base_url('category'), 2, $data['total_rows']);
		
		$data['page']		= 'pages/category/index';

		$this->view($data);
	}

	public function create()
	{
		if (!$_POST) {
			$input = (object) $this->category->getDefaultValues();
		}else {
			$input = (object) $this->input->post(null, true);
		}

		if (!$this->category->validate()) {
			
			$data['title']			= 'Tambah Category';
			$data['input']			=  $input;
			$data['form_action']	=  base_url('category/create');
			$data['page']			= 'pages/category/form';		
		
			$this->view($data);
			return;
		}

		if ($this->category->create($input)) {
			$this->session->set_flashdata('success', 'Data Berhasil Diambahkan');
		}else {
			$this->session->set_flashdata('error', 'Opps Terjadi kesalahan');
		}
			redirect(base_url('category'));

	}

	public function unique_slug()
	{
		$slug		= $this->input->post('slug');
		$id			= $this->input->post('id');
		$category	= $this->category->where('slug', $slug)->first();

		if ($category) {
			if ($id == $category->id) {
				return true;
			}
			$this->load->library('form_validation');
			$this->form_validation->set_message('unique_slug', '%s sudah digunakan!');
			return false;
		}

		return true;
	}
}

/* End of file Category.php */
