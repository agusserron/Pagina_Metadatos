<?php
class Metadato extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('metadatos_model');
                $this->load->helper('url_helper');
        }


        public function index()
        {
                
                $data['metadato'] = $this->metadatos_model->get_metadato();
                $data['titulo'] = 'Titulo';
                $data['descripcion'] = 'Descripcion';

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
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Crear nuevo metadato';

        $this->form_validation->set_rules('titulo', 'titulo', 'required');
        $this->form_validation->set_rules('descripcion', 'descripcion', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('metadato/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('metadato/success');
        }
        }


    }