<?php
class signupController extends Controller
{

        public function coachSignup1(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/coach/coach1.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function coachSignupFinal(){
                $data = array();
                $data = $this->model->addCoach();
                // define template
                $this->setView('views/coach/coachConfirmation.php');
                // display output
                $this->view->setData($data);
                $this->view->output();         
        }  
        
        public function playerSignup1(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/player/Player1.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function playerSignupFinal(){
                $data = array();
                $data = $this->model->addPlayer();
                // define template
                $this->setView('views/coach/playerConfirmation.php');
                // display output
                $this->view->setData($data);
                $this->view->output();         
        } 

        
}

?>

