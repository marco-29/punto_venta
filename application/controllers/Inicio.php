<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('usuarios_model');
    }

	public function index() {
        // $data['usuarios'] = $this->usuarios_model->traer_todos();
        $data['rel_usuarios_roles'] = $this->usuarios_model->ejemplo()->result();
		$this->load->view('inicio', $data);
	}

}
