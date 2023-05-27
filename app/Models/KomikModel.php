<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'data_komik';
    protected $userTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'tahun_terbit'];

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}