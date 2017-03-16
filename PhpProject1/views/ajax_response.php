<?php

if (isset($this->data_set) && count($this->data_set) > 0)
	echo json_encode($this->data_set);
else
	echo "-1";





?>
