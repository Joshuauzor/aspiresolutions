<?php 
defined ('BASEPATH') OR exit('No direcr script access allowed');

class Customer_model extends CI_Model {

    function insert_data_into_table ($data){
        return $this->db->insert("users",$data);
    }

    function get_user_by_email($email){
        $this->db->where(array('email' => $email ));
        return $this->db->get("users")->row();
    }

}