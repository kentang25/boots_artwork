<?php

    namespace App\Controllers;
    Use App\Models\M_boots_artwork;

    Class boots_artwork extends BaseController{
        protected $ArtworkModel;

        public function __construct()
        {
            $this->ArtworkModel = new M_boots_artwork();
        }

        public function index()
        {
            $data = [
                'title' => 'Boots Artwork',
                'boots_artwork' => $this->ArtworkModel->getBootsArtwork()
            ];

            return view('boots_artwork/v_boots_artwork', $data);
        }

        public function detail($id)
        {
            $data = [
                'title'     => 'Detail Artwork',
                'artwork'   => $this->ArtworkModel->getBootsArtwork($id)
            ];

            if(empty($data['artwork'])){
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Artwork dengan ID ' . $id . ' tidak ditemukan.');
            }else{
                return view('boots_artwork/v_boots_artwork_detail', $data);
            }
        }


        public function gallery()
        {
            $all = $this->ArtworkModel->getArtwork();

            $kategori = [];
            foreach($all as $art){
                $kategori[$art['kategori']][] = [
                    'title' => $art['title'],
                    'gambar' => $art['gambar'],
                    'deskripsi' => $art['deskripsi']
                ];
            }

            $data = [
                'title'     => 'Gallery Artwork',
                'kategori'  => $kategori
            ];

            return view('boots_artwork/v_boots_artwork_gallery', $data);
        }

        public function list_kategory($kategori)
        {
            $art = $this->ArtworkModel->getKategori($kategori);

            $data = [
                'title'         => 'Kategori: ' . $kategori,
                'boots_artwork' => $art,
                'kategori'      => $kategori
            ];

            return view('boots_artwork/', $data);
        }
    }

?>