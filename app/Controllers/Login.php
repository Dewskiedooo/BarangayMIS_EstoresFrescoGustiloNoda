<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(){
        
        return view ("login_view");
    }
    
    
    function Login(){

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $loginModel = new \App\Models\LoginModel();
        $user_info = $loginModel->where('username',$username)->first();
        $user_pass = $loginModel->where('password',$password)->first();
        // $check_password = Hash::check($password, $user_info['password']);
        if(!$user_info and !$user_pass){ 
            return redirect()->to('Dashboard')->withInput();
        }
    }
}
