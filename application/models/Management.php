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

    // function check old pass
    function check_passw($oldpass){
        $this->db->select('id');
        $this->db->from('users');
        return $this->db->where('password',$oldpass)->get();
    }

    // function change new pass
    function change_passw($id,$arr){
        $this->db->where('id',$id);
        $res = $this->db->update('users',$arr);
        if($res == 1){
            return $code = 1;
        }
        return $code = 0;
    }

    // function delete user by id
    function delete_user($id){
        $this->db->where('id',$id);
        $res = $this->db->delete('users');
        if($res == 1){
            return $code = 1;
        }
        return $code = 0;
    }

    // function get list users
    function get_users_list(){
        $this->db->select('id,fullname,email,role,date_created,last_login');
        return $this->db->from('users')->get();
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

    function add_user($arr){
        $res = $this->db->insert('users', $arr);
        if($res == 1){
            return $code = 1;
        }
        return $code = 0;
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