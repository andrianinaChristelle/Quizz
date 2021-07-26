<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front extends CI_Controller {
	// public function Index(){
	// 	redirect('Welcome/liste');
	// }

	// public function Index(){
	// 	// $this->load->model('fonction');
	// 	// $data['donnee']=$this->fonction->get_ville();
	// 	$data['contents']='Quizz';
	// 	$this->load->view('templates/template',$data);
	// }
	public function Index(){
		$this->load->model('fonction');
		$this->load->model('reponse');
		$data['question']=$this->fonction->getQuestion();
		$data['reponse']=$this->reponse->getReponse();
		// var_dump($data['question']);
		$data['contents']='Quizz';
		$this->load->view('templates2/template',$data);
	}
	public function traitement(){
		$this->load->model('fonction');
		$question=$this->fonction->getQuestion();
		$nbrQuestion=count($question);
		$nbrVrai=0;
		$nbrFaux=0;
		for($i=0 ; $i<$nbrQuestion ; $i++){
			$reponse=$this->input->post('valeur'.$i);
			if($reponse==0){
				$nbrVrai++;
			}
			else{ 
				$nbrFaux++;
			}
		}
		$data['resultat']=$nbrVrai.'/'.$nbrQuestion;
		$data['contents']='Resultat';
		$this->load->view('templates2/template',$data);
		echo 'correcte'.$nbrVrai.'</br>';
		echo 'incorrext'.$nbrFaux;
	}
}
?>