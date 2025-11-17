<?php

    namespace App\Controllers;
    use App\Models\M_admin_login;

    Class Boots_login extends BaseController{
        protected AdminLoginModel;

        public function __construct()
        {
            $this->AdminLoginModel = new M_admin_login();
        }

        public function login()
        {
            
        }
    }

?>