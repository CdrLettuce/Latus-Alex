<?php
class aboutController extends Controller
{

        public function aboutUs(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/aboutUs.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
}

?>