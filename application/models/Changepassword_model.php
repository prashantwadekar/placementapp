<?php 

class Changepassword_model extends CI_Model {


	function fetch_pass($session_id)
	{
	$fetch_pass=$this->db->query("select * from createaccount_master where id='$session_id'");
	$res=$fetch_pass->result();
	}
	function change_pass($session_id,$new_pass)
	{
	$update_pass=$this->db->query("UPDATE createaccount_master set pass='$new_pass'  where id='$session_id'");
	}


}