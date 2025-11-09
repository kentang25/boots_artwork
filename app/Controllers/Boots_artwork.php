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
    }

?>