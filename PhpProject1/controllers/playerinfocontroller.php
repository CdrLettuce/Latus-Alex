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

}

?>