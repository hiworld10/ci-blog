<?php 

namespace App\Controllers;

class BlogController extends BaseController
{
    public function index()
    {
        echo "Blog index";
    }

    public function post($slug)
    {
        if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        echo view('inc/header');
        echo view('blog/post');    
        echo view('inc/footer');
    }

    //--------------------------------------------------------------------

}
