<?php
// Registration Model
// Jason Leyanna 08/2014
class Registration_model extends CI_Model {

	// Constructor
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	// Get all Entries from Database
    function get_all_entries()
    {	
		$this->db->select('*');
		$this->db->order_by("date_time", "desc"); 
	    $this->db->from('helloworld');	
		$query = $this->db->get();		
        return $query->result();
    }

	// Insert Registration Entry
    function insert_entry($data_input)
    {
		$this->db->insert('helloworld', $data_input); 
		return true;
    }
	
	// Update Entry Stub
	function update_entry()
	{
	}

	// Delete Entry Stub
    function delete_entry()
    {
    }

}

?>