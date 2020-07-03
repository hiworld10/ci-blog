<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog extends Model
{
    protected $table = 'posts';
    // REQUIRED PROPERTY FOR CODEIGNITER
    protected $allowedFields = [
        'title', 'slug', 'body'
    ];

    public function getPosts($slug = null)
    {
        if (!$slug) {
            return $this->findAll();
        }

        return $this->asArray() 
                    ->where(['slug' => $slug])
                    ->first();
    }
    
}

?>
