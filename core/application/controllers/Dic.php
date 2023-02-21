<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dic extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index($par = null)
	{

        var_dump($par);
    }

}
