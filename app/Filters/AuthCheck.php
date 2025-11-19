<?php

    namespace App\Filters;

    use CodeIgniter\HTTP\RequestInterface;
    use CodeIgniter\HTTP\ResponseInterface;
    use CodeIgniter\Filters\FilterInterface;
    use Config\Services;

    Class AuthCheck implements FilterInterface
    {
        public function before(RequestInterface $request, $arguments = null)
        {
            $session = Services::session();
            if(!$session->get('isLoggedIn')){
                return redirect()->to('/boots_login/login')->with('error', 'You must be logged in to access this page.');
            }
        }

        public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
        {
            // Do something here
            
        }
    }

?>