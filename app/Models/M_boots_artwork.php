<?php

    namespace App\Models;
    Use CodeIgniter\Model;

    Class M_boots_artwork extends Model
    {
        protected $table = 'tb_artwork';
        protected $primaryKey = 'id';
        protected $allowedFields = ['title', 'deskripsi', 'gambar'];

        public function getBootsArtwork($id = false)
        {
            if($id == false){
                return $this->findAll();
            }else{
                return $this->where(['id' => $id])->first();
            }
        }
    }



?>