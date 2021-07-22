<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        checkLogin();
        $data['title'] = 'ini judul';
        userView('home/index', $data);
    }
}

/* End of file Home.php */
