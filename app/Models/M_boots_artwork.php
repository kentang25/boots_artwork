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

        // public function getArtwork()
        // {
        //     return $this->select('tb_artwork.*, tb_kategori.kategori')
        //                 ->join('tb_kategori', 'tb_kategori.id_kategori = tb_artwork.id_kategori')
        //                 // ->where('tb_artwork.id_kategori', 4)
        //                 // ->limit(4)
        //                 ->findAll();
        // }

        public function getArtwork()
        {
            $artwork = $this->select('tb_artwork.*, tb_kategori.kategori')
                        ->join('tb_kategori', 'tb_kategori.id_Kategori = tb_artwork.id_kategori')
                        ->where('tb_kategori.kategori', 'Art')
                        ->limit(4)
                        ->findAll();
            
            $border = $this->select('tb_artwork.*, tb_kategori.kategori')
                        ->join('tb_kategori', 'tb_kategori.id_kategori = tb_artwork.id_kategori')
                        ->where('tb_kategori.kategori', 'Border')
                        ->limit(4)
                        ->findAll();

            return [
                'art'       => $artwork,
                'border'    => $border
            ];
        }

        public function getKategori($kategori)
        {
            return $this->select('tb_artwork.*, tb_kategori.kategori')
                        ->join('tb_kategori', 'tb_artwork.id_kategori = tb_kategori.id_kategori')
                        ->where('tb_kategori.kategori', $kategori)
                        ->findAll();
        }
    }



?>