<?php

namespace App\Controllers;

use App\Models\CustomModel;

class Posts extends BaseController
{
    public function index(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $results = $model->all();
        echo '<pre>';
        print_r($results);
        echo '</pre>';
        return view("home");
    }

    public function where(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $results = $model->where();
        echo '<pre>';
        print_r($results);
        echo '</pre>';
        return view("home");
    }

    public function join(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $results = $model->join();
        echo '<pre>';
        print_r($results);
        echo '</pre>';
        return view("home");
    }

    public function like(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $results = $model->like();
        echo '<pre>';
        print_r($results);
        echo '</pre>';
        return view("home");
    }

    public function grouping(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $results = $model->grouping();
        echo '<pre>';
        print_r($results);
        echo '</pre>';
        return view("home");
    }


    public function validation(){
    }


}
