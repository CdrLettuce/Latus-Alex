
<?php

class profileupdateModel extends Model
{
        /*
        public function updateProfile(){
                $table = 'player_profile';

                //obtain data
                $user_data = json_decode(file_get_contents('php://input'));
                //define SQL statement
                $values = $user_data;
                $data = array('user_id'=>$values->userID,
                                'position_1'=>$values->position,
                                'bio'=>$values->bio,
                                'height'=>$values->height,
                                'weight'=>$values->weight,
                                'h_school'=>$values->school,
                                'gpa'=>$values->gpa,
                                'graduation_date'=>$values->grad,
                                'youtube_urls'=>$values->videourl,
                                'image'=>$values->picture);
                // insert new record
                $this->insertRecord($table,$data);
                return 1;     
        }
        */
        public function updateProfile(){
                $user_data = json_decode(file_get_contents('php://input'));
                $values = $user_data;
                $data = array(':user_id'=>$values->userID);
                
                $sql = "SELECT profile_id 
                        FROM `player_profile` 
                        WHERE user_id = :user_id";
                
                $this->setSql($sql);
                $result = $this->getOne($data);
                
                if (!$result)
                    $result = -1;
                else 
                    $result = 1;
                    
                if($result == -1){
                    $table = 'player_profile';

                    //obtain data
                    $user_data = json_decode(file_get_contents('php://input'));
                    //define SQL statement
                    $values = $user_data;
                    $data = array('user_id'=>$values->userID,
                                    'position_1'=>$values->position,
                                    'bio'=>$values->bio,
                                    'height'=>$values->height,
                                    'weight'=>$values->weight,
                                    'h_school'=>$values->school,
                                    'gpa'=>$values->gpa,
                                    'graduation_date'=>$values->grad,
                                    'youtube_urls'=>$values->videourl,
                                    'image'=>$values->picture);
                    // insert new record
                    $this->insertRecord($table,$data);
                    return 1;    
                }
                else{
                    /*
                    $sql = 'UPDATE `player_profile`
                            SET position_1 = :position_1,
                                bio = :bio,
                                height = :height,
                                weight = :weight,
                                h_school = :h_school,
                                gpa = :gpa,
                                graduation_date = :graduation_date,
                                youtube_urls = :youtube_urls,
                                image = :image 
                            WHERE user_id = :user_id';
                    $this->setSql($sql);
                    $data2 = json_decode(file_get_contents('php://input'));
                    $data3 = $data2;
                    $values2 = array(':user_id'=>$data3->user_id,
                                    ':position_1'=>$data3->position,
                                    ':bio'=>$data3->bio,
                                    ':height'=>$data3->height,
                                    ':weight'=>$data3->weight,
                                    ':h_school'=>$data3->school,
                                    ':gpa'=>$data3->gpa,
                                    ':graduation_date'=>$data3->grad,
                                    ':youtube_urls'=>$data3->videourl,
                                    ':image'=>$data3->picture);
                    $result = $this->setAll($values2);
                     * 
                     */
                    $table = 'player_profile';

                    //obtain data
                    $user_data = json_decode(file_get_contents('php://input'));
                    //define SQL statement
                    $values = $user_data;
                    $data = array('position_1'=>$values->position,
                                    'bio'=>$values->bio,
                                    'height'=>$values->height,
                                    'weight'=>$values->weight,
                                    'h_school'=>$values->school,
                                    'gpa'=>$values->gpa,
                                    'graduation_date'=>$values->grad,
                                    'youtube_urls'=>$values->videourl,
                                    'image'=>$values->picture);
                    $condition = 'user_id = :user_id ';
                    $condition_values = array('user_id'=>$values->userID);
                    // insert new record
                    $this->updateRecord($table,$data, $condition, $condition_values);
                    return 1; 
                    
                }

                
        }
}