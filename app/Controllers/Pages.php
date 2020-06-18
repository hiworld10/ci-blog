<?php 

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo "Pages controller index";
    }

    public function showMe($page = 'home')
    {
        echo "This page is " . $page;
    }

    //--------------------------------------------------------------------

}
