<?php
class LoginModel extends Model
{
        public function checkLogin(){
                $sql = "SELECT user_id, first_name, last_name 
                        FROM `users`  
                        WHERE email = :username and password = :pwd";
                $this->setSql($sql);
        $data = json_decode(file_get_contents('php://input'));
                $values = array(':username'=>$data->username, ':pwd'=>$data->password);
                $result = $this->getOne($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }

}

?>

