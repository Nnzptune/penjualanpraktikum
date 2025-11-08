<?php
function infoLogin(){
    $ci = get_instance();
    return $ci->db->get_where('user', ['username' => $ci->session->userdata('username')])->row_array();
}

function cek_login(){
    $ci = get_instance();
    if( !$ci->session->userdata('username') ){
        redirect('login');
    }
}

function cek_user(){
    $ci = get_instance();
    $user = $ci->db->get_where('user', ['username' => $ci->session->userdata('username')])->row_array();
    if($user['role'] == 'admin'){
<<<<<<< HEAD
        } else {
        redirect('login/block');
    }
}
=======
    }else{
        redirect('login/block');
    }
}
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
