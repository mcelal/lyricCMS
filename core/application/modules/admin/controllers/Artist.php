<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
        $this->load->library('image_CRUD');

    }

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('artists');
        $crud->set_subject('Şarkıcı');

        $crud->columns('id', 'name', 'active');
        $crud->display_as('id','# ID');
        $crud->display_as('name','Şarkıcı');
        $crud->display_as('biography','Biyografi');
        $crud->display_as('active','Aktif');

        $crud->set_field_upload('photo','assets/uploads');


        $this->unset_crud_fields('slug');


		// only webmaster and admin can reset user password
		if ($this->ion_auth->in_group(array('webmaster', 'admin')))
		{
			//$crud->add_action('Reset Password', '', 'admin/user/reset_password', 'fa fa-repeat');
		}else {
            // disable direct create / delete Frontend User
            $crud->unset_add();
            $crud->unset_delete();
        }


		$this->mPageTitle = 'Şarkıcılar';
		$this->render_crud();
	}

	public function image()
    {
        $c = new image_CRUD();

        $c->set_table('photos');

        $c->set_url_field('url');
        $c->set_title_field('title');
        $c->set_ordering_field('order');
        $c->set_image_path('uploads');

         $c->render();



    }

	// Create Frontend User
	public function create()
	{
		$form = $this->form_builder->create_form();


        $this->form_validation->set_rules('name', 'Şarkıcı Adı', 'required');
//            if ($form->validate())
        if ($this->form_validation->run() == TRUE)
		{
			// passed validation
			$name = $this->input->post('name');
            $biography = $this->input->post('biography');

            $this->load->helper('Slug');
            $this->load->model('Artist_model', 'artist');

            $artist = $this->artist->insert(array(
                'name'      => $name,
                'slug'      => slug($name),
                'biography' => $biography,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ));

            if ($artist)
            {
                $this->session->set_flashdata('success', 'Başarıyla Kaydedildi');
                refresh();
            }
            else
            {
                $this->session->set_flashdata('error', 'Bir hatayla karşılaşıldı');
            }
			// proceed to create user
			/*
            $user_id = $this->ion_auth->register($identity, $password, $email, $additional_data, $groups);
			if ($user_id)
			{
				// success
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);

				// directly activate user
				$this->ion_auth->activate($user_id);
			}
			else
			{
				// failed
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}
			refresh();
			*/
		}

		// get list of Frontend user groups
		$this->load->model('group_model', 'groups');
		$this->mViewData['groups'] = $this->groups->get_all();
		$this->mPageTitle = 'Yeni Şarkıcı';

		$this->mViewData['form'] = $form;
		$this->render('artist/create');
	}


}
