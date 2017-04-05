<?php
class PlayerInfoController extends Controller
{
        public function getPlayerInfo($parameter){
                $data = array();
                // authenticate the user
                $data = $this->model->getPlayerInfo($parameter);
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }


}