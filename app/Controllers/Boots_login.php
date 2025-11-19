<?php

namespace App\Controllers;
use App\Models\M_admin_auth;

class Boots_login extends BaseController
{
    protected $AdminAuthModel;
    protected $session;

    public function __construct()
    {
        $this->AdminAuthModel = new M_admin_auth();
        $this->session = session();
    }


    public function index()
    {
        return view('admin_boots/auth/v_auth');
    }

    public function login()
    {
        // return view('admin_boots/auth/v_auth');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $this->AdminAuthModel->getByUsername($username);

        // dd($admin);
        

        if ($admin == true) {
            $this->session->set('isLoggedIn', true);
            $this->session->set('adminUsername', $admin['username']);

            return redirect()->to('/admin_boots');
        } else {
            return redirect()->to('/boots_login/login')->with('error', 'Invalid username or password');
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/boots_login/login');
    }
}

?>
