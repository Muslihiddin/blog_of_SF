<?php

	class Favourites extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('favourites_model');
		}

		public function index() {

			$data['title'] = 'My favourite heroes of Dota 2';

			$data['heroes'] = $this->favourites_model->get_heroes();

			$this->load->view('templates/header');
			$this->load->view('favourites/index', $data);
			$this->load->view('templates/footer');

		}

		public function view($slug = NULL){

			$data['hero'] = $this->favourites_model->get_heroes($slug);

			if (empty($data['hero'])) {
				show_404();
			}

			$data['title'] = $data['hero']['name'];

			$this->load->view('templates/header');
			$this->load->view('favourites/view', $data);
			$this->load->view('templates/footer');


		}

		public function create() {



			$data['title'] = 'Add hero';

			$this->form_validation->set_rules('name', 'Name', 'required' );
			$this->form_validation->set_rules('replica', 'Replica', 'required' );
			$this->form_validation->set_rules('description', 'Description', 'required' );


			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('favourites/create', $data);
				$this->load->view('templates/footer');
			} else {


				$config['upload_path'] 			= './assets/images/';
				$config['allowed_types'] 		= 'jpg|png|jpeg';
//				$config['max_size']             = 100;
//				$config['max_width']            = 1024;
//				$config['max_height']           = 768;


				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('user_file')){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'no_image.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());

					$post_image = $data['upload_data']['file_name'];
				}

			$data = array (
				'name'		  => $this->input->post('name'),
				'slug' 		  => url_title($this->input->post('name')),
				'description' => $this->input->post('description'),
				'phrase' 	  => $this->input->post('replica'),
				'image'       => 'assets/images/'.$post_image
			);

				$this->favourites_model->create_hero($data);
				redirect('favourites/'.url_title($this->input->post('name')), 'refresh');
//				redirect('favourites', 'refresh');
//				$this->load->view('favourites/success');
			}



		}

	}
