<?php

Class UserModel extends CI_Model {

    function login($email, $password) {
        $this->db->select('id, email, password,sup_user as role');
        $this->db->from('survey_users');
        $this->db->where('email', $email);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function insertUser( $email, $password, $sup_user = 0) {
       $user_to_add = array(
            'email' => $email,
			'password' => MD5($password),
            'sup_user' => $sup_user);
		
    $this->db->select('*');
    $this->db->from('kappo_users');
    $this->db->where('email',$email);//you can use another field
    if ($this->db->count_all_results() == 0) {
         $this->db->insert('survey_users', $user_to_add);//insert data
		 return true;
    } 
		

		
    }
	 public function checkUserExisting( $email){
	 
	 }
	

    public function updateUser($id, $email, $password, $sup_user = 0) {
        $this->db->update();
    }

    public function getAllUsers() {
        $this->db->select('id,email,password,sup_user');
        $this->db->where_not_in('id',1);
        $this->db->from('survey_users');
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function deleteUser($id) {
        $this->db->where('id', $id);
        $this->db->delete('survey_users');
        return true;
    }

}

?>