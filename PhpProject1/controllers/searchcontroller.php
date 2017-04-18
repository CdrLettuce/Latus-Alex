<?php
class SearchController extends Controller
{

        public function searchPlayer(){

                $data = array();
                $response_data = $this->model->searchPlayer();

                $this->setView(BASE_DIR.DS.'views/ajax_response.php');
                $this->view->setData($response_data);
                $this->view->output();
        }


}

?>