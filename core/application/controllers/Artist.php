<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index($artist_slug = null)
	{

        /**
         *  $artist_slug ile veri tabanında arama yap
         */
        $this->load->model('artist_model');
        $this->load->model('lyric_model');


        /** @var object $artistData
         *  id      => string
         *  name    => string
         *  slug    => string
         *  active  => string
         */
        $artistData = $this->artist_model->get_by(['slug' => $artist_slug]);

        if (!$artistData){
            $this->error_404();
            return;
        }

        $songList = $this->lyric_model->findArtist($artistData->id, 0, 1);


        $this->mViewData['artist'] = $artistData;
        $this->mViewData['lyrics'] = $songList;
        $this->push_breadcrumb($artistData->name);
        $this->mPageTitle = 'Şarkıcı';

        $this->render('artist', 'material');
    }

}
