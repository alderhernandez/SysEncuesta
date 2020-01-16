<?php

/**
 * @Author: Cesar Mejía
 * @Date:   2019-11-22 15:54:12
 * @Last Modified by:   Sistemas
 * @Last Modified time: 2019-11-22 15:57:32
 */
class Login_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($name,$pass)
    {
        if ($name != FALSE && $pass != FALSE) {
            $query = $this->db->where('USUARIO', $name)->where('PASSWORD', $pass)->where("ESTADO","A")->get('Usuarios');

            if ($query->num_rows() == 1) {
                return $query->result_array();
            }
            return 0;
        }
    }

}