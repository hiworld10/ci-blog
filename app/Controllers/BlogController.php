<?php 

namespace App\Controllers;

use App\Models\Blog;


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

        echo view('blog/post');    
    }

    public function create()
    {
        helper('form');
        $blog = new Blog();

        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required'
        ])) {
            echo view('blog/create');
        } else {
            $blog->save(
                [
                    'title' => $this->request->getVar('title'),
                    'body' => $this->request->getVar('body'),
                    'slug' => url_title($this->request->getVar('title')),
                ]
            );

            return redirect()->to('/');
        }
    }

    //--------------------------------------------------------------------

}
