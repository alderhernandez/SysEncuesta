<?php


class encuesta_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getEncuestas()
    {
        
        $query = $this->db->where('estado', 'act')->get('encuestas');

        if ($query->num_rows() == 1) {
            return $query->result_array();
        }
        return 0;
        
    }

    public function getEncuestaID($id)
    {
        $query = $this->db->where('estado', 'act')->where('IdEncuesta', $id)->get('encuestas');

        if ($query->num_rows() == 1) {
            return $query->result_array();
        }
        return 0;
    }

    public function getAreas()
    {
        $query = $this->db->where('estado', 'act')->get('CatAreas');
        //echo json_encode($query->result_array());
        if ($query->num_rows()> 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function getPreguntaAResolver($id)
    {
        $query = $this->db->query("SELECT t0.IdPregunta,t0.IdTest,t0.Descripcion,t0.IdTipoPregunta
                            from EncuestasPreguntas t0                            
                            where t0.IdTest = ".$id." and t0.Estado = 'act'");
        //echo json_encode($query->result_array());
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;

    }
    public function getRespuestasAResolver($id)
    {
        $query = $this->db->query("SELECT IdValorPregunta,Descripcion DescRespuesta,IdTipoPregunta,valor 
                                FROM CatValorPregunta 
                                WHERE IdTipoPregunta IN (SELECT IdTipoPregunta FROM EncuestasPreguntas WHERE IdTest = ".$id.")
                                AND estado = 'act';");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return 0;
    }

    public function guardarEncuesta($enc,$det)
    {
        //echo json_encode($det);
        try {
            
        
        $this->db->trans_begin();

        date_default_timezone_set("America/Managua");
        $mensaje = array();

        $bandera=false;
        $det = json_decode($det, true);
        $id = $this->db->query("SELECT ISNULL(MAX(IdUsuario),0)+1 AS ID FROM UsuarioPregunta");
        foreach ($det as $obj) {
            $UsuarioRespuestas = array(
              "IdUsuario" => $id->result_array()[0]["ID"],//$this->session->userdata("id"),
              "IdPregunta" => $obj[0],
              "Resultado" => $obj[1], 
              "Respuesta" => '',
              "IdValorPregunta" => $obj[1],
              "Fecha" => date('Y-m-d H:m:s')
            );


            $inserto = $this->db->insert("UsuarioPregunta",$UsuarioRespuestas);
            $bandera=false;
            if($inserto){
                $bandera = true;
            }
        }
                if($bandera == true){
                    $mensaje[0]["mensaje"] = "Datos guardados correctamente";
                    $mensaje[0]["tipo"] = "success";
                    $this->db->trans_commit();
                    echo json_encode($mensaje);
                    return;
                }else{
                    $mensaje[0]["mensaje"] = "Error al guardar los datos de la encuesta cod -1";
                    $mensaje[0]["tipo"] = "error";
                    $this->db->trans_rollback();
                    echo json_encode($mensaje);
                    return;
                }


        } catch (Exception $e) {
            $mensaje[0]["mensaje"] = $e->getMessage();
            $mensaje[0]["tipo"] = "error";
            $this->db->trans_rollback();
            echo json_encode($mensaje);
            return;
        }
    }    

}