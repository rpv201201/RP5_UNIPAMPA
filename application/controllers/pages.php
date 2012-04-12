<?php

class Pages extends CI_Controller {
    
    public function view($page = 'home')
        {
        if (!file_exists('application/views/pages/'.$page.'.php'))
        {
            //PAGINA INEXISTENTE
            show_404();
        }
        
        $data['title'] = ucfirst($page); //Primeira letra em maísculo
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}


