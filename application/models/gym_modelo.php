<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gym_modelo extends CI_Model {

	function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	public function buscapersona($datos)
	{
		$consulta=$this->db->get_where('login',$datos);
		return $consulta;
	}
	public function traeclases()
	{
		$consulta=$this->db->query('select * from clase');
		return $consulta;
	}
	public function miinfo($id)
	{
		$consulta=$this->db->get_where('usuario',$id);
		return $consulta;
	}
	public function infousuario($usuario)
	{
		$consulta=$this->db->query("select usuario.nombre,usuario.apellido,usuario.telefono,usuario.correo,usuario.edad,clase.nombre as clase,clase.horaini,clase.horafin,pagado from usuario,inscripto,clase where inscripto.idusuario=usuario.idusuario and inscripto.idclase=clase.idclase and usuario.nombre like '%$usuario%' or usuario.apellido like '%$usuario%'");
		return $consulta;
	}
	public function traeusuarios()
	{
		$consulta=$this->db->query('select * from usuario');
		return $consulta;
	}
	public function traerinscriptos()
	{
		$consulta=$this->db->query('select usuario.nombre,usuario.apellido,clase.nombre as clase,clase.horaini,clase.horafin,pagado from usuario,inscripto,clase where inscripto.idusuario=usuario.idusuario and inscripto.idclase=clase.idclase');
		return $consulta;
	}
	public function insertarusuario($datos)
	{
		$consulta=$this->db->insert('inscripto',$datos);
		return $consulta;
	}
	public function informarpago($datos)
	{
		$dato=array(
		'pagado'=>$datos['pagado'],
		);	
		$donde=array(
		'idusuario'=>$datos['idusuario'],
		);
		$this->db->where($donde);
		$consulta=$this->db->update('inscripto',$dato);
		return $consulta;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */