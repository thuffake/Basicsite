class Model_Submit extends CI_Model{
    	
		function construct(){
			parent::__construct();
		}
function view_request(){
	
    $query = $this->db->select('*')->from('users')->get();
    return $query->result();
}

    