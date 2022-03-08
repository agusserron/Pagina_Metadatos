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
        
        public function set_news()
        {
        $this->load->helper('url');

         $slug = url_title($this->input->post('titulo'), 'dash', TRUE);

         $data = array(
        'titulo' => $this->input->post('titulo'),
        'slug' => $slug,
        'descripcion' => $this->input->post('descripcion'),
        'proposito' => $this->input->post('proposito'),
        'PalabrasClaveT' => $this->input->post('PalabrasClaveT'),
        'PalabrasClaveG' => $this->input->post('PalabrasClaveG')
         );

        return $this->db->insert('metadato', $data);
        }


}