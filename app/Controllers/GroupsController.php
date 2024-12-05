<?php

class GroupsController {

    public static function home() {

        include 'Views/Home.php';
    }

    public static function insert() {

        include 'Models/GroupsModel.php';

        $model = new GroupsModel();

        $model-> host_name = $_POST['hostname'];
        $model-> group_name = $_POST['groupname'];
        $model-> group_desc = $_POST['descgroup'];
        $model-> celebration_date = $_POST['celebrationdate'];
        $model-> budget = $_POST['budget'];

        $participants = [];
        foreach ($_POST as $key => $value) {
        if (strpos($key, 'member') === 0 && !empty($value)) {
            $participants[] = $value;
        }}

        $model->participants = $participants;

        $model->create();

        header("Location: /wematch/app/");
    }

    public static function viewgroup() {
        include 'Views/Viewgroup.php';
    }

}