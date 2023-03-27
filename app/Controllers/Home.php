<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();

        //cara 1 query builder
        $builder = $db->table('user');
        $query   = $builder->get()->getResult();

        //cara 2 query manual
        // $query   = $db->query('SELECT * FROM user')->getResult();

        // print_r($query);
        $data['user'] = $query;
        return view('welcome_message', $data);
    }
}
