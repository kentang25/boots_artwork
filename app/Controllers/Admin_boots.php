<?php

    namespace App\Controllers;
    Use App\Models\M_boots_artwork;

    Class admin_boots extends BaseController
    {

        public function __construct()
        {
            $this->ArtworkModel = new M_boots_artwork();
        }
        public function index()
        {
            $data = [
                'title' => 'Admin Boots Artwork',
                'boots_artwork' => $this->ArtworkModel->getBootsArtwork()
            ];

            return view('admin_boots/v_admin', $data);
        }

        public function save()
        {
            $fileGambar = $this->request->getFile('gambar');
            $nameGambar = $fileGambar->getRandomName();
            $fileGambar->move('img_uploads', $nameGambar);

            $rules = [
                'title' => 'required',
                'deskripsi' => 'required',
                // 'gambar' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
            ];

            if(!$this->validate($rules)){
                return redirect()->to('/admin')->withInput();
            }

            $this->ArtworkModel->save([
                'title' => $this->request->getPost('title'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $nameGambar
            ]);

            return redirect()->to('/admin');
        }
    }

?>