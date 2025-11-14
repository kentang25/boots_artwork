<?php

    namespace App\Models;
    use CodeIgniter\Model;

    Class M_boots_artwork_kategori extends Model
    {
        protected $table = 'tb_kategori';
        protected $primaryKey = 'id_kategori';
        protected $allowedFields = ['kategori'];
    }

?>