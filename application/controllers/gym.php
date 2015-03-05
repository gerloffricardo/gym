<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gym extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$datos=array(
			'mensaje'=>"",
			
			);
		//creamos un array para recibir o pasar los datos
		if($_POST)
		{
			$datos=array(
			'usuario'=>$this->input->post('usuario'),
			'clave'=>$this->input->post('clave'),
			
			);
			//llamamos a la funcion en modelo
			$resultado=$this->gym_modelo->buscapersona($datos);
			
			//verificamos si encontro resultados
			if($resultado->result())
			{
				//encontro al usuario
				$this->session->set_userdata('idusuario',$resultado->row()->idusuario);
				
				//aqui se puede cargar informacion adicional
				//para llamar la pagina usamos this load view o redirect
				redirect("index.php/Gym/bandeja");
				
			}
			else
			{
				//no encontro
				$datos=array(
				'mensaje'=>"usuario incorrecto",
			
				);
			}
		}
		
		$this->load->view('inicio',$datos);
	}

public function bandeja()
	{
		$this->load->view('bandeja');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */