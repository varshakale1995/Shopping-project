<?php
class Empmodel extends CI_Model
{
    public function savedata($fname,$lname)
    {
        
        $query="insert into student values('','$fname','$lname')";
        $this->db->query($query);
    }
}
?>