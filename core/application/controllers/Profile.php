<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Profile extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
    }

    public function index()
	{
		$this->render('profile/profile_home');
	}

	public function login()
    {

        // check logged in
        if ($this->ion_auth->logged_in())
        {
            redirect($this->mModule);
        }


        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->render('profile/profile_login');
        }
        else
        {
            // passed validation
            $identity = $this->input->post('username');
            $password = $this->input->post('password');
            $remember = ($this->input->post('remember')=='on');

            if ($this->ion_auth->login($identity, $password))
            {
                // login succeed
                $this->session->set_flashdata('err', $this->ion_auth->messages());
                redirect($this->mModule);
            }
            else
            {
                // login failed
                $this->session->set_flashdata('err', $this->ion_auth->errors());
                refresh();
            }
        }
    }

}
