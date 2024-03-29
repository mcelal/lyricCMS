<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

    // Template folder
    'template_folder' => 'views/template',

    // Site Default Template [material, bootstrap]
    'template' => 'material',

	// Site name
	'site_name' => 'mCelal',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> 'Mehmet Celal Kara | info@mcelal.com',
		'description'	=> '',
		'keywords'		=> ''
	),

	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
		),
		'foot'	=> array(
//			'assets/dist/frontend/lib.min.js',
//			'assets/dist/frontend/app.min.js',
            'assets/js/frontend.js'
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			//'assets/dist/frontend/lib.min.css',
			//'assets/dist/frontend/app.min.css'
		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	'languages' => array(
/*		'default'		=> 'tr',
		'autoload'		=> array('general'),
		'available'		=> array(
		    'tr' => array(
		        'label' => 'Türkçe',
                'value' => 'turkish'
            ),
			'en' => array(
				'label'	=> 'English',
				'value'	=> 'english'
			)
		)*/

	),

	// Google Analytics User ID
	'ga_id' => '',

	// Menu items
	'menu' => array(
        'home' => array(
            'name'		=> 'Anasayfa',
            'url'		=> '',
            'icon'		=> 'dashboard',
        ),
        'auth' => array(
            'name'		=> 'Hesabım',
            'url'		=> 'profile',
            'icon'		=> 'supervisor_account',
            'children'  => array(
                'Giriş'			=> 'profile/login',
                'Kayıt'		=> 'profile/sign_up',
                'Profilim'        => 'profile'
            )
        )
	),

	// Login page
    'login_url' => 'profile/login',

	// Restricted pages
	'page_auth' => array(
	),

	// Email config
	'email' => array(
		'from_email'		=> '',
		'from_name'			=> '',
		'subject_prefix'	=> '',
		
		// Mailgun HTTP API
		'mailgun_api'		=> array(
			'domain'			=> '',
			'private_api_key'	=> ''
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),

    // Artist
    'route_site' => array(
        'artist' => 'artist/{artist}/{id}',
        'lyric'  => 'lyrics/{artist}/{lyric}'
    )
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_frontend';