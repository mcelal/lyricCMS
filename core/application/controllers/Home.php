<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
        $this->load->model('lyric_model');
        /**
                object(stdClass)#30 (6) {
                ["id"]=&gt;
                string(2) "82"
            ["title"]=&gt;
            string(12) "Dağlar Gibi"
            ["slug"]=&gt;
            string(11) "daglar-gibi"
            ["artist_id"]=&gt;
            string(2) "21"
            ["created_at"]=&gt;
            string(19) "2016-10-16 02:31:05"
            ["artist_slug"]=&gt;
            string(15) "cengiz-kurtoglu"
          }
         */
        $this->mViewData['lastAdd'] = $this->lyric_model->lastAdd();
        $this->mViewData['topView'] = $this->lyric_model->topView();

		$this->render('home');
	}

	public function profile2()
    {
        echo "profil";
    }

    public function ajax()
    {
        $return = [
            'status'    => false,
            'message'   => 'oluyo bişiler',
            'data'      => $this->input->post()
        ];

        echo json_encode($return);
    }

}
