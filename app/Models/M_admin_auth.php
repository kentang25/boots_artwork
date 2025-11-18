<?php

    namespace App\Models;
    use CodeIgniter\Model;

    Class M_admin_auth extends Model{
        protected $table = 'tb_auth_admin';
        protected $primaryKey = 'id_admin';
        protected $allowedFields = ['username', 'password'];

        public function getByUsername($username)
        {
            return $this->where('username', $username)->first();
        }

    }

?>