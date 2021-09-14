<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Model {

    // function check existension user on db
    function check_user($email,$pass){
        $this->db->select('id,fullname,email,role,last_login');
        $this->db->from('users');
        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        return $this->db->get();
    }

    // function get list student
    function get_students_list(){
        $this->db->select('id,nis,fullname,email,address,phone,grade,date_created,last_login,score');
        return $this->db->from('students')->get();
    }

    // function update record last login admin
    function last_login(){
        $arr = array(
            'last_login' => date('Y-m-d H:i:s'),
        );
        $this->db->where('id',$_SESSION['id']);
        $this->db->update('users', $arr);
    }

    // function add user
    function add_student($arr){
        $res = $this->db->insert('students', $arr);
        if($res == 1){
            return $code = 1;
        }
        return $code = 0;
    }

    // function update user
    function update_student($id,$arr){
        $this->db->where('id',$id);
        $res = $this->db->update('students', $arr);
        if($res == 1){
            return $code = 1;
        }
        return $code = 0;
    }

    function delete_student($id){
        $this->db->where('id',$id);
        $res = $this->db->delete('students');
        if($res == 1){
            return $code = 1;
        }
        return $code = 0;
    }

}

/* End of file Management.php */

?>