<?php 

class Forget_model extends CI_Model {


	function checkEmail($std_email)
	{
		$query = $this->db->query("SELECT * FROM createaccount_master WHERE std_email='$std_email'");
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