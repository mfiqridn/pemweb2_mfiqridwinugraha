<?php
class Home extends CI_Controller{
	public function index(){

		$data=["judul"=>"Praktikum 6"];
		$this->load->view("layouts/header", $data);
		$this->load->view('layouts/navbar');
		$this->load->view("home/index");
		$this->load->view("layouts/footer");
	}
}
?>