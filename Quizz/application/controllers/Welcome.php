<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function Index(){
		redirect('Welcome/liste');
	}

	public function pageInsert(){
		// $this->load->model('fonction');
		// $data['donnee']=$this->fonction->get_ville();
		$data['contents']='recherche';
		$this->load->view('templates/template',$data);
	}
	public function insert(){
		$this->load->model('fonction');
		$this->load->model('reponse');
		$question=$this->input->post('question');
		$numero=$this->input->post('numero');
		$this->fonction->insertQuestion($numero,$question);
		$id=$this->fonction->idMax();
		for($i=0 ; $i<4 ; $i++){
			$reponse=$this->input->post('reponse'.$i);
			$type=$this->input->post('type'.$i);
			$this->reponse->insertReponse($id , $reponse , $type);
			echo $type.'testt</br>';
		}
		
	}
	public function liste(){
		$this->load->model('fonction');
		$data['question']=$this->fonction->getQuestion();
		// var_dump($data['question']);
		$data['contents']='liste';
		$this->load->view('templates/template',$data);
	}
	public function traitement(){
		$this->load->model('fonction');
		$this->load->model('reponse');
		$id=$this->input->post('id');
		if(isset($_POST['supprimer'])){
			$this->reponse->deleteRepone($id);
			$this->fonction->deleteQuestion($id);
			redirect('Welcome/liste');
			echo 'supprimer';
		}
		elseif(isset($_POST['modifier'])){
			$data['detail']=$this->fonction->getById($id);
			// var_dump($data);
			$data['contents']='modifier';
			$this->load->view('templates/template',$data);
			// echo "modifier";
		}
		elseif(isset($_POST['detail'])){
			$data['detail']=$this->fonction->getById($id);
			// var_dump($data);
			$data['contents']='detail';
			$this->load->view('templates/template',$data);
		}
	}
	public function traitementupdate(){
		$id=$this->input->post('id');
		$this->reponse->deleteRepone($id);
		$this->fonction->deleteQuestion($id);
		$this->load->model('fonction');
		$this->load->model('reponse');
		$question=$this->input->post('question');
		$numero=$this->input->post('numero');
		$this->fonction->insertQuestion($numero,$question);
		$id=$this->fonction->idMax();
		for($i=0 ; $i<4 ; $i++){
			$reponse=$this->input->post('reponse'.$i);
			$type=$this->input->post('type'.$i);
			$this->reponse->insertReponse($id , $reponse , $type);
			echo $type.'testt</br>';
		}
	}
}
?>



