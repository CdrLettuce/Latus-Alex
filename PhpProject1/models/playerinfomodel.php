<?php

class PlayerInfoModel extends Model
{

        public function getPlayerInfo($parameter){
                // define SQL statement
                $sql = "SELECT city, state
                        FROM `users`
                        WHERE user_id = :userId";
                // set model's SQL
                $this->SetSql($sql);
                // define values for the parameters
                $values = array(':userId'=>$parameter);
                // obtain and return data
                return $this->getAll($values);
        }


}
