<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
     public function login()
    {
        return view('login-page.php');
    }
    public function create()
    {
        return view('create-user-page');
    }

    public function profil()
    {
        return view('profil-page');
    }
}