<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    class Fonction extends CI_MODEL{
        public function getQuestion(){
            $query= $this->db->query('select * from question');
            return $query->result_array();
        }
        public function getById($id){
            $query= $this->db->query('select * from questRep where id='.$id);
            return $query->result_array();
        }
        public function get(){
            $query= $this->db->query('select * from questRep ');
            return $query->result_array();
        }
        public function insertQuestion($numero , $question ){
            $data= array(
                'numero'=>$numero,
                'question'=>$question ,
            );
           $sql= $this->db->insert('question',$data);
           echo $sql;
        }   
       public function deleteQuestion($id){  
            $query= $this->db->query('DELETE from question  WHERE id='.$id); 
       }
        public function updatePrix($id, $question){
            $query= $this->db->query('UPDATE  question SET  question='.$question.' WHERE id='.$id); 
            // echo $query ;
        }
        public function idMax(){
            $query= $this->db->query('select max(id) as id from question');
            $id= $query->result_array();
            return $id[0]['id'];
        }
    }
       

?>