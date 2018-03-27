<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Mdata extends CI_Model
{
	    public $table = "tbmhs";  
      public $select_column = array("id", "nim", "nama", "email");  
      public $order_column = array(null, "nim", "nama", null, null);  

      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nim", $_POST["search"]["value"]);  
                $this->db->or_like("nama", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('nim', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      }

      //query insert data
  function insert_all($table,$data) {
    $this->db->insert($table,$data);
  }

    function update_all($where,$data,$table) {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  // chech or ambil all data
  function check_all($table,$where,$limit) {
  $query = $this->db->get_where($table,$where,$limit);
    if($query->num_rows()==1)
    {
      return $query->result();
    }
    else {
      return false;
    }
  }

          function delete_data($nim)  
      {  
           $this->db->where("nim", $nim);  
           $this->db->delete("tbmhs");  
           //DELETE FROM users WHERE id = '$user_id'  
      }

        function tampil_data($table){
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
      }   

	}

?>
