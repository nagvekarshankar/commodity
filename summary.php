<?php
    include_once('config/config.php');

    class KyosIndexController {

        function __construct() {
            include_once('classes/kyos_model.php');
            $this->kyos_model = new Kyos_model();

            $this->index();
        }

        function index() {
            $params = array();
            $rows = $this->kyos_model->list_rows($params);
            $hash = [];
           
            foreach ($rows as $key => $row) { 
               if(!empty($hash[$row['commodity']])) {
                $hash[$row['commodity']] = $hash[$row['commodity']].'-'.$row['id'];
               }else{
                $hash[$row['commodity']] = $row['id'];
               }
            } 
            array_multisort(array_column($rows, 'commodity'), SORT_DESC, $rows);
            include_once('templates/kyos_summary.php');
        }
    }

    $a = new KyosIndexController();
