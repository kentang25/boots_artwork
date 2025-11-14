<?php

    namespace App\Controllers;
    Use App\Models\M_boots_artwork;
    use App\Models\M_boots_artwork_kategori;

    Class admin_boots extends BaseController
    {

        public function __construct()
        {
            $this->ArtworkModel = new M_boots_artwork();
            $this->KategoriModel = new M_boots_artwork_kategori();
        }
        public function index()
        {
            $data = [
                'title' => 'Admin Boots Artwork',
                'boots_artwork' => $this->ArtworkModel->getBootsArtwork(),
                'validation' => session()->getFlashdata('validation') ?? \Config\Services::validation(),
                'kategori' => $this->KategoriModel->findAll()
            ];

            return view('admin_boots/v_admin', $data);
        }

        public function save()
        {
            $rules = [
                'title' => 'required',
                'deskripsi' => 'required',
                // 'gambar' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
            ];

            if(!$this->validate($rules)){
                return redirect()->to('/admin_boots')->withInput()->with('validation', $this->validator);
            }

            $fileGambar = $this->request->getFile('gambar');
            $nameGambar = $fileGambar->getRandomName();
            $fileGambar->move('img_uploads', $nameGambar);

            $this->ArtworkModel->save([
                'title'     => $this->request->getPost('title'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar'    => $nameGambar,
                'id_kategori'  => $this->request->getPost('kategori')
            ]);

            return redirect()->to('/admin_boots');
        }

        public function edit($id)
        {
            $data = [
                'title' => 'Edit Boots Artwork',
                'edit_artwork' => $this->ArtworkModel->getBootsArtwork($id)
            ];

            return view('admin_boots/v_edit', $data);
        }

        public function update($id)
        {
            $rules = [
                'title' => 'required',
                'deskripsi' => 'required'
            ];

            if(!$this->validate($rules)){
                return redirect()->to('/admin_boots/edit/' . $id)->withInput()->with('validation', $this->valdatior);
            }

            $this->ArtworkModel->save([
                'id' =>$id,
                'title' => $this->request->getPost('title'),
                'deskripsi' => $this->request->getPost('deskripsi')
            ]);

            return redirect()->to('/admin_boots');
        }

        public function delete($id)
        {
            $this->ArtworkModel->delete($id);
            return redirect()->to('/admin_boots');
        }
    }

?>