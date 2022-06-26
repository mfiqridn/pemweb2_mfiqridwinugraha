<?php
class Dosen extends CI_Controller{
	public function index(){
		$this->load->model('Dosen_model','dosen1');
		$this->dosen1->id=1;
		$this->dosen1->nidn='0413128601';
		$this->dosen1->nama='Ahmad Rio Adriansyah, S.Si. M.Si';
		$this->dosen1->gender='L';
		$this->dosen1->pendidikan='S2';
	
		$this->load->model('Dosen_model','dosen2');
		$this->dosen2->id=2;
		$this->dosen2->nidn="0420089004";
		$this->dosen2->nama='Tifani Nabarian, S.Kom, M.T.i';
	 	$this->dosen2->gender='P';
		$this->dosen2->pendidikan='S2';
	
		$this->load->model('Dosen_model','dosen3');
		$this->dosen3->id=3;
		$this->dosen3->nidn='0414047101';
		$this->dosen3->nama='Sirojul Munir, S.Si, M.Kom';
		$this->dosen3->gender='L';
		$this->dosen3->pendidikan='S2';


		$data=["judul"=>"Daftar Dosen", "dosen" => [$this->dosen1, $this->dosen2, $this->dosen3]];

		$this->load->view("layouts/header", $data);
		$this->load->view('layouts/navbar');
		$this->load->view("dosen/index");
		$this->load->view("layouts/footer", $file="dosen");
	}
}
?>
