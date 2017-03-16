<?php

class PPModel extends Model{


        /*
        public function playerSignup(){
            $sql = '';
            $this->SetSql($sql);
            return $this->getAll();
        }
        */
        
        public function addBetaPlayer(){
            console.log("Hello");
            $sql = 'INSERT INTO prospectivePlayers (first_name, last_name, email)
                    values (:first_name, :last_name, :email)';
            $this->SetSql($sql);
            $values = array(':first_name'=>$_POST['first_name'],
                            ':last_name'=>$_POST['last_name'],
                            ':email'=>$_POST['email']);
            return $this->setAll($values);
        }
        
        public function addBetaCoach(){
            console.log("Hello");
            $sql = 'INSERT INTO prospectiveCoaches (first_name, last_name, email)
                    values (:first_name, :last_name, :email)';
            $this->SetSql($sql);
            $values = array(':first_name'=>$_POST['first_name'],
                            ':last_name'=>$_POST['last_name'],
                            ':email'=>$_POST['email']);
            return $this->setAll($values);
        }
        

}
