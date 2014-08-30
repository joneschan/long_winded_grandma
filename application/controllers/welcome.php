<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');

		date_default_timezone_set('Asia/Hong_Kong');
		$hour = date('H');
		$fb = rand()%2;
		//$fb = 0; //testing
		if($hour > 6 ){
			if($fb == 1){
				redirect("http://www.facebook.com");
			}else{
				$this->load->view('toxicexit');
			}
		}else{
			$this->load->view('time2sleep');
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
