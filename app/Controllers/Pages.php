<?php 

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('inc/header');
        echo view('pages/home');    
        echo view('inc/footer');
    }

    public function show($page = 'home')
    {

        if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        echo view('inc/header');
        echo view('pages/' . $page);    
        echo view('inc/footer');
    }

    //--------------------------------------------------------------------

}
