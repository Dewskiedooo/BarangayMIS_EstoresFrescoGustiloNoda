<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        $data =[
            'page_title' => 'Barangay Management Information System',
            'page_heading' => 'Residents Record List',
            'page_heading1' => 'Barangay Officials List',

        ];
        
        return view('dashboard_view',$data);
        
    }
}
