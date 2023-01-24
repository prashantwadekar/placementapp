<?php 

class Login_model extends CI_Model {


	function checkPassword($std_password,$std_username)
	{
		$query = $this->db->query("SELECT * FROM createaccount_master WHERE std_password='$std_password' AND std_username='$std_username'");
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}

	}

}