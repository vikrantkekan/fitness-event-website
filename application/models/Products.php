<?php
class products extends CI_Model{

public function __construct(){
  $this->load->database();
}



        public function retrive_cards_end_cat($para){

                       
                        $query2=$this->db->get_where('products', array('mainid'=>$para));
                        foreach ($query2->result() as $row2)
                        {
                                
                        
                            $data[]=array('pid'=>$row2->id,'pname'=>$row2->pname,'mrp'=>$row2->mrp,'price'=>$row2->oprice,'flagoff'=>$row2->flag_off,'cutt_off'=>$row2->cutt_off);
                        }
                        
                        
                                
                        
                        return $data;
                        
                        
                }



}

 ?>
