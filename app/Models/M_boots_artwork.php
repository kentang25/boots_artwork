<?php

    namespace App\Models;
    Use CodeIgniter\Model;

    Class M_boots_artwork extends Model
    {
        protected $table = 'tb_artwork';
        protected $primaryKey = 'id';
        protected $allowedFields = ['title', 'deskripsi', 'gambar','id_kategori'];

        public function getBootsArtwork($id = false)
        {
            if($id == false){
                return $this->findAll();
            }else{
                return $this->where(['id' => $id])->first();
            }
        }

        public function getArtwork()
        {
            return $this->select('tb_artwork.*, tb_kategori.kategori')
                        ->join('tb_kategori', 'tb_artwork.id_kategori = tb_kategori.id_kategori')
                        ->findAll();
        }

        public function getKategori($kategori)
        {
            return $this->select('tb_artwork.*, tb_kategori.nama_kategori')
                        ->join('tb_kategori', 'tb_artwork.id_kategori = tb_kategori.id')
                        ->where('tb_kategori.nama_kategori', $kategori)
                        ->findAll();
        }
    }



?>