<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog extends Model
{
    protected $table = 'blog';

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
