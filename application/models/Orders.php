
<?php
class Orders extends CI_Model{

public function __construct(){
  $this->load->database();
}


public function retrive_orders($uid){

$url='';
//$uid=99;
$data=array();


$query = $this->db->order_by('id', 'DESC')->get_where("order_list",array('uid'=>$uid,'status'=>0));

foreach ($query->result() as $row)
{
        $oid= $row->id;
        $data2=array();
		

$query2=$this->db->get_where('order_item', array('oid'=>$oid));

//$result2[]=$query2->row_array();
foreach ($query2->result() as $row2)
{

        $pid = $row2->pid;

$query3=$this->db->get_where('products', array('id'=>$pid));
foreach ($query3->result() as $row3)
{
$mainid=$row3->mainid;
$flag_off=$row3->flag_off;
}

$query4=$this->db->get_where('main_cat', array('mainid'=>$mainid));
foreach ($query4->result() as $row4)
{
$event_name=$row4->name;
$event_date=$row4->event_date;
$event_venue=$row4->venue;
}



        $data2[]=array('id'=>$row2->id,'pid'=>$row2->pid,'pname'=>$row2->pname,'price'=>$row2->price,'mrp'=>$row2->mrp,'oid'=>$row2->oid,'status'=>$row2->status,'ord_status'=>$row2->ord_status,'short_status'=>$row2->short_status,'size'=>$row2->size,'name'=>$row2->name,'email'=>$row2->email,'contact'=>$row2->contact,'gender'=>$row2->gender,'city'=>$row2->city,'blood'=>$row2->blood,'emergency'=>$row2->emergency,'dob'=>$row2->dob,'merch_id'=>$row2->merch_id,'flag_off'=>$flag_off,'event_name'=>$event_name,'event_date'=>$event_date,'event_venue'=>$event_venue,'qr'=>$row2->qr);




}
    //$data2=$result2;
    
        $data[]=array('oid'=>$oid,'todate'=>$row->todate,'trnid'=>$row->trnid,'ord_type'=>$row->ord_type,'prod_total'=>$row->sub_total,'del_charges'=>$row->del_charges,'items'=>$data2);   
      
}
return $data;



}






public function retrive_orders_update($mid){

$url='';
//$uid=99;
$data=array();


$query = $this->db->order_by('id', 'DESC')->get_where("order_list",array('merch_id'=>$mid));

foreach ($query->result() as $row)
{
        $oid= $row->id;
        $data2=array();
        

$query2=$this->db->get_where('order_item', array('oid'=>$oid));

//$result2[]=$query2->row_array();
foreach ($query2->result() as $row2)
{

        $pid = $row2->pid;

$query3=$this->db->get_where('products', array('id'=>$pid));
foreach ($query3->result() as $row3)
{
$mainid=$row3->mainid;
$flag_off=$row3->flag_off;
}

$query4=$this->db->get_where('main_cat', array('mainid'=>$mainid));
foreach ($query4->result() as $row4)
{
$event_name=$row4->name;
$event_date=$row4->event_date;
$event_venue=$row4->venue;
}



        $data2[]=array('id'=>$row2->id,'pid'=>$row2->pid,'pname'=>$row2->pname,'price'=>$row2->price,'mrp'=>$row2->mrp,'oid'=>$row2->oid,'status'=>$row2->status,'ord_status'=>$row2->ord_status,'short_status'=>$row2->short_status,'size'=>$row2->size,'name'=>$row2->name,'email'=>$row2->email,'contact'=>$row2->contact,'gender'=>$row2->gender,'city'=>$row2->city,'blood'=>$row2->blood,'emergency'=>$row2->emergency,'dob'=>$row2->dob,'merch_id'=>$row2->merch_id,'flag_off'=>$flag_off,'event_name'=>$event_name,'event_date'=>$event_date,'event_venue'=>$event_venue,'qr'=>$row2->qr);




}
    //$data2=$result2;
    
        $data[]=array('oid'=>$oid,'todate'=>$row->todate,'trnid'=>$row->trnid,'ord_type'=>$row->ord_type,'prod_total'=>$row->sub_total,'del_charges'=>$row->del_charges,'items'=>$data2);   
      
}
return $data;


}





public function retrive_ticket($id){


$data=array();

        $data2=array();
        

$query2=$this->db->get_where('order_item', array('id'=>$id,'status'=>0));

if($query2->num_rows()>0){

foreach ($query2->result() as $row2)
{

        $oid = $row2->oid;

        $pid = $row2->pid;


$query=$this->db->get_where('order_list', array('id'=>$oid));

//$result2[]=$query2->row_array();
foreach ($query->result() as $row)
{
$todate=$row->todate;
$trnid=$row->trnid;
}        

$query3=$this->db->get_where('products', array('id'=>$pid));
foreach ($query3->result() as $row3)
{
$mainid=$row3->mainid;
$flag_off=$row3->flag_off;
}

$query4=$this->db->get_where('main_cat', array('mainid'=>$mainid));
foreach ($query4->result() as $row4)
{
$event_name=$row4->name;
$event_date=$row4->event_date;
$event_venue=$row4->venue;
}



        $data2[]=array('id'=>$row2->id,'pid'=>$row2->pid,'pname'=>$row2->pname,'price'=>$row2->price,'mrp'=>$row2->mrp,'oid'=>$row2->oid,'status'=>$row2->status,'ord_status'=>$row2->ord_status,'short_status'=>$row2->short_status,'size'=>$row2->size,'name'=>$row2->name,'email'=>$row2->email,'contact'=>$row2->contact,'gender'=>$row2->gender,'city'=>$row2->city,'blood'=>$row2->blood,'emergency'=>$row2->emergency,'dob'=>$row2->dob,'merch_id'=>$row2->merch_id,'flag_off'=>$flag_off,'event_name'=>$event_name,'event_date'=>$event_date,'event_venue'=>$event_venue,'qr'=>$row2->qr);




}
    //$data2=$result2;
    
        $data[]=array('oid'=>$oid,'todate'=>$todate,'trnid'=>$trnid,'items'=>$data2);   
      
}else{
  $data=array();  
}
return $data;



}





}

 ?>
