<?php

	class Favourites_model extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}

		public function get_heroes($slug = FALSE)
		{
			if ($slug === FALSE) {
				$query = $this->db->get('dota_2');
				return $query->result_array();
			}

			$query = $this->db->get_where('dota_2', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_hero($arr){

			$this->db->insert("dota_2", $arr);
			$id = $this->db->insert_id();

			return $id;

		}
	}
