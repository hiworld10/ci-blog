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
        $blog = new Blog();

        $data['post'] = $blog->getPosts($slug);

        echo view('blog/post', $data);    
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

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'New post was created.');

            return redirect()->to('/');
        }
    }

    //--------------------------------------------------------------------

}
