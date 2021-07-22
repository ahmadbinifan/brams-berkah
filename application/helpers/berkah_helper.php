<?php
function userView($url, $data)
{
    $ci = get_instance();
    $ci->load->view('templates/header', $data);
    $ci->load->view('templates/topbar');
    $ci->load->view('templates/sidebar');
    $ci->load->view($url);
    $ci->load->view('templates/footer');
}

function checkLogin()
{
    $ci = get_instance();
    if (empty($ci->session->userdata('id_user'))) {
        redirect('auth');
    }
}
