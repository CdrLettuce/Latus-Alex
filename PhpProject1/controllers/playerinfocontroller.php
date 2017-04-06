<?php
class PlayerinfoController extends Controller
{

        public function getPlayerInfo(){

                $data = array();
                $response_data = $this->model->getPlayerInfo();

                $this->setView(BASE_DIR.DS.'views/ajax_response.php');
                $this->view->setData($response_data);
                $this->view->output();
        }
        public function getPlayerInfo2(){

                $data = array();
                $response_data = $this->model->getPlayerInfo2();

                $this->setView(BASE_DIR.DS.'views/ajax_response.php');
                $this->view->setData($response_data);
                $this->view->output();
        }

}

?>