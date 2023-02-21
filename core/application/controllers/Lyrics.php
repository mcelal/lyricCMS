<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lyrics extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index($artist = null, $slug =null)
	{
        /**
         *  $artist ve $lyric gelen bilgileriyle şarkıyı veritabanında bul
         */
        $this->load->model('lyric_model');

        $lyricData = $this->lyric_model->getLyric($artist, $slug);

        $this->mViewData['lyric'] = $lyricData;
        $this->push_breadcrumb($lyricData->artist_name[0], lang_url($this->mLanguage, 'dic/'.$lyricData->artist_name[0]));
        $this->push_breadcrumb($lyricData->artist_name, lang_url($this->mLanguage, 'artist/'.$lyricData->artist_slug));
        $this->push_breadcrumb($lyricData->title);
        $this->mPageTitle = 'Şarkıcılar';

        $this->render('lyric', 'material');
    }

}
