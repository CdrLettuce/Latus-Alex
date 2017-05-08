<?php
class profileupdateController extends Controller
{
        public function updateProfile(){
                $data = array();
                // authenticate the user
                $data = $this->model->updateProfile();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }
        
        public function updateCoachProfile(){
                $data = array();
                // authenticate the user
                $data = $this->model->updateCoachProfile();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }

}
