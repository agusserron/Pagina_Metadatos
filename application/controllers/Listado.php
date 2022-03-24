<?php
class Listado extends CI_Controller {

/* comienzo norberto datatables */
        public function index()
        {
   
            publicfunction__construct() {
                parent::__construct();
                $this->load->database();
             }

             // Datatables Variables
             $draw = intval($this->input->get("draw"));
             $start = intval($this->input->get("start"));
             $length = intval($this->input->get("length"));
   
   
             $md = $this->metadatos_model->get_metadato();
   
             $data = array();
   
             foreach($md->result() as $r) {
   
                  $data[] = array(
                       $r->titulo,
                       $r->slug,
                       $r->descripcion,
                       $r->proposito,
                       $r->palabrasClaveT,
                       $r->palabrasClaveG
                  );
             }
   
             $output = array(
                  "draw" => $draw,
                    "recordsTotal" => $md->num_rows(),
                    "recordsFiltered" => $md->num_rows(),
                    "data" => $data
               );
             echo json_encode($output);
             exit();
        }

        /* fin norberto datatables */
}        