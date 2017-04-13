
<?php

class profileupdateModel extends Model
{

        public function updateProfile(){
                $table = 'player_profile';

                //obtain data
                $user_data = json_decode(file_get_contents('php://input'));
                //define SQL statement
                $values = $user_data;
                /*
                
                $data = array('customer_id'=>$values->custId,
                                'product_id'=>$values->prodId,
                                'quantity'=>$values->quan);
    
                 */
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



}