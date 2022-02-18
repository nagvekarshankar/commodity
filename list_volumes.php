<?php
    include_once('config/config.php');

    class KyosListVolumesController {

        function __construct() {
            include_once('classes/kyos_model.php');
            $this->kyos_model = new Kyos_model();

            $this->index();
        }

        function index() {
            $id				= isset($_REQUEST['id'])?$_REQUEST['id']:'';
            $granularity	= isset($_REQUEST['granularity'])?$_REQUEST['granularity']:'hourly';

            $rows = $this->kyos_model->list_volumes($id,$granularity);
            include_once('templates/kyos_view_volumes.php');
        }
    }

    $a = new KyosListVolumesController();
