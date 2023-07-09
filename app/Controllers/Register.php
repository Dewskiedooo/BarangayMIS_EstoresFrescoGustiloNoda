<?php

namespace App\Controllers;

class Register extends BaseController
{   
    public function __construct(){
        helper(['url','form']);
    }
    public function index(){

        
         return view('register_view');
        
}
}