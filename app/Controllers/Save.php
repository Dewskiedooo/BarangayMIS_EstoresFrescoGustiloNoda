<?php

namespace App\Controllers;

class Save extends BaseController
{   

    public function save(){

       $validation = $this->validate([
        'username'=>'required',
        'password'=>'required|min_length[5]|max_length[12]'
        ]);

    // $validation = $this->validate([
    //     'username'=>[
    //         'rules'=>'required',
    //         'error'=>[
    //             'required'=>'Your username is required'
    //         ]
    //         ],
    //     'password'=>[
    //         'rules'=>'required|min_length[5]|max_length[12]',
    //         'errors'=>[
    //             'required'=>'Password is required',
    //             'mind_length'=>'Password must have atleast 5 characters',
    //             'max_length'=>'Password must not have characters more than 12'
    //         ]
    //         ],   

    //         ]);
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