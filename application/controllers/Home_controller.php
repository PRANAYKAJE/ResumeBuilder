<?php
class Home_controller extends CI_Controller {

public function home()
{
    $this->load->view('index');
}

public function signin()
{
    $this->load->view('signin');
}

public function signup()
{
    $this->load->view('signup');
}

public function template()
{
    $this->load->view('template');
}

public function resume()
{
    $this->load->view('resume1');
}

public function resume2()
{
    $this->load->view('resume2');
}
}