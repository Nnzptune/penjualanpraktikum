<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function about()
	{
<<<<<<< HEAD
=======
		//fungsi untuk me load view about.php
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
		$this->load->view('about');
	}
	public function profile()
	{
<<<<<<< HEAD
		$this->load->view('profile');
	}
	public function menu()
	{
		$this->load->view('menu');
	}
=======
		//fungsi untuk meload view contact.php
		$this->load->view('profile');
	}
>>>>>>> 0bdf5f03fa51e6f3a8636a6c9a86ce671456422f
}
