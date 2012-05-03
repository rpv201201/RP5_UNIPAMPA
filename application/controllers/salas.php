<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of salas
 *
 * @author Lucas
 */
class Salas extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
    
    public function index()
    {
        //echo "<h1>Sistema de Gerenciamento de Disponibilidade</h1>";
        $this->load->view('gerenciaDisp/gerenciaDisp.php');
        //die();
    }
    
    public function salacontrol()
    {
        try 
        {
            $crud = new grocery_CRUD();
            //$crud->set_theme('datatables');
            $crud->set_table('salas');
            $crud->set_subject('Sala');
            
            $crud->required_fields('campus', 'numero', 'tipo', 'capacidade');           

            $crud->display_as('campus', 'Campus');
            $crud->display_as('numero', 'Número da Sala');
            $crud->display_as('cidadeID', 'Campus');
            $crud->unset_columns('disponibilidade');
            $crud->unset_add_fields('disponibilidade');
            
            $crud->set_relation('campus', 'cidades', 'nome');
            $crud->set_relation('tipo', 'tipos', 'nome');
            //$crud->set_rules('numero', 'Número da Sala', 'Integer');
            
            $crud->change_field_type('disponibilidade', 'true_false');            
            
            $output = $crud->render();
            
            $this->_sala_output($output);
            
        }catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
    }
        
    function _sala_output($output = null)
    {
        $this->load->view('salas/salas_view', $output);
    }
    
}
