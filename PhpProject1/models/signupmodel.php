<?php

class signupModel extends Model{

        /*
        public function playerSignup(){
            $sql = '';
            $this->SetSql($sql);
            return $this->getAll();
        }
        */
    
    public function addCoach(){
           
            $sql = 'INSERT INTO users (first_name, last_name, email, city, state_id, zip, phone, role_id, sport_id, password)
                    values (:first_name, :last_name, :email, :city, :state, :zip, :phone, :role_id, :sport_id, :password)';
            $this->SetSql($sql);
            $values = array(':first_name'=>$_POST['fname'],
                            ':last_name'=>$_POST['lname'],
                            ':email'=>$_POST['email'],
                            ':city'=>$_POST['city'],
                            ':state'=>$_POST['state'],
                            ':zip'=>$_POST['zip'],
                            ':phone'=>$_POST['phone'],
                            ':password'=>$_POST['password'],
                            ':role_id'=>'2',
                            ':sport_id'=>'1');
            return $this->setAll($values);
        }
        public function addPlayer(){
            
            $sql = 'INSERT INTO users (first_name, last_name, email, city, state_id, zip, phone, role_id, sport_id, gender, password)
                    values (:first_name, :last_name, :email, :city, :state, :zip, :phone, :role_id, :sport_id, :gender, :password)';
            $this->SetSql($sql);
            $values = array(':first_name'=>$_POST['fname'],
                            ':last_name'=>$_POST['lname'],
                            ':email'=>$_POST['email'],
                            ':city'=>$_POST['city'],
                            ':state'=>$_POST['state'],
                            ':zip'=>$_POST['zip'],
                            ':phone'=>$_POST['phone'],
                            ':gender'=>$_POST['gender'],
                            ':password'=>$_POST['password'],
                            ':role_id'=>'1',
                            ':sport_id'=>'1');
            return $this->setAll($values);
        }
}
