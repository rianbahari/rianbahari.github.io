<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('user_id, user_name, user_password, nama_user, user_title');
   $this -> db -> from('users');
   $this -> db -> where('user_name', $username);
   $this -> db -> where('user_password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>