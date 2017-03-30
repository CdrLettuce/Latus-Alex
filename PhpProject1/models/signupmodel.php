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
            console.log("Hello");
            $sql = 'INSERT INTO users (first_name, last_name, email, city, state, zip, phone)
                    values (:first_name, :last_name, :email, :city, :state, :zip, :phone)';
            $this->SetSql($sql);
            $values = array(':first_name'=>$_POST['fname'],
                            ':last_name'=>$_POST['lname'],
                            ':email'=>$_POST['email'],
                            ':city'=>$_POST['city'],
                            ':state'=>$_POST['state'],
                            ':zip'=>$_POST['zip'],
                            ':phone'=>$_POST['phone']);
            return $this->setAll($values);
        }
        public function addPlayer(){
            console.log("Hello");
            $sql = 'INSERT INTO users (first_name, last_name, email, city, state, zip, phone)
                    values (:first_name, :last_name, :email, :city, :state, :zip, :phone)';
            $this->SetSql($sql);
            $values = array(':first_name'=>$_POST['fname'],
                            ':last_name'=>$_POST['lname'],
                            ':email'=>$_POST['email'],
                            ':city'=>$_POST['city'],
                            ':state'=>$_POST['state'],
                            ':zip'=>$_POST['zip'],
                            ':phone'=>$_POST['phone']);
            return $this->setAll($values);
        }
}
