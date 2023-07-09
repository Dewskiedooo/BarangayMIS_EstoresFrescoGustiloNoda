<?php

namespace App\Controllers;

class Save extends BaseController
{   

    public function save(){

       $validation = $this->validate([
        'username'=>'required',
        'password'=>'required|min_length[5]|max_length[12]'
        ]);

    
       if(!$validation){
        return view('register',['validation'=>$this->validator]);
       }else{
        //Inserting in database
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        // $Cpassword = $this->request->getPost('Cpassword');

        $values = [
            'username'=>$username,
            'password'=>$password,
            //'Cpassword'=>$Cpassword,
        ];

        $loginModel = new \App\Models\LoginModel();
        $query = $loginModel->insert($values);
        if(!$query){
            return redirect()->back()->with('fail','Something went wrong');
        }else{

            return redirect()->to('register')->with('success','You successfully sucessfully register');
        }
       }
        
}

}