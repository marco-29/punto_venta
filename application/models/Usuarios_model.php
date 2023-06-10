<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function traer_todos(){
        return $this->db->get('usuarios');
    }

    function __construct()
	{
		$this->load->database();
	}

    public function ejemplo(){
		return $this->db
			->select('
				t1.*,
				t2.nombre as usuarios_nombre,
				t3.rol as roles_rol,
				t3.id as roles_id
			')

			->from("rel_usuarios_roles t1")
			->join("usuarios t2", "t2.id = t1.usuario_id")
            ->join("roles t3", "t3.id = t1.rol_id")
			->get();
	}
}