<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    class Reponse extends CI_MODEL{
        public function getReponse(){
            $query= $this->db->query('select * from reponse');
            return $query->result_array();
        }

        public function insertReponse($id_question , $reponse ,$type){
            $data= array(
                'id_question'=>$id_question,
                'reponse'=>$reponse ,
                'typeRep'=>$type
            );
           $sql= $this->db->insert('reponse',$data);
        }
 
       public function deleteRepone($id){  
            $query= $this->db->query('DELETE from reponse WHERE id_question='.$id); 
       }

        public function updateReponse($id, $reponse){
            $query= $this->db->query('UPDATE  reponse SET  reponse='.$reponse.' WHERE id='.$id); 
            // echo $query ;
        }
  
    }
       

?>