<?php
class Metadato extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('metadatos_model');
                $this->load->helper('url_helper', 'form');
                $this->load->library('form_validation');
        }


        public function index()
        {
                
                $data['metadato'] = $this->metadatos_model->get_metadato();
                $data['titulo'] = 'Titulo';
                $data['descripcion'] = 'Descripcion';
                $data['proposito'] = 'proposito';


                $this->load->view('templates/header', $data);
                $this->load->view('metadato/index', $data);
                $this->load->view('templates/footer');
        }

        //Mostrar DATOS 
        public function view($slug = NULL)
        {
            $data['metadato_item'] = $this->metadatos_model->get_metadato($slug);

            if (empty($data['metadato_item']))
            {
                    show_404();
            }
    
            $data['titulo'] = $data['metadato_item']['titulo'];
    
            $this->load->view('templates/header', $data);
            $this->load->view('metadatos/view', $data);
            $this->load->view('templates/footer');
        }

      public function create()
        {
        $this->load->helper('form','url');
        $this->load->library('form_validation');

        //validacion del formulario 
       $this->form_validation->set_rules('titulo','Título','required');
       $this->form_validation->set_rules('descripcion','Descripción','required');
       $this->form_validation->set_message('required', '%s es obligatorio.');
        
      

       if ($this->form_validation->run() === FALSE)
        {
           
            $this->load->view('templates/header');
            $this->load->view('metadato/create');
            $this->load->view('templates/footer');

       }
       else
       { 
            //paso la validacion 
            $this->metadatos_model->set_metadato();
            $this->load->view('metadato/success');
       }
    }
}
