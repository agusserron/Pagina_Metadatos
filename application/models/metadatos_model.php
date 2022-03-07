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
        
        public function set_metadato($data)
        {
         $this->db->insert('metadato', $data);
         return;
        }



    }