<?php
class job_model extends CI_Model {

    public function get_openings() {
        $this->db->select('*');
        $this->db->from('opening_master');
        $this->db->where('is_active', 1);
        $this->db->where('is_on', 1);
        $this->db->where('deleted_by', NULL);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result(); // use result() instead of result_array()

    }
    

}
?>