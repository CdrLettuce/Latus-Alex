<?php
class messagesController extends Controller
{
        public function get(){
                $data = array();
                // authenticate the user
                $data = $this->model->getfavoritedplayers();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }

}
