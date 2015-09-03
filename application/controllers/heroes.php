<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Heroes extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('model_heroes');
	}
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('welcome_message');
		$this->load->view('Footer');
	}
	
        public function InsertHero()
	{
		$this->load->view('Header');
		$this->load->view('HeroForm');
		$this->load->view('Footer');
		
		$data = array(
		'Name' -> $this -> input -> post('nick'),
		'Power' -> $this -> input -> post('superpower'),
		'Phone' -> $this -> input -> post('phone'),
		'Email' -> $this -> input -> post('mail'),
		'Category' -> $this -> input -> post('category_id')
		);
		$this->model_heroes->insert($data);
		redirect(base_url());
	}
	
}