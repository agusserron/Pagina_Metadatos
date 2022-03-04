<?php
class metadatos_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_metadato($slug = FALSE)
        {
                if ($slug === FALSE)
                {
                        $query = $this->db->get('metadato');
                        return $query->result_array();
                }
        
                $query = $this->db->get_where('metadato', array('slug' => $slug));
                return $query->row_array();
        }
        
        public function set_metadato()
        {
        $this->load->helper('url');

        $slug = url_title($this->input->post('titulo'), 'dash', TRUE);

        $data = array(
        'titulo' => $this->input->post('titulo'),
        'slug' => $slug,
        'descripcion' => $this->input->post('descripcion'),
        );

        return $this->db->insert('Metadato', $data);
        }

    }