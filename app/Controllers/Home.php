<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct() {
        helper('form');
    }
    public function index()
    {
        return view('login_view');
    }

    public function dashboard()
    {
        return view('dashboard_view');
    }
    
}
