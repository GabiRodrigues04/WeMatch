<?php

class GroupsModel {

    public $group_id, $host_name, $group_name, $creation_date, $group_desc, $celebration_date, $budget;

    public function create() {

        include_once 'DAO/GroupDao.php';

        $dao = new GroupDao($this);
        $dao->insert($this);
    }

}