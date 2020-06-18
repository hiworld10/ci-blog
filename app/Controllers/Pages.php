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

        if (!is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        //This will be shown in page title
        $data['title'] = ucfirst($page);

        echo view('inc/header', $data);
        echo view('pages/' . $page, $data);    
        echo view('inc/footer', $data);
    }

    //--------------------------------------------------------------------

}
