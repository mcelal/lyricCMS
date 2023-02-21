<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lyric extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('lyrics');
        $crud->set_subject('Şarkı');

        $crud->columns('id', 'title', 'artist_id');
        $crud->display_as(array(
            'id'        => '# ID',
            'title'     => 'Şarkı',
            'artist_id' => 'Şarkıcı',
            'lyric'     => 'Şarkı Sözleri'
        ));

        $crud->set_relation('artist_id','artists','name');
        $crud->set_relation('submitter_id','users','username');
        $crud->set_relation('submitter_id','admin_users','username');

//        $crud->callback_column('slug',array($this,'_callback_slug'));
        $crud->callback_before_insert(array($this,'slug_callback'));


        $crud->set_rules('year','year','numeric');



        $this->unset_crud_fields('views');


		// only webmaster and admin can reset user password
		if ($this->ion_auth->in_group(array('webmaster', 'admin')))
		{
			//$crud->add_action('Reset Password', '', 'admin/user/reset_password', 'fa fa-repeat');
		}else {
            // disable direct create / delete Frontend User
            $crud->unset_add();
            $crud->unset_delete();
        }


		$this->mPageTitle = 'Şarkılar';
		$this->render_crud();
	}

    function slug_callback($post_array) {
        $this->load->helper('Slug');
        $post_array['slug'] = slug($post_array['title']);
        return $post_array;
    }

    public function _callback_slug($value, $row)
    {
        return "<a href='".site_url('admin/sub_webpages/'.$row->id)."'>$value</a>";
    }

	public function create()
	{
		$form = $this->form_builder->create_form();

		if ($form->validate())
		{
			// passed validation
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$identity = empty($username) ? $email : $username;
			$additional_data = array(
				'first_name'	=> $this->input->post('first_name'),
				'last_name'		=> $this->input->post('last_name'),
			);
			$groups = $this->input->post('groups');

			// [IMPORTANT] override database tables to update Frontend Users instead of Admin Users
			$this->ion_auth_model->tables = array(
				'users'				=> 'users',
				'groups'			=> 'groups',
				'users_groups'		=> 'users_groups',
				'login_attempts'	=> 'login_attempts',
			);

			// proceed to create user
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
		}

		// get list of Frontend user groups
		$this->load->model('group_model', 'groups');
		$this->mViewData['groups'] = $this->groups->get_all();
		$this->mPageTitle = 'Create User';

		$this->mViewData['form'] = $form;
		$this->render('user/create');
	}

	// User Groups CRUD
	public function group()
	{
		$crud = $this->generate_crud('groups');
		$this->mPageTitle = 'User Groups';
		$this->render_crud();
	}

	// Frontend User Reset Password
	public function reset_password($user_id)
	{
		// only top-level users can reset user passwords
		$this->verify_auth(array('webmaster', 'admin'));

		$form = $this->form_builder->create_form();
		if ($form->validate())
		{
			// pass validation
			$data = array('password' => $this->input->post('new_password'));
			
			// [IMPORTANT] override database tables to update Frontend Users instead of Admin Users
			$this->ion_auth_model->tables = array(
				'users'				=> 'users',
				'groups'			=> 'groups',
				'users_groups'		=> 'users_groups',
				'login_attempts'	=> 'login_attempts',
			);

			// proceed to change user password
			if ($this->ion_auth->update($user_id, $data))
			{
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);
			}
			else
			{
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}
			refresh();
		}

		$this->load->model('user_model', 'users');
		$target = $this->users->get($user_id);
		$this->mViewData['target'] = $target;

		$this->mViewData['form'] = $form;
		$this->mPageTitle = 'Reset User Password';
		$this->render('user/reset_password');
	}
}
