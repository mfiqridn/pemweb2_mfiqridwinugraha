<?php
class Mahasiswa extends CI_Controller{

	public function index(){
		$this->load->model('Mahasiswa_model','mhs1');
		$this->mhs1->id=1;
		$this->mhs1->nim='0110221026';
		$this->mhs1->nama='Fiqri';
		$this->mhs1->gender='L';
		$this->mhs1->ipk=3.70;

		$this->load->model('Mahasiswa_model','mhs2');
		$this->mhs2->id=2;
		$this->mhs2->nim='0000000002';
		$this->mhs2->nama='Ahmad';
		$this->mhs2->gender='L';
		$this->mhs2->ipk=3.60;

		$this->load->model('Mahasiswa_model','mhs3');
		$this->mhs3->id=3;
		$this->mhs3->nim='0000000003';
		$this->mhs3->nama='Naruto';
		$this->mhs3->gender='L';
		$this->mhs3->ipk=3.50;

		$data=["judul"=>"Daftar Mahasiswa", "mahasiswa" => [$this->mhs1, $this->mhs2, $this->mhs3]];

		$this->load->view("layouts/header", $data);
		$this->load->view('layouts/navbar');
		$this->load->view("mahasiswa/index", $data);
		$this->load->view("layouts/footer", $file="mahasiswa");
	}

	
}

?>