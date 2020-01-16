<?php

/**
 * @Author: Sistemas
 * @Date:   2019-11-25 09:14:17
 * @Last Modified by:   Sistemas
 * @Last Modified time: 2019-11-25 14:44:47
 */

class Hana_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public $BD = '';

	public  function OPen_database_odbcSAp()//CONEXION A HANA EMPRESA      
	{
       $conn = @odbc_connect("odbc","database","password", SQL_CUR_USE_ODBC);
         if(!$conn){
            echo '<div class="row errorConexion white-text center">
                    ¡ERROR DE CONEXION CON EL SERVIDOR!
                </div>';
         } else {
           return $conn;
         }          
    }


}