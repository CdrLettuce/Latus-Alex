<?php

class LoginModel extends Model
{
	public function checkLogin(){
		// define SQL statement
		$sql = "SELECT user_id, first_name, last_name
			FROM `testUsers` WHERE email = :username
			AND password = :pwd";
		// set model's SQL 
		$this->SetSql($sql);
		// define values for the parameters
		$values = array(':username'=>$_POST['username'],
				':pwd'=>($_POST['pwd']));
		// obtain and return data
		return $this->getOne($values);

	}

}

?>

