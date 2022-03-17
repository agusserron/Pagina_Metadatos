<?php
class Metadato extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('metadatos_model');
                $this->load->helper('url_helper', 'form');
                $this->load->library('form_validation');
              
        }


        public function index($offset = 0)
        {


                $this->load->helper('form','url');
                $this->load->library('form_validation');
                $this->load->library('pagination');
                $this->load->library('table');
         
                

              
               
 
                if(!isset($_POST['usuario'])){   //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
                        $this->load->view('templates/header');
                        $this->load->view('metadato/form_login'); 
                        $this->load->view('templates/footer');     //   Por lo tanto le presentamos la pantalla del formulario de ingreso.
                     }
                     else{                        //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
                        $this->form_validation->set_rules('usuario','Usuario','required');      //   Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
                        $this->form_validation->set_rules('contraseña','Contraseña','required');
                        $this->form_validation->set_message('required', '%s es obligatorio.');
                        if(($this->form_validation->run()==FALSE)){   
                                                                  //   Verificamos si el usuario superó la validación
                                $this->load->view('templates/header');  //   En caso que no, volvemos a presentar la pantalla de login
                                $this->load->view('metadato/form_login'); 
                                $this->load->view('templates/footer');                     
                        }
                        else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
                           $this->load->model('metadatos_model');
                           $ExisteUsuarioyPassoword=$this->metadatos_model->ValidarUsuario($_POST['usuario'],$_POST['contraseña']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
                           if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
                                
                                $this->load->library('pagination');
   
                                $data['metadato'] = $this->metadatos_model->get_metadato();
                               
                                $limit = 10;
                                $results = $this->metadatos_model->search($limit, $offset);
                                $data['metadato'] = $results['rows'];
                                $data['num_results'] = $results['num_rows'];

                                //PAGINATION
                                $this->load->library('pagination');

                               
                                $config = array();
                                $config['base_url'] = site_url('metadato/busqueda');
                                $config['total_rows'] = $results['num_rows'];
                                $config['per_page'] = $limit;
                                $config['uri_segment'] = 3;
                                $this->pagination->initialize($config);
                                $data['pagination'] = $this->pagination->create_links();
                        
                                $this->load->view('templates/header');
                                $this->load->view('metadato/busqueda', $data);
                                $this->load->view('templates/footer');
                    
                               

                             
                                //$this->metadatos_model->usuarioIncorrecto($ExisteUsuarioyPassoword);    //   Si el usuario ingresó datos de acceso válido, imprimos un mensaje de validación exitosa en pantalla
                           }

                           else{   //   Si no logró validar
                            $this->metadatos_model->usuarioIncorrecto($ExisteUsuarioyPassoword);  
                              $this->load->view('templates/header');
                              $this->load->view('metadato/form_login'); 
                              $this->load->view('templates/footer');  //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
                           }
                        }
                     }

                    
                    
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
    
            $this->load->view('templates/header');
            $this->load->view('metadatos/busqueda', $data);
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
            $this->load->view('templates/header');
            $this->load->view('metadato/success');
            $this->load->view('templates/footer');
       }
      }
      public function busqueda($offset = 0){
        
        $this->load->helper('url');
        $this->load->library('table');
        
        //$this->table->set_heading('ID', 'Título');

        $this->load->model('metadatos_model');


                        
                                
        $limit = 10;
        $results = $this->metadatos_model->search($limit, $offset);
        $data['metadato'] = $results['rows'];
        $data['num_results'] = $results['num_rows'];

        //PAGINATION
        $this->load->library('pagination');

        
        $config = array();
        $config['base_url'] = site_url('metadato/busqueda');
        $config['total_rows'] = $results['num_rows'];
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header');
        $this->load->view('metadato/busqueda', $data);
        $this->load->view('templates/footer');

        


      }

    
}
