<?php 

namespace App\Controllers;

use App\Models\Blog;

class PagesController extends BaseController
{
    public function index()
    {
        $blog_model = new Blog();
        $data['posts'] = $blog_model->getPosts();

        echo view('pages/home', $data);    
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
