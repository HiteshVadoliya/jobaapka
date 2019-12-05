<?php

class Team_Department_model extends CI_Model 
{
    function __construct() {
        parent::__construct(); 
        
    }

    function allTD_count()
    {   
        $query = $this->db->get('team_department');    
        return $query->num_rows();  
    }
    
    function allTD($limit,$start,$col,$dir)
    {   
       $query = $this->db
                ->limit($limit,$start)
                ->order_by($col,$dir)
                ->get('team_department');
        
        if($query->num_rows()>0)
        {
            return $query->result(); 
        }
        else
        {
            return null;
        }
        
    }
   
    function TD_search($limit,$start,$search,$col,$dir)
    {
        $query = $this->db
                ->like('id',$search)
                ->or_like('title',$search)
                ->limit($limit,$start)
                ->order_by($col,$dir)
                ->get('team_department');
        
       
        if($query->num_rows()>0)
        {
            return $query->result();  
        }
        else
        {
            return null;
        }
    }

    function TD_search_count($search)
    {
        $query = $this->db
                ->like('id',$search)
                ->or_like('title',$search)
                ->get('team_department');
    
        return $query->num_rows();
    } 

    function addTD($Info)
    {
        $this->db->trans_start();
        $this->db->insert('team_department', $Info);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function editTD($Info, $id)
    {

        $this->db->where('id', $id);
        $this->db->update('team_department', $Info);        
        return TRUE;
    }

    function changeStatus($status,$id)
    {

        $status = $status == 'Y' ? 'N': 'Y';
        $this->db->where('id', $id);
        $this->db->update('team_department', array("status"=>$status) );        
        return TRUE;
    }

    function deleteTD($id)
    {
        $count = $this->db->where(['team_categoryId'=>$id])->from("team")->count_all_results();
        if($count == 0){
            
            $this->db->where('id', $id);
            $this->db->delete('team_department');
            return $this->db->affected_rows();

        }else{
            return "This department have assign team";
            exit;
        }
        
    }

    function getTDById($id){

        $this->db->select('id,title,status');
        $this->db->from('team_department');
        $this->db->where('id', $id);
        $query = $this->db->get();        
        return  $query->result();
    }
    function getTDlist(){

        $this->db->select('id,title');
        $this->db->from('team_department');
        $this->db->where('status', 'Y');
        $query = $this->db->get();        
        return  $query->result();
    }
  
   
}