<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function index()
	{
		$this->load->model('user_model', 'users');
		$this->load->model('artist_model', 'artists');
		$this->load->model('lyric_model', 'lyrics');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
            'artists' => $this->artists->count_all(),
            'lyrics' => $this->lyrics->count_all(),
		);
		$this->render('home');
	}
}
